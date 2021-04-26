<?php
include("connection.php");
if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $number = $_POST['number'];
                $date = $_POST['date'];
                $fromDate = $_POST['start_date'];
                $toDate = $_POST['end_date'];
                $sql = "INSERT INTO  meeting_details(meeting_name,no_of_people_attending,date,start_time,end_time)
                values( '$name','$number','$date','$fromDate','$toDate')";
                $result = $connection->query($sql);
                header('Location: index.php');
}   
?>
