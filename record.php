<?php
$server ="remotemysql.com";// remote database
$username="liDDmjgtOS";
$password="isczbfVqnk";


$conn=mysqli_connect($server,$username,$password);

if(!$conn)
{
    die("connection to this database failed due to ".mysqli_connect_error());

}
else{
    echo" connection was succesful";
}
$sql="SELECT * FROM `trip` ";
$result =mysqli_query($conn,$sql);
// to find number of records 
$num = mysqli_num_rows($result);
echo $num;
?>