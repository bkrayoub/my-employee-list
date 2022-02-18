
<?php

include 'connection.php';

if(isset($_POST['submit'])){
    $EID=$_GET['update'];

    $number = $_POST["input-eid"];
    $last = $_POST["input-lname"];
    $first = $_POST["input-fname"];
    $birth = $_POST["input-dateOfBerth"];
    $department = $_POST["input-department"];
    $salary = $_POST["input-salary"];
    $occupation = $_POST["input-occupation"];
    $picture = $_FILES["input-Picture"]["name"];
    $tmp_picture = $_FILES["input-Picture"]["tmp_name"];
    $fileLocation = "image/" .$picture;
    $sql="select * from `employee` WHERE EID='$EID'";
    $result = mysqli_query($conn,$sql);

    $exchange = "UPDATE `employee` SET `EID`='$number',`FirstName`='$first',`LastName`='$last',`DateofBirth`='$birth',`Department`='$department',`Salary`='$salary',`Function`='$occupation',`Picture`='$picture' WHERE EID='$EID'"; 
    $result = mysqli_query($conn,$exchange);

    move_uploaded_file($tmp_picture, $fileLocation);

}


            $sql = "select * from `employee`";
            $result = mysqli_query($conn, $sql);
if ($result){
                    // output data of each row
                while($row =mysqli_fetch_assoc($result)) {
                    $Picture=$row['Picture'];
                    $EID=$row['EID'];
                    $FirstName=$row['FirstName'];
                    $LastName=$row['LastName'];
                    $DateofBirth=$row['DateofBirth'];
                    $Department=$row['Department'];
                    $Salary=$row['Salary'];
                    $Function=$row['Function'];
                    
                    }
                    $conn->close();
                }
                else{
                    echo "0 results";
                }



?>  


<form action="" method="post" enctype="multipart/form-data">
    <label><p>Employee ID</p><input type="text" name="input-eid" value="<?php echo $EID?>"></label>
    <div>
        <label><p>Employee First Name</p><input type="text" name="input-fname" value="<?php echo $FirstName;?>"></label>
        <label><p>Employee Last Name</p><input type="text" name="input-lname" value="<?php echo $LastName?>"></label>
        <label><p>Date Of Birth</p><input type="date" name="input-dateOfBerth" value="<?php echo $DateofBirth?>"></label>
    </div>
    <label><p>Salary</p><input type="number" name="input-salary" value="<?php echo $department?>"></label>
    <div>
        <label><p>Department</p><input type="text" name="input-department" value="<?php echo $Function?>"></label>
        <label><p>Function</p><input type="text" name="input-occupation" value="<?php echo $Salary?>"></label>
    </div>
    <label><p>Picture</p><input type="file" name="input-Picture" ></label>
    <input type="submit" value="SUBMIT" name="submit">
</form>
