<?php
include("db.php");

if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $Description = $_POST['description'];


    $query = "INSERT INTO task(title, description) values ('$title','$Description')";
    
    $result = mysqli_query($conn,$query);

    if(!$result) {
        die("query Failed");
    }  
    
    $_SESSION['message'] = 'Se guardo Satisfactoriamente';
    $_SESSION['message_type'] = 'success';


         header("Location: index.php");
}

?>