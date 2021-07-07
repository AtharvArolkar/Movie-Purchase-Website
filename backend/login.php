<?php
		session_start();
		$username=$_POST["username"];
		$password=$_POST["password"];
        $dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "2547";
	$db = "bookmymovie";
	$conn = mysqli_connect("localhost","root",$dbpass) or die("Connect failed: %s\n". $conn -> error);
	if ($conn) {
		// echo "Connection is Establish!";
	}
	else {
		// echo "ERROR Connection Failed!";
	}
	mysqli_select_db($conn, 'bookmymovie');
	$sql= "SELECT name,username FROM users WHERE username ='$username' and password='$password'";
    // if(mysqli_query($conn, $sql)==mysqli_query($conn, $sql1)){
    //     echo "Hello";
    // }else{
    //     echo "hi";
    // }

    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    // $active = $row['active'];
    $count = mysqli_num_rows($result);
// if($count==1){

// }
    echo "<script>console.log(\"$sql\");</script>";
	if ($count==1) {
		$_SESSION['username']=$row['name'];
		$_SESSION['user']=$row['username'];
		setcookie('username', $row['username'], time() + (864000 * 30), "/");
		setcookie('name', $row['name'], time() + (864000 * 30), "/");
		header("location:/../index.php");
	} else {
        echo "<h3>No Account Found or Wrong Username/Password</h3>";
    }
	?>
