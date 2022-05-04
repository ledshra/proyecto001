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
include_once("connection.php");

if(isset($_POST['Submit'])) {	
    $name = $_POST['name'];
    $loginId = $_SESSION['id'];
		
    if(empty($name)) {				
        if(empty($name)) {
            echo "<font color='red'>ERROR.</font><br/>";
        }
        echo "<br/><a href='javascript:self.history.back();'>Volver</a>";
    } else {
        $result = mysqli_query($mysqli, "INSERT INTO tareas(name, login_id) VALUES('$name', '$loginId')");
		
        echo "<font color='green'>Tarea agregada correctamente.";
        echo "<br/><a href='index.php'>Home</a>";
    }
}
?>
</body>
</html>