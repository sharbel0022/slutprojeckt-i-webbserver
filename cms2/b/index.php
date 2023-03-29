<?php
require "connect.php";
if(isset($_POST['insert']))
{
require "insert.php";
}
if(isset($_POST['update']))
{
require "update.php";
}
if(isset($_POST['add_new_menuitem']))
{
require "insert_menu.php";
}
require "query.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>DEMO CMS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/style.css?">
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button:hover {
  background-color: #4CAF50;
  color: white;
}
/* width */
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: red; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li{
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size:24px;
}

li a:hover {
  background-color: #111;
}
.black_back{
background-color:black
}
.white_text{
color:white;
}
.links a:hover {
  background-color: #111;
}
.links a {
  color: lime;
}
.fixed_height{
height:300px;
overflow-y: auto;
}
</style>
</head>
<body>

<div class="row">
<div class="column0" >
<?php require "make_menu.php"; ?>
</div>
<div class="column0" >
<h3 class="update_message white_text">ACTION:
<?php  echo $update_message; ?>
</h3>
</div>
</div>
<hr>

<div class="row white_text">
<div class="column3">
<h2><?php echo $headline; ?></h2>
</div>
<div class="column3 fixed_height">
<h2><?php echo $text; ?></h2>
</div>
<div class="column3 links fixed_height">
<?php require "query_all_links.php"; ?>
</div>
</div>






<div class="row white_text">
<div class="column3 fixed_height">
<?php require "query_all_post_for_delete.php"; ?>
</div>
<div class="column3">
<form action="index.php" method="POST">
<input type="text" name="headline" value="">
<textarea name="text"></textarea>
<input class="button" type="submit" name="insert" value="Lägg till">
</form>
</div>
<div class="column3">
<form action="index.php" method="POST">
<input type="text" name="headline" value="<?php echo $headline; ?>">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<textarea name="text"><?php echo $text; ?></textarea>
<input class="button" type="submit" name="update" value="Uppdatera">
</form>
<?php 

require "query_all_menupost_for_selction.php";
?>
</div>
</div>






</body>
</html>