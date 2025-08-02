<?php
session_start();
$lang = $_SESSION["lang"] ?? "ar";
?>
<link rel="stylesheet" href="style.css">
<div class="language-picker language-picker--hide-label js-language-picker"
     data-trigger-class="li4-btn li4-btn--subtle js-tab-focus">
    <form action="" class="language-picker__form">
        <label for="language-picker-select">Select your language</label>
        <select name="language-picker-select" id="language-picker-select">
            <option lang="am" data-lang="am" value="ar" selected>Armenian
            </option>
            <option lang="en" data-lang="en" value="en" >English
            </option>
            <option lang="ru" data-lang="ru" value="ru" >Russian
            </option>
        </select>
    </form>
</div>

<script src="script.js"></script>