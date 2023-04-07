<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');

include 'dbconfig.php';
//for post method
$data = json_decode(file_get_contents("php://input"),true);
$sname = $data['sname'];
//close post method

//for get method
//$sname = isset($_GET['sname']) ? $_GET['sname'] : die();
//Type in url like search.php?sname=adi

$sql = "SELECT * from student WHERE Student_name LIKE '%{$sname}%'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);
}
else
{
    echo json_encode(array('message'=>'No search Found','status'=>false));
}

?>