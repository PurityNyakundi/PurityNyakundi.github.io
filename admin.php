<?php 
$host = "localhost";
$user = "root";
$pass ="";
$db = "staff2";
$conn = mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
	die("could connect to database").mysqli_error();
}
echo "able to be connected may proceed";
if(isset($_POST['submit']))
{
	
$sn=$_POST['fullname'];
$tel=$_POST['email'];
$comp=$_POST['message'];

//insert data
$insertquery="INSERT INTO issues (fullname,email,message)VALUES('$sn','$email','$comp')";
$results=mysqli_query($conn,$insertquery)or die(mysqli_error($conn));
if($results)
{
	echo"
	<script>
	alert('Data inserted successfully');
	</script>
	";
}
else
{
	echo"
	<script>
	alert('Failed to insert Data, try again');
	</script>
	";
}
}
mysqli_close($conn);
 ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<a href="#">received messages</a>
<a href="#"></a>
</body>
</html>