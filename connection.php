 <?php
 define('DB_USER','root');
  define('DB_PASSWORD','');
   define('DB_HOST','localhost');
    define('DB_NAME','medical');
	
	$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MYSQL:'.mysqli_connect_error());
	


?> 