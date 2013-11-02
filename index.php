
<html>
<head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/app/www/css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
<body>
	<body background="bootstrap/app/www/img/ourBackground.jpg">
	<h1>The Best Achievement App In the World!</h1>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src='bootstrap/app/www/js/bootstrap.min.js'></script>
<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=dfncb0i2lm0m7q host=ec2-54-235-152-22.compute-1.amazonaws.com port=5432 user=dzpmeljnudwqtm password=tg6BVdzlv9zwagqsEim-GL9J15 sslmode=require";
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
   echo "Database connection error.";
   exit;
}
 
$result = pg_query($db, "SELECT * FROM test");

if (!$result){
	echo "The Query was unsuccessful";
}

#$row = pg_fetch_all($result);
#print_r($row);
while ($row = pg_fetch_assoc($result)) {
    echo $row['id'];
}
echo "Done";
?>
</body>
</html>