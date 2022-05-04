<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>

<html>
<head>
    <title>Agregar Tarea</title>
</head>

<body>
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
    $name = $_POST['name'];
    $loginId = $_SESSION['id'];
		
    // checking empty fields
    if(empty($name)) {				
        if(empty($name)) {
            echo "<font color='red'>ERROR.</font><br/>";
        }
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Volver</a>";
    } else { 
        // if all the fields are filled (not empty) 
			
        //insert data to database	
        $result = mysqli_query($mysqli, "INSERT INTO tareas(name, login_id) VALUES('$name', '$loginId')");
		
        //display success message
        echo "<font color='green'>Tarea agregada correctamente.";
        echo "<br/><a href='index.php'>Home</a>";
    }
}
?>
</body>
</html>