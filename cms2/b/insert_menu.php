 <?php
$description = $_POST['description'];
$link_ID = $_POST['link_ID'];
try{
    $query = $pdo->prepare("insert into menu2(description,link_ID)
    values (:description,:link_ID)");
    $data = array(
    ':description' => $description,
    ':link_ID' => $link_ID
    );
    $query->execute($data);
    $update_message =  "Data successfully inserted into the database table ...";
    }catch(PDOException $e){
    $update_message =  "Error! failed to insert into the database table :".$e->getMessage();
} 
?>