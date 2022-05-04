<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>

<?php
// including the database connection file
include_once("connection.php");

if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    $name = $_POST['name'];
	
    // checking empty fields
    if(empty($name)) {				
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }		
    } else {	
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE tareas SET name='$name' WHERE id=$id");
		
        //redirectig to the display page. In our case, it is view.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM tareas WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
}
?>
<html>
<head>	
    <title>Editar</title>
    <link rel="stylesheet" type="text/css" href="styleedit.css">
</head>

<body>
    <button class="l"><a href="index.php">Volver</a></button>
    <button> <a href="logout.php">Cerrar Secion</a></button>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php" class="container">
                <div>
                    <h1>Editar Tarea</h1>
                    <input type="text" name="name" value="<?php echo $name;?>"class="q">
                    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                    <input type="submit" name="update" value="Actualizar" >
                </div>
    </form>
</body>
</html>