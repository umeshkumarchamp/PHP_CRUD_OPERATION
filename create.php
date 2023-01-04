<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
    <style>

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

    <form action="create.php" method="post" name="form1">
        <h2>Add a new Record :</h2>
        <br>
        <table width="25%" border="0">
            <tbody>
                <tr> 
                <td>Name </td>
                <td><input type="text" name="name" required></td>
                </tr>
                <tr> 
                <td>Age </td>
                <td><input type="text" name="age" required></td>
                </tr>
                <tr> 
                <td>Email </td>
                <td><input type="text" name="email" required></td>
                </tr>
                <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </tbody>
        </table>

        <?php
        include_once("config.php");
        if(isset($_POST['Submit'])) {	
        $name = $_POST['name'];
        $age = $_POST['age'];
        $email =$_POST['email'];

        $result = mysqli_query($conn, "INSERT INTO users(name,age,email) VALUES
        ('$name','$age','$email')");
        echo "Data added successfully.";
        echo "<br><a href='read.php'>View Result";
        }
    ?>
    </form>

    

</body>
</html>