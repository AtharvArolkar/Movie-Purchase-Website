<?php
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "2547";
   $dbname = "bookmymovie";
   $conn = mysqli_connect("localhost","root","2547") or die("Connect failed: %s\n". $conn -> error);
	if ($conn) {
		echo "Connection is Establish!";
	}
	else {
		echo "ERROR Connection Failed!";
	}
    mysqli_select_db($conn, $dbname);
   $name1 = $_GET['q'];
   $query = "SELECT name FROM moviename WHERE name LIKE '%$name1%'";
   $result=mysqli_query($conn,$query);

   foreach ($result as $row) {
      $name2=$row["name"];
        echo "<option value=".$name2 .">".$name2 ."<option/>";
   }
?>