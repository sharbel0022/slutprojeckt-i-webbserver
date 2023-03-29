<form action="index.php" method="POST">
<div><input type="text" name="description">
<input type="submit" name="add_new_menuitem"></div>
<?php
//require "connect.php";
$query = $pdo->prepare("select * from menu");
	$query->execute();
	while($menu = $query->fetch()){
    
	}
	
echo '<label for="menuitem">Choose a post to link to:</label>
	  <select id="link_ID" name="link_ID">';
    $query = $pdo->prepare("select * from posts");
	$query->execute();
	while($posts = $query->fetch()){ 
	echo '<option value="'.$posts[0].'">'.$posts[1].'</option>';
	}
echo '</select>';
?>
</form>
