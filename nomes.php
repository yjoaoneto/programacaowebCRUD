<?php

// CONECTANDO COM O BANCO DE DADOS
$dbname = "test"; // nome do banco de dados
$dbhost = "localhost"; // local onde está o banco de dados
$dbuser = "root"; // nome do usuário do bando de dados
$dbpass = ""; // senha do usuário do bando de dados

$pdo = new PDO("mysql:dbname=" . $dbname . ";host:" . $dbhost . "", "" . $dbuser . "", $dbpass);

// SELECIONANDO DADOS NO BANCO DE DADOS

$sql = $pdo->query("SELECT * FROM users");

// COLOCANDO DADOS NO ARRAY
if ($sql->rowCount() > 0) {
  $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}


?>
<!doctype html>
<html lang="pt-br">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Canvas de Usabilidade</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="icon" href="assets/img/projetophp/Logo U projeto.png">
  <link href="index.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.11.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="welcome.php" class="logo d-flex align-items-center">
        <img src="assets/img/projetophp/Logo U projeto.png" alt="">
        <span>Usabilidade</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="welcome.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Download</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="https://trello.com/1/cards/636128416dffba00240fc0a8/attachments/636a4faa45cd5a0393ddfe8a/download/autopass.pdf">BAIXAR AUTOPASS</a></li>
              <li><a href="https://trello.com/1/cards/636128416dffba00240fc0a8/attachments/636128416dffba00240fc0c3/download/linkedin-caso-de-exito-olx_(1).pdf">BAIXAR OLX</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="welcome.php">Contatos</a></li>
          <li><a class="getstarted scrollto" href="logout.php" id="delete">Logout </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  </nav>


  <br>
  <br>
  <br>
  <br>

  <main class="container mt-5">
 
    <div class="bg-light p-5 rounded">
      <h1>Lista de Usuários</h1>
      
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">Senha</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($lista as $perfil) : ?>
            <tr>
              <th scope="row"><?php echo $perfil['id']; ?></th>
              <td><?php echo $perfil['username']; ?></td>
              <td><?php echo $perfil['password']; ?></td>
              
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </main>
  <script src="/CRUD_unipe/assets/bootstrap.bundle.min.js"></script>
</body>

</html>