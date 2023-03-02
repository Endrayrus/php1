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