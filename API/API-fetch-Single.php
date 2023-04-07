<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');

$data = json_decode(file_get_contents("php://input"),true);

$student_id = $data['sid'];

include "dbconfig.php";

$sql= "select * from student WHERE id = {$student_id}";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    $output = mysqli_fetch_all($result);
    echo json_encode($output);
}
else
{
    json_encode(array('message'=>'No records Found','status'=>'false'));
}
?>