<?Php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = 'Chosen@123';
$DATABASE = 'signup forms';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($con){
    echo "Connection successful";
}else{
    die(mysqli_error($con));

}
?>