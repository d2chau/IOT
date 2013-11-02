
<html>
<body>
<?php
echo "Hello world";
phpinfo()
$con=mysqli_connect("mysql8.000webhost.com","a7342679_frm8","Apple12","a7342679_frm8");
# Establish db connection
echo "Trying to connect to the database and stuff. shit. "
if (mysql_connect_errno($con){
   echo "Database connection error."
   exit;
}
 
$result = pg_query($con, "SELECT * FROM test");

while($row = mysqli_fetch_array($result))
  {
  echo $row['id'] . " " . $row['foo'];
  echo "<br>";
  echo "in the while loop";
  }


?> 
</body>
</html>