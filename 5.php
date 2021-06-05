<?php 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName="domowa";




$mysqli = new mysqli("$dbServername","$dbUsername","$dbPassword","$dbName");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql=	"SELECT * FROM koty;";

if ($result = $mysqli -> query($sql)) {
  while ($row = $result -> fetch_row()) {
    printf ("%s (%s)\n", $row[0], $row[1]);
  }
  $result -> free_result();
}
echo"<br>";


if ($result = $mysqli -> query($sql)) {
	$row = $result -> fetch_array(MYSQLI_ASSOC);
	
    printf ("%s (%s)\n", $row["imie"], $row["umaszczenie"]);
  
  $result -> free_result();
}
echo"<br>";



if ($result = $mysqli -> query($sql)) {
  $rowcount=mysqli_num_rows($result);
   printf("Result set has %d rows.\n",$rowcount);
	
  
  
  $result -> free_result();
}





	
#mysqli_fetch_row mysqli_fetch_array mysqli_num_rows
$mysqli -> close();
?>






