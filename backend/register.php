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
	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
	$sql= "INSERT INTO users (name, email, phone, gender, birthdate, username, password) VALUES ('$name','$email','$number','$gender','$dob','$username','$password');";
    echo "<script>console.log(\"$sql\");</script>";
	if (mysqli_query($conn, $sql)) {
	    echo "
    <h3>Successfully registered!</h3>
    <div>
        Continue to login? <a href='/reglog.html'>Login.</a>
    </div>
    ";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	?>
