<?php
/**
* Simple PHP CRUD Script
**/

// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <title>Edit Page</title>
    <link rel="stylesheet" href="style.css"> 
    <style>
        table{
            color: #ffb703;
            background-color: #023047;
            margin-top: 20px;
            position: absolute; 
            top: 30%; 
            left: 50%; 
            transform: translate(-50%, -50%);
            font-size: 20px;
            
        }
        th{
            padding: 10px;
        }
        td{
            background-color: #ffb703;
            color: #023047;
            text-align:  center;
            padding: 10px;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="fav">Codiz World</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="create.php">Create</a></li>
            <li><a href="edit.php">Update</a></li>
            <li><a href="read.php">Display</a></li>
            <li><a href="delete.php">Delete</a></li>
        </ul>
    </div>

    <table width='70%' border=0>

    <tr>
        <th>Name</th> <th>Age</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['age']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='update.php?id=$user_data[id]'>Edit</a></td></tr>";        
    }
    ?>
    </table>
    
</body>
</html>
