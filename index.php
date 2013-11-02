
<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  // we will fill this out next
}
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
  }


?> 

