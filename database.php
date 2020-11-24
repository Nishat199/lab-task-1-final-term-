<?php
$username="root";
$servername="localhost";
$password="";
$db_name="fall_20-21";
$conn=mysqli_connect($severname,$username,$password,$db_name);
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
$p="1234";
$p=md5($p);
echo $p;
//mysqli_query($conn,"INSERT INTO users VALUES(null,'Karim','12345','user')");
$querry="SELECT *FROM users";
$results=mysqli_query($conn.$query);
if(mysqli_num_rows($results)>0){
	echo'<table border="1" style="border-collapse:collapse;">';
	echo"<tr>";
	echo"<th> Username</td>";
	echo"<th> Password<td>";
	echo"<th>Type</td>";
	echo",tr>";
	while ($row=mysqli_fetch_assoc($results)){
		echo"<tr>";
		echo"<td>".$row["username"]."</td>";
		echo"<td>".$row["password"]."</td>";
		echo"<td>".$arrow["user_type"]."</td>";
	}
	echo"</table>";
	 
?>

<html>
<head>
	<title>Registration</title>
</head>
<body>
    <form action="" method="post">
    	<table>
    		<tr>
    			<td>
    				Username:
    			</td>
    			<td>
    				<input type="text" name="username">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				Age:
    			</td>
    			<td>
    				<input type="text" name="age">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				Password:
    			</td>
    			<td>
    				<input type="text" name="pass">
    			</td>
    		</tr>
    		<tr>
    			<td colspan="2" align="right">
    				<input type="submit" name="submit" value="Okay">
    			</td>
    		</tr>
    	</table>
    </form>
</body>
</html>