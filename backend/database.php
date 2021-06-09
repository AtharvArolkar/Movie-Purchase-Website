<?php
$username=$_POST["username"];
$password=$_POST["password"];
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "2547";
$db = "bookmymovie";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
Insertintotable(1,'The Martian',56,100,'2021-02-12',5);
Insertintotable(2,'X-Men',66,100,'2021-02-22',5)
Insertintotable(3,'Transformers',89,100,'2021-02-10',5)
Insertintotable(4,'Godzila Vs KingKong',34,100,'2021-02-25',5)
Insertintotable(5,'Monster Hunter',77,100,'2021-02-26',5)

public function Insertintotable($id,$name,$booked,$available,$date,$rating)
{
    $sql= "INSERT INTO moviename (movieid,moviename, seatsbooked, totalseat, movdate, ratings) VALUES ('$id','$name','$booked','$available','$date',"$rating);";

    if (mysqli_query($conn, $sql)) {
    echo "
    <h3>Successfully registered!</h3>
    ";  
    } 
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>