	<?php
		$name=$_POST["Name"];
		$email=$_POST["Email"];
		$number=$_POST["Ph_Number"];
		$gender=$_POST["gender"];
        if ($gender == "male"){
            $gender="M";
        }else if ($gender == "female"){
            $gender="F";
        }else {
            $gender="O";
        }
		$dob=date("Y-m-d",strtotime($_POST["dob"]));
		$username=$_POST["username"];
		$password=$_POST["password"];
        $dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "2547";
	$db = "bookmymovie";
	$conn = mysqli_connect("localhost","root") or die("Connect failed: %s\n". $conn -> error);
	mysqli_select_db($conn, 'bookmymovie');
	$sql= "INSERT INTO users (name, email, phone, gender, birthdate, username, password) VALUES ('$name','$email','$number','$gender','$dob','$username','$password');";
    echo "<script>console.log(\"$sql\");</script>";
	if (mysqli_query($conn, $sql)) {
	    header("location:/html-experiment-project/reglog.php");
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	?>
