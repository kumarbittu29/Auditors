<?php
ob_start();
session_start();
include("connect.php");
$delete = "DELETE FROM projector_room WHERE sno=".$_GET['sno'];
$delete_query = mysqli_query($connect,$delete);

$select = "SELECT * FROM projector_room WHERE filename='".$_SESSION['filename']."' AND sno>".$_GET['sno'];
$select_query = mysqli_query($connect,$select);
while($select_fetch = mysqli_fetch_assoc($select_query)){
    $select_fetch['sno'] = $select_fetch['sno']-1;
    $cache = $select_fetch['sno']+1;
    $alter = "UPDATE projector_room SET sno=".$select_fetch['sno']." WHERE sno=".$cache;
    $alter_query = mysqli_query($connect,$alter);
    
}
if($delete_query){
    header("location:user_form_1.php");
}
else{
    echo "not deleted";
}
ob_end_flush();
?>