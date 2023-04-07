<?php

header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Access-Control-Allow-Methods,Access-Control-Allow-Origin,Contant-Type,Authorization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"),true);

$id = $data['sid'];
$name = $data['sname'];
$age = $data['sage'];
$city = $data['scity'];

include 'dbconfig.php';

$sql="UPDATE student SET Student_name = '{$name}' , Age = {$age} , City = '{$city}' WHERE id = {$id}";
$result = mysqli_query($conn,$sql);

if(!$result)
{
    echo json_encode(array('message'=>'The record does not Updated.','status'=>false));
}
else
{
    echo json_encode(array('message'=>'The record Updated Successfully','status'=>true));
}


?>