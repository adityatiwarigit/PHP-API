<?php  

header('Content-Type:application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:DELETE');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Access-Control-Allow-Methods,Access-Control-Allow-Origin,Content-Type');

$data = json_decode(file_get_contents("php://input"),true);
$sid=$data['sid'];

include 'dbconfig.php';

$sql = "DELETE FROM student WHERE id = '{$sid}'";
$result =mysqli_query($conn,$sql);

if(!$result)
{
    echo json_encode(array('message'=>'Record does not Deleted.','status'=>false));
}
else
{
    echo json_encode(array('message'=>'Record Deleted Successfully','status'=>true));
}

?>