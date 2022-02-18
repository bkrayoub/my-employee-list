
<?php
include 'connection.php'

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
        tbody td img {
            width: 100px;
        }
        table tbody th {
            background-color: #212529;
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
        #content {
            display: flex;
            justify-content: center;
        }
        table {
            margin-top: 50px;
            width: 90%;
            text-align: center;
            
        }
        table th{
            border-radius: 7px 7px 0px 0px;

        }
        th {
            background-color: #212529;

            color: #fff;
            width: 250px;
            height: 50px;
        }
        td {
            border: .3px #212529 solid;
        }
        #action {
            width: 350px;
        }
        
    </style>
</head>
<body>


    <nav class="bg-dark">
            <div id="nav-logo"><img src="logo.png" alt="My Employee List Logo"><h1>Employee List</h1></div>
    </nav>
    <section>
        <aside class="bg-dark">
            <a href="index.php"><img src="icon\home_icon.png" alt="Go home"></a>
            <a href="AddNwEmployee.php"><img src="icon\plus_icon.png" alt="Add employee"></a>
            <a href="EmployeeList.php"><img src="icon\list_icon.png" alt="Employees list" id="selected-box"></a>
            <a href="search.php"><img src="icon\search_icon.png" alt="Search for employee"></a>
        </aside>
        <main>
            <div class="container" id="content">
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
                    <tbody>

                        <?php
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


                                    echo '<tr>
                                        <td>'.$EID.'.</td>
                                        <td><img src="image/'.$Picture.'"></td>
                                        <td>'.$FirstName.'</td>
                                        <td>'.$LastName.'</td>
                                        <td>'.$DateofBirth.'</td>
                                        <td>'.$Department.'</td>
                                        <td>'.$Function.'</td>
                                        <td>'.$Salary.'</td>
                                        <td>
                                        <a href="editEmployee.php?update='.$row['EID'].'"><button class="btn btn-info">UPDATE</button></a>
                                        <a href="delete.php?EID='.$row['EID'].'"><button class="btn btn-danger">DELETE</button></a>
                                        </td>
                                    </tr>';
                                }
                                echo "</table>";
                                    }else{
                                echo "0 results";
                                }
                            
                        ?>
                        




                
                        
                    </tbody>
                </table>
            </div>
        </main> 
    </section>
<!--################################################################################################################3 -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
