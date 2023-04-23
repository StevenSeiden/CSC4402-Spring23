<?php

$mysqli  = new mysqli("bitesabroad.mysql.database.azure.com","bitesabroad","Databased1","bitesabroad");
 // Check connection
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 

$sql = " SELECT * FROM meals ";
$result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>Please work</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Title</th>
                <th>Description</th>
            
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['title'];?></td>
                <td><?php echo $rows['description'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>