<?php 
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');

include "dbconfig.php";

$sql= "select * from student";
$result = mysqli_query($conn,$sql) or die("sql query failed");

if(mysqli_num_rows($result)>0)
{
    $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);
}
else
{
    json_encode(array('message'=>'No Records Found.', 'status'=> false));
}
?>