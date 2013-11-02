
<html>
<body>
<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=dfncb0i2lm0m7q ec2-54-235-152-22.compute-1.amazonaws.com port=5432 user=dzpmeljnudwqtm password=tg6BVdzlv9zwagqsEim-GL9J15 sslmode=require";
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
   echo "Database connection error.";
   exit;
}
 
$result = pg_query($db, "TABLE test;");
echo $result;
?>
</body>
</html>