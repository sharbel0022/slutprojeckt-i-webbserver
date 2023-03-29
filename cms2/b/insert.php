<?php
$headline = $_POST['headline'];
$text = $_POST['text'];
try{
    $query = $pdo->prepare("insert into posts (headline,text)
    values (:headline,:text)");
    $data = array(
    ':headline' => $headline,
    ':text' => $text
    );
    $query->execute($data);
    $update_message =  "Data successfully inserted into the database table ...";
    }catch(PDOException $e){
    $update_message =  "Error! failed to insert into the database table :".$e->getMessage();
} 
?>