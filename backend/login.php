<?php
		
		$username=$_POST["username"];
		$password=$_POST["password"];
        $dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "2547";
	$db = "bookmymovie";
	$conn = mysqli_connect("localhost","root") or die("Connect failed: %s\n". $conn -> error);
	if ($conn) {
		// echo "Connection is Establish!";
	}
	else {
		// echo "ERROR Connection Failed!";
	}
	mysqli_select_db($conn, 'bookmymovie');
	$sql= "SELECT name FROM users WHERE username ='$username' and password='$password'";
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
	    echo "
            <h3>Successfully logged in!</h3>
            <div>
            Continue to HomePage? <a href='/html-experiment-project/index.html'>Home</a>
            </div>";
	} else {
        echo "<h3>No Account Found or Wrong Username/Password</h3>";
    }
	?>
