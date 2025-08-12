<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'utils/head.php'; ?>
    <?= head() ?>
  </head>
  <body>
    <?php require_once "utils/menu.php"?>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h1 style="font-size: 100px; font-weight: bold;">404</h1>
            <h2>Страница не найдена</h2>
            <p>К сожалению, страница, которую вы ищете, не существует.</p>
            <p><a href="index.php" class="btn btn-primary">Вернуться на главную</a></p>
          </div>
        </div>
      </div>
    </section>

    <?php require_once "utils/footer.php"?>
    <?php footer(); ?>

  </body>
</html>