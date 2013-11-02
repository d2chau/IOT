<html>
<head>
<<<<<<< HEAD
    <title>Boootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/app/www/css/bootstrap.min.css" rel="stylesheet" media="screen">
=======
    <title>Fridgem8</title>
         <meta charset="utf-8">
         <title>FridgeM8</title>
         <link rel="stylesheet" href="http://flip.hr/css/bootstrap.min.css">
>>>>>>> 9d544494a89d76e41373183fe11e2713169ff6dd
  </head>
<body>
	<body background="bootstrap/app/www/img/ourBackground.jpg">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src='bootstrap/app/www/js/bootstrap.min.js'></script>

     <div class="container">
         
         <div class="hero-unit">
         <h1>The Best Achievement App In the World!</h1>
         <p>Hello guys i am a ".hero-unit" and you can use me if you wanna say something important.</p>
         <p><a class="btn btn-primary btn-large">Super important &raquo;</a></p>
         </div><!-- .hero-unit -->
        
 <div class="row">
         <div class="span4">
         <h2>Box Number 1</h2>
         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
         <p><a class="btn" href="#">Click meeee &raquo;</a></p>
         </div><!-- .span4 -->
   
         <div class="span4">
                 <h2>Box Number 2</h2>
         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
         <p><a class="btn" href="#">Click meeee &raquo;</a></p>
         </div><!-- .span4 -->
   
         <div class="Database">
         	<style>
				body { float:left;}
				.Database { background-color: #000000;
							color: #FFFFFF;
							opacity:0.4;
  				/*filter:alpha(opacity=60);  For IE8 and earlier */
  			}
  				.btn{
  					color: #000000;
  				}
			</style>
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
