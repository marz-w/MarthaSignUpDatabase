
<?php 
//Code used to create a database in php my admin which is MarzDishes
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$id =       0;
$username = $_POST["username"];
$email  =   $_POST["email"];
$Password =  $_POST["password"];

try{
$conn= new PDO("mysql:host=$servername","marz", "12345");
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="CREATE DATABASE MarzDishes";
$conn->exec($sql);
}catch(PDOException $error){
    echo ("An error occured" .$error);
}
 
echo ("Connected succesfully");

$conn= null;
$sql = "INSERT INTO users 
        (id, username , email , password) VALUES(".
            $id.",".$username.",".$email.",".$password.")";

}
?>
