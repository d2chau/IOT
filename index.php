<html>
<head>
    <title>Fridgem8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/app/www/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href= "bootstrap/app/www/css/main.css" rel="stylesheet" media="screen">
         <meta charset="utf-8">
         <title>FridgeM8</title>
         <link rel="stylesheet" href="http://flip.hr/css/bootstrap.min.css">
  </head>
<body background="bootstrap/app/www/img/ourBackground.jpg">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src='bootstrap/app/www/js/bootstrap.min.js'></script>

     <div class="willscontainer">
         
         <div class="hero-unit">
         <h1>Fridgem8</h1>
         <p>Welcome to Fridgem8! A list that shops the way YOU want. Click below to get started. </p>
         <p><a class="btn btn-primary btn-large">Get Started! &raquo;</a></p>
         </div><!-- .hero-unit -->
  <div class="row-fluid">
         <div class="innerDiv">
         <h2>Box Number 1</h2>
         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
         <p><a class="btn" href="#">Click meeee &raquo;</a></p>
         </div><!-- .span4 -->
   
         <div class="innerDiv">
                 <h2>Box Number 2</h2>
         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
         <p><a class="btn" href="#">Click meeee &raquo;</a></p>
         </div><!-- .span4 -->
   
         <div class="innerDiv">
                 <h2>Database Query Test</h2>
         <p>This should be the DB query that we're playing with for now: <?php
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
?></p>
         <p><a class="btn" href="#">Click meeee &raquo;</a></p>
         </div><!-- .span4 -->
 
 </div><!-- .row -->
 </div><!-- .container -->
</body>
</html>
