<?php
    if (isset($_POST['last_name']))
	{
        require_once "connect.php";
        $connection=@new mysqli($host, $db_user, $db_password, $db_name);

        if ($connection->connect_errno!=0){
            echo "Error databases connection";
        }
        else{

            $last_name=$_POST['last_name'];
            if ($connection->query("DELETE FROM employees WHERE last_name='$last_name'"))
			{
				echo '<span style="color:red">Successfully delete  '.$last_name.'</span>';
			}

            $connection->close();
        }
    }
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8"/>
        <title>BAZA HR</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
        
    </head>

    <body>

        <header>
            <h2><p class="main_header">Usuń pracownika z bazy </p></h2>
        </header>

       <main class="container">

            <form method="post">
                <h3>Wpisz nazwisko pracownika do usunięcia</h3>

                Nazwisko:
                <input type="text" name="last_name">
                <button>USUŃ</button>
            </form>
          
       </main>

    
       
    </body>
</html>
