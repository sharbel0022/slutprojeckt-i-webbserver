<?php
 $id = $_POST['id'];
 try{
    $query = $pdo->prepare("update posts set headline = :headline, text = :text where id = :id");
    $data = array(
	':id' => $id,
    ':headline' => $_POST['headline'],
	':text' => $_POST['text']
    );
    $query->execute($data);
    $update_message = "Data successfully updated into the database table ...";
    }catch(PDOException $e){
    $update_message =  "Error! failed to update into the database table ... :".$e->getMessage();
    }
?>