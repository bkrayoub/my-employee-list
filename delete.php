<?php
include 'connection.php';
if(isset($_GET['EID'])){
    $EID=$_GET['EID'];


    $sql="DELETE FROM `employee` WHERE EID='$EID'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo  "deleted succssesfull";
    }
}



?>