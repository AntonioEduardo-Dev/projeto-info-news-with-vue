<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php include 'resources/layouts/head.php'; ?>
</head>
<body>

  <?php include 'resources/layouts/header.php'; ?>

  <?php include 'resources/layouts/navbar.php'; ?>

  <main>
    <?php
      // Pega o valor da página pela URL, ex: ?page=sobre
      $pagina = isset($_GET['page']) ? $_GET['page'] : 'home';

      // Caminho do arquivo
      $caminho = "resources/views/{$pagina}.php";

      // Verifica se o arquivo existe antes de incluir
      if (file_exists($caminho)) {
        include $caminho;
      } else {
        echo "<h2>Página não encontrada.</h2>";
      }
    ?>
  </main>

  <?php include 'resources/layouts/footer.php'; ?>

</body>
</html>
