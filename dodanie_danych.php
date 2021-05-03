<?php 

if(isset($_POST['first_name'])){

require_once "connect.php";
$polaczenie = @new mysqli($host, $db_user, $db_password,$db_name);
    
   if ($polaczenie->connect_errno!=0){
		echo "Error: ".$polaczenie->connect_errno;
	}
	else{
		
	$id = $_POST['id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$hire_date = $_POST['hire_date'];
	$job_id = $_POST['job_id'];
	$salary = $_POST['salary'];
		
		
	if($polaczenie->query("INSERT INTO employees (employee_id, first_name, last_name, email,  hire_date, job_id, salary) VALUES ('$id','$first_name','$last_name', '$email', '$hire_date', '$job_id','$salary')")){
		echo '<span style="color:green">Successfully add new employee</span>';
	}
		     $polaczenie->close();
	}  	
}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>HR</title>
	
</head>

<body>

<h1> Dodaj dane nowego pracownika do bazy </h1>

<div id = "container">

<form  method="post">

          ID:
          <input type="number" name="id">
          <div>
          Imię:
          <input type="text" name="first_name">
          <div>
          Nazwisko:
          <input type="text" name="last_name">
          <div>
          Email:
          <input type="text" name="email"> 
          <div>
          Data zatrudnienia:
          <input type="text" name="hire_date">
          <div>
          ID pracy:
          <input type="text" name="job_id">
          <div>
          Wynagrodzenie:
          <input type="text" name="salary">
          <div>
          <input type="submit" value="dodaj" />
</form>


</div>

</body>
</html>
