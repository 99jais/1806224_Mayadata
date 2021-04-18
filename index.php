
<?php
include ("connection.php");

$sql="SELECT * FROM meeting_details";

$result=mysqli_query($connection,$sql); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="home.css">
    <script src="side_bar.js"></script>

    
    <title>Home</title>
</head>
<body>

    <div id="mySidebar" class="sidebar" >
        <a href="#"><span onclick="testOut()"><i class="material-icons">drag_handle</i><span class="icon-text">1806224</span></a><br>
        <a href="#"><span><i class="material-icons">home</i><span class="icon-text">Home</span></a><br>
        <a href="aboutme.html"><i class="material-icons">face</i><span class="icon-text"></span>About Me</a></span>
        </a>
</div>
        
    <div id="mySidebar1" class="sidebar-mini">
        <a href="#"><span onclick="testIn()"><i class="material-icons">drag_handle</i><span class="icon-text"></span></a><br>
        <a href="#"><span><i class="material-icons">home</i><span class="icon-text"></span></a><br>
        <a href="aboutme.html"><i class="material-icons">face</i><span class="icon-text"></span></a></span>
        </a>
    </div>

    <div class = "container" id="container">
        <div class="heading">My Meetings</div>
        <div class="top_div">
            <form action="" method="post">
                <div class="search">
                    <span class="material-icons" style=margin-right:0px;>search</span>
                    <input type="text" placeholder="Search" name="search">
                    <input type="submit" value="search" name="submit">
                </div>
                    <label for="from_date">From:</label>
                    <input id="from_date" type="date" value="from_date" name="from_date" style=margin:0px;padding-right:0px;>
                    <span class="material-icons" style=margin:0px;padding-right:50px;>calendar_today</span>
                    <label for="to_date">To:</label>
                    <input id="to_date" type="date" value="to_date" name="to_date"style=margin:0px;padding-right:0px;>
                    <span class="material-icons">calendar_today</span>
            </form>
        </div>

    <div class="lower_div">
        <table>
        <thead>
            <tr style="color: #1E5F74;">
                <th>
                    Sl. no.
                </th>
                <th>
                    Meeting name
                </th>
                <th>
                    No of People attending
                </th>
                <th>
                    Date
                </th>
                <th>
                    Start time
                </th>
                <th>
                    End time
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
            if (isset($_POST['submit'])) {
                $searchValue = $_POST['search'];
                $fromDate = $_POST['from_date'];
                $toDate = $_POST['to_date'];
                    if($searchValue == null && $fromDate != null && $toDate !=null){
                        $sql = "SELECT * FROM  meeting_details WHERE date between '$fromDate' and '$toDate'";
                    }
                    else{
                        $sql = "SELECT * FROM  meeting_details WHERE meeting_name LIKE '%$searchValue%' or 
                        date between '$fromDate' and '$toDate'";
                    }
                    $result = $connection->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                            echo "<td>" . $row['si_no'] . "</td>";
                            echo "<td>" . $row['meeting_name'] . "</td>";
                            echo "<td>" . $row['no_of_people_attending'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>" . $row['start_time'] . "</td>";
                            echo "<td>" . $row['end_time'] . "</td>";
                            echo '<td> <span class="material-icons" style="color:red" onclick="delete.php?id=$row[si_no]">
                            delete</span></td>'; 
                        echo "</tr>";
                    }
                }  
                else{
                    $sql = "SELECT * FROM  meeting_details";
                    $result = $connection->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                            echo "<td>" . $row['si_no'] . "</td>";
                            echo "<td>" . $row['meeting_name'] . "</td>";
                            echo "<td>" . $row['no_of_people_attending'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>" . $row['start_time'] . "</td>";
                            echo "<td>" . $row['end_time'] . "</td>";
                            echo "<td> <span class='material-icons' style=cursor:pointer;color:red;
                            onclick=\"location.href='delete.php?id=$row[si_no]'\">
                            delete</span></td>"; 
                        echo "</tr>";
                    }
                }
        ?>
        <form action="add.php" method=post>
        <tr>
            <td></td>
            <td class="name">
                    <input type="text"  name="name" >
            </td>
            
            <td class="no">
                    <input type="text"  name="number">
            </td>
            
            <td class="date">
                <input type="date"  name="date"style=margin:0px;padding-right:0px;>
                <span class="material-icons" style=margin:0px;padding-right:10px;>calendar_today</span>
            </td>

            <td class="time">
                <input type="time"   name="start_date" style=margin:0px;padding-right:0px;>
                <span class="material-icons"style=margin:0px;padding-right:10px;>schedule</span>
            </td>
            
            <td class="time">
                <input type="time"   name="end_date"style=margin:0px;padding-right:0px;>
                <span class="material-icons"style=margin:0px;padding-right:10px;>schedule</span>
            <td>
            <button type="submit" name="submit" class="add">Add</button> 
         </tr>
        </form>
        </tbody>
    </table>  
    </div>

    
</body>
</html>