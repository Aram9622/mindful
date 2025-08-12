<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FooterTest extends TestCase
{
    /**
     * Attempt to include the footer function definition.
     * Adjust path here if the footer() function lives in a different file.
     *
     * We try a few plausible include paths commonly used in PHP projects.
     */
    public static function setUpBeforeClass(): void
    {
        // If footer() already exists, skip includes.
        if (function_exists('footer')) {
            return;
        }

        $tried = [];

        // Ordered guesses for where the footer() function might be defined.
        $candidates = [
            // Common include locations — please adjust if your project uses another path.
            __DIR__ . '/../../includes/footer.php',
            __DIR__ . '/../../include/footer.php',
            __DIR__ . '/../../Utils/footer.php',
            __DIR__ . '/../../utils/footer.php',
            __DIR__ . '/../../src/Utils/footer.php',
            __DIR__ . '/../../src/utils/footer.php',
            __DIR__ . '/../../app/Utils/footer.php',
            __DIR__ . '/../../footer.php',
        ];

        foreach ($candidates as $path) {
            $tried[] = $path;
            if (is_file($path)) {
                require_once $path;
                if (function_exists('footer')) {
                    return;
                }
            }
        }

        // As a fallback, if the project inlines the function in the test input,
        // define a minimal wrapper to allow tests to execute.
        // This ensures the tests fail meaningfully if the real file isn't found.
        if (!function_exists('footer')) {
            // Provide a minimal stub only if absolutely necessary.
            // This stub will cause many tests to fail, signaling the include path must be corrected.
            eval('function footer($dir = "") { echo \"<footer class=\\\"ftco-footer\\\"></footer>\"; }');
        }

        // Surface what paths we attempted, aiding debugging if tests fail.
        fwrite(STDERR, \"[FooterTest] Searched for footer() in: \\n - \" . implode(\"\\n - \", $tried) . \"\\n\");
    }

    private function renderFooter($dir = ""): string
    {
        ob_start();
        try {
            footer($dir);
        } finally {
            $out = ob_get_clean();
        }
        $this->assertIsString($out, 'Footer output should be a string');
        $this->assertNotSame('', $out, 'Footer should output non-empty HTML');
        return $out;
    }

    public function test_footer_renders_basic_structure_with_default_dir(): void
    {
        $html = $this->renderFooter();

        // Basic container and footer presence
        $this->assertStringContainsString('<footer', $html);
        $this->assertStringContainsString('class="ftco-footer"', $html);
        $this->assertStringContainsString('</footer>', $html);

        // Company and CTA elements
        $this->assertStringContainsString('Counselor', $html);
        $this->assertStringContainsString('Learn to be mindful', $html);

        // Social links
        $this->assertStringContainsString('https://www.facebook.com/mindful.mhc', $html);
        $this->assertStringContainsString('https://www.instagram.com/mindful.arm/', $html);

        // Explore list items (About, Contact)
        $this->assertStringContainsString('id="explore"', $html);
        $this->assertStringContainsString('id="footer-about"', $html);
        $this->assertStringContainsString('id="footer-contact"', $html);

        // Contact section
        $this->assertStringContainsString('Have a Questions?', $html);
        $this->assertStringContainsString('15 a, Nalbandyan St, Yerevan, Armenia 0001', $html);
        $this->assertStringContainsString('tel:+37444181230', $html);
        $this->assertStringContainsString('mailto:info@mindfulme.am', $html);

        // Copyright/credit
        $this->assertStringContainsString('Copyright', $html);
        $this->assertStringContainsString('NeuronTalks.am', $html);
    }

    public function test_footer_includes_google_maps_and_js_assets_with_default_dir(): void
    {
        $html = $this->renderFooter();

        // External Google Maps API script (we don't assert the specific key, only the API presence)
        $this->assertStringContainsString('https://maps.googleapis.com/maps/api/js?key=', $html);

        // With empty default dir, scripts should start directly with js/ or language-config/ etc.
        $this->assertStringContainsString('<script src="js/jquery.min.js"></script>', $html);
        $this->assertStringContainsString('<script src="js/jquery-migrate-3.0.1.min.js"></script>', $html);
        $this->assertStringContainsString('<script src="language-config/script.js"></script>', $html);
        $this->assertStringContainsString('<script src="js/popper.min.js"></script>', $html);
        $this->assertStringContainsString('<script src="js/bootstrap.min.js"></script>', $html);
        $this->assertStringContainsString('<script src="js/main.js"></script>', $html);
        $this->assertStringContainsString('<script src="js/app.js"></script>', $html);
    }

    public function test_footer_applies_dir_prefix_without_trailing_slash(): void
    {
        $dir = 'assets/';
        $html = $this->renderFooter($dir);

        // Prefixed assets
        $this->assertStringContainsString('<script src="assets/js/jquery.min.js"></script>', $html);
        $this->assertStringContainsString('<script src="assets/js/jquery-migrate-3.0.1.min.js"></script>', $html);
        $this->assertStringContainsString('<script src="assets/language-config/script.js"></script>', $html);
        $this->assertStringContainsString('<script src="assets/js/popper.min.js"></script>', $html);
        $this->assertStringContainsString('<script src="assets/js/bootstrap.min.js"></script>', $html);
        $this->assertStringContainsString('<script src="assets/js/main.js"></script>', $html);
        $this->assertStringContainsString('<script src="assets/js/app.js"></script>', $html);

        // Ensure no double-prefix or missing prefix for the internal assets
        $this->assertStringNotContainsString('<script src="js/jquery.min.js"></script>', $html, 'Unprefixed asset found with non-empty dir');
    }

    public function test_footer_applies_dir_prefix_with_leading_and_trailing_slashes(): void
    {
        $dir = '/static/build/';
        $html = $this->renderFooter($dir);

        $this->assertStringContainsString('<script src="/static/build/js/jquery.min.js"></script>', $html);
        $this->assertStringContainsString('<script src="/static/build/language-config/script.js"></script>', $html);
        $this->assertStringContainsString('<script src="/static/build/js/app.js"></script>', $html);
    }

    public function test_footer_handles_null_dir_gracefully(): void
    {
        // PHP will echo nothing for null in short echo tags, expect unprefixed paths.
        $html = $this->renderFooter(null);

        $this->assertStringContainsString('<script src="js/jquery.min.js"></script>', $html);
        $this->assertStringContainsString('<script src="language-config/script.js"></script>', $html);
        $this->assertStringContainsString('<script src="js/app.js"></script>', $html);

        // Also still contains core structure
        $this->assertStringContainsString('<footer', $html);
        $this->assertStringContainsString('</footer>', $html);
    }

    public function test_footer_contains_loader_svg_and_unique_ids(): void
    {
        $html = $this->renderFooter();

        // Loader existence
        $this->assertStringContainsString('id="ftco-loader"', $html);
        $this->assertStringContainsString('<svg class="circular"', $html);

        // Footer anchors and IDs
        $this->assertStringContainsString('id="explore"', $html);
        $this->assertStringContainsString('id="have_question"', $html);
    }

    public function test_footer_has_required_links_are_target_blank_where_expected(): void
    {
        $html = $this->renderFooter();

        // Ensure social external links open in a new tab
        $this->assertMatchesRegularExpression('#<a href="https://www.facebook.com/mindful\.mhc" target="_blank">#', $html);
        $this->assertMatchesRegularExpression('#<a href="https://www.instagram.com/mindful\.arm/" target="_blank">#', $html);

        // Ensure credit link also target="_blank"
        $this->assertMatchesRegularExpression('#<a href="https://www\.neurontalks\.am" target="_blank">#', $html);
    }
}