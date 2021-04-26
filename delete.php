<?php
include("connection.php");
    $id = $_GET['id'];
   $sql= "DELETE FROM meeting_details WHERE si_no=$id";
   $result = $connection->query($sql);
   header('Location: index.php');
?>
