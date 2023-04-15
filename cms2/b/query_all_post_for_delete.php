<form action="admin.php" method="POST">

<?php
$to_be_deleted = array();
$query = $pdo->prepare("select * from posts");
	$query->execute();
	while($posts = $query->fetch()){ 
	echo '<input type="checkbox" id="'.$posts[0].'" name="'.$posts[0].'" >'.$posts[1].'<br>';
	}
	$delete_id = array();
	if(isset($_POST['delete'])){
$query = $pdo->prepare("select * from posts");
	$query->execute();
	while($posts = $query->fetch()){ 
	$var = $posts[0];
		if(isset($_POST[$var])){
			//deletePost($var);
			echo'delete id'.$var.'<br>';
			array_push($delete_id,$var);
		}
			
		}
		foreach ($delete_id as $value) {
        echo  'value:'.$value;
		 try{
    $query = $pdo->prepare("delete from posts where id = :id");
	$query->execute(array(
    ':id' => $value
    ));
	
    $update_message =  "Data successfully deleted in the database table ... ";
	
    }catch(PDOException $e){
    $update_message =  "Failed to delete the MySQL database table ... :".$e->getMessage();
    } 
        }
	}
	
	




?>
<input type="submit" name="delete" value="Radera">
</form>
