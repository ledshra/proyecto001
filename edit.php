<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>

<?php
include_once("connection.php");

if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    $name = $_POST['name'];
	
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
$id = $_GET['id'];

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
    <a href="index.php"><button class="l">Home</button></a>
    <a href="logout.php"><button>Cerrar Secion</button></a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php" class="container">
                <div>
                    <h1>Editar Tarea</h1>
                    <input type="text" name="name" value="<?php echo $name;?>"class="q">
                    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                    <input class="r" type="submit" name="update" value="Actualizar" >
                </div>
    </form>
</body>
</html>