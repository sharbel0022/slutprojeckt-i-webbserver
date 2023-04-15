<?php
$link = array();
$query = $pdo->prepare("select * from posts order by ID desc");
	$query->execute();
	while($posts = $query->fetch()){ 
	array_push($link ,'<a href="admin.php?id='.$posts[0].'">'.$posts[1].'</a>');
	}
	foreach ($link as $value) {
    echo $value.'<br>';
    }
?>
	
	
	
	
	
	
	
	
	