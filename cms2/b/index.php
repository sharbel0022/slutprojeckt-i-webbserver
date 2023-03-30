<?php
require "connect.php";
$ID= $_GET['id'];
$query = $pdo->prepare("select * from posts where ID = $ID");
$query->execute();
while($posts = $query->fetch()){ 
$headline= $posts[1];
$text= $posts[2];
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
  <style>
h1{
  color:red;
}










  </style>
</head>
<body>
  <?php $query = $pdo->prepare("select * from posts ");
$query->execute();
while($posts = $query->fetch()){ 
echo '<a href="index.php?id='.$posts[0].'">'.$posts[1].'</a><br>';
}   ?>

  <h1><?php echo  $headline; ?> </h1>
  <p><?php echo $text; ?> </p>

</body>
</html>