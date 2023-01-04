<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$age=$_POST['age'];
	$email=$_POST['email'];
		
	// update user data
	$result = mysqli_query($conn, "UPDATE users SET name='$name', age='$age', email='$email' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$age = $user_data['age'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
    <link rel="stylesheet" href="style.css"> 
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
	
	<form name="update_user" method="post" action="update.php">
		<h2>Update Record : </h2>
		<br>
		<table border="0" width="25%">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Age </td>
				<td><input type="number" name="age" value=<?php echo $age;?>></td>
			</tr>
			<tr> 
				<td>Email </td>
				<td><input type="email" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

