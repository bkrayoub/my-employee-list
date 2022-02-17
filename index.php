



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
            <div id="nav-logo"><img src="logo.png" alt="My Employee List Logo"><h1>My Employee List</h1></div>
    </nav>
    <section>
        <aside class="bg-dark">
            <a href="index.php"><img src="icon\home_icon.png" alt="Go home" id="selected-box"></a>
            <a href="AddNwEmployee.php"><img src="icon\plus_icon.png" alt="Add employee"></a>
            <a href="EmployeeList.php"><img src="icon\list_icon.png" alt="Employees list"></a>
            <a href="search.php"><img src="icon\search_icon.png" alt="Search for employee"></a>
        </aside>
        <main>
            <div class="container">
                <h1>biba</h1>
            </div>
        </main> 
    </section>
<!--################################################################################################################3 -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>