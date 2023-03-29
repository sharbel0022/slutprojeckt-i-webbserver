<?php
error_reporting(1);
$id = $_GET['id'];
if(isset($id)){
	$query = $pdo->prepare("select * from posts where id = $id");
		$query->execute();
		while($posts = $query->fetch()){
		$id = $posts[0];
        $headline = $posts[1];			
		$text = $posts[2];
		}
}
?>