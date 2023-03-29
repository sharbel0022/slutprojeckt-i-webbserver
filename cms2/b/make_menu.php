<?php
echo "<ul>";
$link = array();
$query = $pdo->prepare("select * from menu2 order by ID");
	$query->execute();
	while($menu2 = $query->fetch()){ 
	array_push($link ,'<li><a href="index.php?id='.$menu2[2].'">'.$menu2[1].'</a></li>');
	}
	foreach ($link as $value) {
    echo $value;
    }
	echo "</ul>";
?>
