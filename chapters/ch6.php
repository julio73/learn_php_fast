<?php
  $title = "Chapter 6";
  include_once 'shared/chapter_head.php';
?>
<body>
<?php include_once 'shared/header.php'; ?>
<h2>Chapter Six – Databases</h2>
<pre>
  Introduction
  What is an API?
    Connectors
    Drivers
    Extensions
    PHP MySQL APIs
    mysqli Extension
    PDO Extension
  PHPMyAdmin and getting familiar with MySQL
    Basics
  MySQLi
    Dual interface
    Connections
    Executing statements
    Prepared statements
  Conclusion
</pre>

<!-- Exercice 1 -->
<h2 id="exo1"c>Exercice 1</h2>
<details open>
  <summary>Solution | <a href="#" title="Back to top">▲ Top</a></summary>
  <pre>
<?php 

$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
  $link,
  $host,
  $user,
  $password,
  $db,
  $port
);

var_dump($link);

 ?>
  </pre>
</details>

<!-- Exercice 2 -->
<h2 id="exo2">Exercice 2</h2>
<details>
  <summary>Solution | <a href="#" title="Back to top">▲ Top</a></summary>
  <pre>
<?php 



 ?>
  </pre>
</details>

<!-- Exercice 3 -->
<h2 id="exo3">Exercice 3</h2>
<details>
  <summary>Solution | <a href="#" title="Back to top">▲ Top</a></summary>
  <pre>
<?php 



 ?>
  </pre>
</details>
<?php include 'shared/footer.php'; ?>
</body>