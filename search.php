<?php 
 

include "connection.php";

 if(isset($_POST['search'] )){
     $searchkey = $_POST["serach"] ;
    $sql = "SELECT * FROM employee WHERE FirstName LIKE '%$searchkey%'" ;
 }
  elseif(isset($_POST['select'] )){
    $selectkey = $_POST["serach"] ; 
    $sql = "SELECT * FROM employee WHERE FirstName LIKE '%$selectkey%'" ;

 }
 else{
     $sql ="SELECT * FROM employee";
     $result =mysqli_query($conn,$sql);
 }
?> 
<form action="search.php" style="padding-left: 100px; padding-right:70px; margin-top:20px; " method="post" >
<select style="height:40px !important; border-radius:7px;" name="select">
        <option value="matricule">id</option>
        <option value="nom">FirstName</option>
        <option value="departemnt">LastName</option>
      </select>
    <input type="text" name="serach"class='form-control' placeholder="searche by name" value=""> <button class="btn">search</button>
    <table border="1" class="table table-hover table-responsive">
<thead>
    <tr>
        <th>ID</th>
        <th>Pecture</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date Of Birth</th>
        <th>Departement</th>
        <th>Salary</th>
        <th>Function</th>
        <th>Delete</th>
        <th> Edit </th>
    </tr>
<thead>
    <tr>
        <th>ID</th>
        <th>Pecture</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date Of Birth</th>
        <th>Departement</th>
        <th>Salary</th>
        <th>Function</th>
        <th>Delete</th>
        <th> Edit </th>
    </tr>
</thead>
<tr>
    <?php
 $result =mysqli_query($conn,$sql);
    while($row = mysqli_fetch_object( $result)){
        ?>
        <tr>
        <td> <i class='fa fa-user 2x btn'   style="font-size:20px ; color:#2b219a ;" ></i><?php echo $row->Id?></td>
        <td> <img src="img/<?php echo $row->image;?>"height="50" ></td>
        <td><?php echo $row->FirstName ?></td>
        <td><?php echo $row->LastName ?></td>
        <td><?php echo $row->DateofBirth ?></td>
        <td><?php echo $row->Departement ?></td>
        <td><?php echo $row->Salary?>$</td>
        <td><?php echo $row->Function ?></td>
        <td>
        <form action="select.php" method="post">
            <input type="hidden" name="name" value="">
            <a href="select.php?id=<?php echo $row->Id; ?>" onClick="return confirm('Are you sure you want to delete?')"> <i class='bx bx-trash icon 2x btn'   style="font-size:25px ; color:#695cfe ; background-color:#c8d6fd8e" ></i></a>
                <?php
                ?>
            </form>
        </td>
        <td>
            <a href="t.php? id=<?php echo $row->Id; ?>"> <i class='bx bx-edit icon 2x btn' style="font-size:25px ; color:#2b219a;background-color:#c8d6fd8e"></i></a>
        </td>
       <?php
    }
    ?>
    </form>
<?php 
  include "bootstrap2.html"; 



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
    </style>
</head>
<body>
    <nav class="bg-dark">
            <div id="nav-logo"><img src="logo.png" alt="My Employee List Logo"><h1>Search</h1></div>
    </nav>
    <section>
        <aside class="bg-dark">
            <a href="index.php"><img src="icon\home_icon.png" alt="Go home"></a>
            <a href="AddNwEmployee.php"><img src="icon\plus_icon.png" alt="Add employee"></a>
            <a href="EmployeeList.php"><img src="icon\list_icon.png" alt="Employees list"></a>
            <a href="search.php"><img src="icon\search_icon.png" alt="Search for employee" id="selected-box"></a>
        </aside>
        <main>
            <div class="container">
                <div>
                    <input type="search" name="search" id="">
                    <table>
                        <thead>
                            <tr>
                                <th>EID</th>
                                <th>picture</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Date of berth</th>
                                <th>Department</th>
                                <th>Salary</th>
                                <th>Function</th>
                                <th id="action">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </main> 
    </section>
<!--################################################################################################################3 -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>