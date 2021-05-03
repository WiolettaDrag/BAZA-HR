<?php
require_once  "connect.php";
$polaczenie = new mysqli($host, $db_user, $db_password,$db_name);
?>
 
<!DOCTYPE HTML>
<html lang="pl">
 
<head>
        <meta charset="utf-8" />
		<title>BAZA HR</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        
       
</head>
 
<body>
 
<h1> Informacje na temat pracowników </h1>
 
<div id = "container">
 
<?php
 
if ($polaczenie->connect_errno!=0){
                echo "Error: ".$polaczenie->connect_errno;
        }
        else{
                $sql="SELECT * FROM employees";
               
         if($results = @$polaczenie->query($sql)){
                        echo "<table>";
                echo "<td>"."<b>IMIĘ</b>"."</td>";
                echo "<td>"."<b>NAZWISKO</b>"."</td>";
                echo "<td>"."<b>DATA ZATRUDNIENIA</b>"."</td>";
                echo "<td>"."<b>WYNAGRODZENIE</b>"."</td>";
                       
        while($row=mysqli_fetch_assoc($results)){
                echo "<tr>";
                echo "<td>".$row['first_name']."</td>";
                echo "<td>".$row['last_name']."</td>";
                echo "<td>".$row['hire_date']."</td>";
                echo "<td>".$row['salary']."</td>";
                echo "</tr>";
                }
                echo "</table>";
               
                $polaczenie->close();
                                               
                }
        }
?>
 
</div>
 
</body>
</html>
