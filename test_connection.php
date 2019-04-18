 <?php

//Define your host here.
$hostname = "localhost";

//Define your database username here.
$username = "root";

//Define your database password here.
$password = "";

//Define your database name here.
$dbname = "medical";

 $conn = mysqli_connect("$hostname", "$username","", "$dbname");
 
 if (mysqli_connect_errno())
 
 {
 
 echo "connection failed".mysqli_connect_error();
 
 }
 $query = "SELECT CountryName FROM countries";
 $result=mysqli_query($conn,$query);
 
 $queryCity = "SELECT CountryCity FROM countries";
 $resultCity =mysqli_query($conn,$queryCity);

$searchq='';
 $Search=("SELECT * FROM Doctors where specialization LIKE '%$searchq%' OR DoctorName LIKE '%$searchq%'" );
 $querySearch=mysqli_query($conn,$Search );

 $checkq='';
 $Check=("SELECT * FROM Doctors where specialization = 'dentist'");
 $queryCheck=mysqli_query($conn,$Check);

?>