<?php session_start(); ?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>

<body>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($mysqli, $_POST['username']);
    $pass = mysqli_real_escape_string($mysqli, $_POST['password']);

    if($user == "" || $pass == "") {
        echo "<br/>";
        echo "<br/>";
        echo "<center><h1>ERROR.</h1>";
        echo "<br/>";
        echo "<h1>Usuario o contraseña Vacio</h1>.";
        echo "<br/>";
        echo "<a href='login.php'><h1>Volver</h1></a>";
    } else {
        $result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
        or die("<center><h1>ERROR.</h1>");
        
        $row = mysqli_fetch_assoc($result);
        
        if(is_array($row) && !empty($row)) {
            $validuser = $row['username'];
            $_SESSION['valid'] = $validuser;
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
        } else {
            echo "<br/>";
            echo "<br/>";
            echo "<center><h1>ERROR.</h1>";
            echo "<br/>";
            echo "Usuario o contraseña erronea.";
            echo "<br/>";
            echo "<a href='login.php'><h1>Volver</h1></a>";
        }

        if(isset($_SESSION['valid'])) {
            header('Location: index.php');          
        }
    }
} else {
?>

    <form name="form1" method="post" action="" class="container">
    <div>
    <h1 class="lab">Login</h1>
             <h2 class="lab">Usuario</h2>
                <input type="text" name="username" placeholder="Usuario">
             <h2 class="lab">Contraseña</h2>
                <input type="password" name="password" placeholder="Contraseña">
            <br>
            <br>
                <td><input type="submit" name="submit" value="Submit"></td>
                <td><a href="registro.php">Ir a Registro</a></td>
    </div>
    </form>
<?php
}
?>
</body>
</html>