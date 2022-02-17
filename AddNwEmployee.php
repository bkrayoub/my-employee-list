<?php

include 'connection.php';
if(isset($_POST["submit"])){
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
    

    $sql = "INSERT INTO `employee` (`EID`, `FirstName`, `LastName`, `DateofBirth`, `Department`, `Salary`, `Function`, `Picture`) 
    VALUES ('$number','$last','$first','$birth','$department','$salary','$occupation','$picture')";
    $result = mysqli_query($conn,$sql);
    move_uploaded_file($tmp_picture, $fileLocation);
        $conn->close();
    
   
    // if($result){
    //     echo "successful !!!!";
    // }else{
    //     die(mysqli_error($conn));
    // }
    
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MyCompany | Employee List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: #212529;
        }
        section {
            display: flex;
        }
        nav {
            display: flex;
            justify-content: center;
            height: 60px;
        }
        aside {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 80px;
            height: 100vh;

        }
        aside img {
            margin-top: 50px;
            padding: 10px;
            width: 55px;
            height: 55px;
            border-radius: 5px;
        }
        aside a {
            transition: .5;
        }
        aside img:hover {
            background-color: #000;
        }
        main {
            width: 100%;
            background-color: rgb(228, 228, 228);
            border-radius: 5px 0px 0px 0px;
        }
        nav h1 {
            color: white; ;
            font-family: cursive;
        }
        #nav-logo {
            display: flex;
        }
        #selected-box {
            background-color: #fff;
        }
        ::-webkit-file-upload-button {
            background-color: #000;
        }
        form input {
            background-color : #fff;
            border-radius: 0px solid #fff;
        }
        form {
            width: 1400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
    </style>
</head>
<body>
    <nav class="bg-dark">
            <div id="nav-logo"><img src="logo.png" alt="My Employee List Logo"><h1>My Employee List</h1></div>
    </nav>
    <section>
        <aside class="bg-dark">
            <a href="index.php"><img src="icon\home_icon.png" alt="Go home"></a>
            <a href="AddNwEmployee.php"><img src="icon\plus_icon.png" alt="Add employee" id="selected-box"></a>
            <a href="EmployeeList.php"><img src="icon\list_icon.png" alt="Employees list"></a>
            <a href="search.php"><img src="icon\search_icon.png" alt="Search for employee"></a>
        </aside>
        <main>
            <div class="container">
                <form action="" method="post" enctype="multipart/form-data">
                    <label><p>Employee ID</p><input type="text" name="input-eid"></label>
                    <div>
                        <label><p>Employee First Name</p><input type="text" name="input-fname"></label>
                        <label><p>Employee Last Name</p><input type="text" name="input-lname"></label>
                        <label><p>Date Of Birth</p><input type="date" name="input-dateOfBerth"></label>
                    </div>
                    <label><p>Salary</p><input type="number" name="input-salary"></label>
                    <div>
                        <label><p>Department</p><input type="text" name="input-department"></label>
                        <label><p>Function</p><input type="text" name="input-occupation"></label>
                    </div>
                    <label><p>Picture</p><input type="file" name="input-Picture"></label>
                    <input type="submit" value="SUBMIT" name="submit">
                </form>
            </div>
        </main> 
    </section>
<!--################################################################################################################ -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>