<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>День1</title>
    <meta name="description" content="Day1">

</head>

<body>
    <div class="container">
        <header class="borda">
            <h1>Веб-разработка</h1>

            

            <?php
                
                $test = $_POST['test'];
                print"HI ".$test;
                $mysqli = new mysqli("localhost", "root", "", "users");
                $sql = "INSERT INTO" 'users'('login', 'password') VALUES
                $result = $mysqli->query($sql);

            ?> 


        </header>
        <nav>
            


            <ul>
                <li>
                    <a href="reg.html"> Регистрация </a>
                </li>
                <li>
                    <a href="Index.html"> Главная </a>
                </li>
            </ul>    
        </nav>

        <?php

                print("HI");
        ?>

        <form action="" method="get">
            <input type="text" name="test">
            <br>
            <br>
            <input type="submit" value="отправить">
        </form>
         
        

        <footer class="borda">
            <h1> Footer</h1> 
        </footer>
        
    </div>
    



</body>