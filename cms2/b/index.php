<?php
require "connect.php";
$ID = $_GET['id'];
$query = $pdo->prepare("SELECT * FROM posts WHERE ID = $ID");
$query->execute();
while ($posts = $query->fetch()) { 
  $headline = $posts[1];
  $text = $posts[2];
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
  <style>
    /* Reset styles */
    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    /* Base styles */
    body {
      font-family: Arial, sans-serif;
    }

    /* Navbar styles */
    .navbar {
      background-color: #333;
      color: #fff;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
    }

    .navbar-brand {
      font-size: 1.5em;
      font-weight: bold;
      text-transform: uppercase;
    }

    .navbar-toggle {
      display: none;
      font-size: 2em;
      cursor: pointer;
    }

    .navbar-links {
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-end;
      align-items: center;
    }

    .navbar-link {
      margin-left: 20px;
      color: #fff;
      text-decoration: none;
      text-transform: uppercase;
      transition: opacity 0.2s;
    }

    .navbar-link:hover {
      opacity: 0.8;
    }

    /* Mobile styles */
    @media (max-width: 767px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }

      .navbar-toggle {
        display: block;
      }

      .navbar-links {
        display: none;
        width: 100%;
        margin-top: 20px;
      }

      .navbar-links.show {
        display: flex;
      }

      .navbar-link {
        display: block;
        margin: 10px 0;
      }
    }

    /* Tablet and desktop styles */
    @media (min-width: 768px) {
      .navbar {
        justify-content: space-between;
      }

      .navbar-toggle {
        display: none;
      }

      .navbar-links {
        display: flex;
        width: auto;
        margin: 0;
      }

      .navbar-link {
        margin: 0 20px;
      }
    }
  </style>
</head>
<body>
  <header class="navbar">
    <div class="navbar-brand">My Site</div>
    <div class="navbar-toggle">&#9776;</div>
    <div class="navbar-links">
      <?php
      $query = $pdo->prepare("SELECT * FROM posts");
      $query->execute();
      while ($posts = $query->fetch()) { 
        echo '<a class="navbar-link" href="index.php?id='.$posts[0].'">'.$posts[1].'</a>';
      }
      ?>
    </div>
  </header>

  <main>
    <h1><?php echo $headline; ?></h1>
    <p><?php echo $text; ?></p>
  </main>

  <script>
    // Add click event listener to navbar toggle button
    var navbarToggle = document.querySelector('.navbar-toggle');
    navbarToggle.addEventListener('click', function() {
      // Toggle show class on navbar
