<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Contant-Type,Access-Control-Allow-Origin,Access-Control-Allow-Methods,Authorization,X-Requested-With');
$data = json_decode(file_get_contents("php://input"),true);

$Name = $data['sname'];
$Age = $data['age'];
$City = $data['city'];

include 'dbconfig.php';

$sql = "Insert INTO student(Student_name,Age,City) Values ('{$Name}',{$Age},'{$City}')";
$result = mysqli_query($conn,$sql);

if(!$result)
{
    echo json_encode(array('message'=>'The record not inserted','status'=>false));
}
else
{
    echo json_encode(array('message'=>'The record inserted successfully','status'=>true));
}
?>