<?php session_start(); ?>
<html>
<head>
    <title>Login</title>
</head>

<body>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($mysqli, $_POST['username']);
    $pass = mysqli_real_escape_string($mysqli, $_POST['password']);

    if($user == "" || $pass == "") {
        echo "<center>Usuario y Comtraseña Vacio.";
        echo "<br/>";
        echo "<br/>";
        echo "<a href='login.php'>Volver</a>";
    } else {
        $result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
        or die("ERROR.");
		
        $row = mysqli_fetch_assoc($result);
		
        if(is_array($row) && !empty($row)) {
            $validuser = $row['username'];
            $_SESSION['valid'] = $validuser;
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
        } else {
            echo "<center>Usuario o Contraseña Incorrecto.";
            echo "<br/>";
            echo "<br/>";
            echo "<a href='login.php'>Volver</a>";
        }

        if(isset($_SESSION['valid'])) {
            header('Location: index.php');			
        }
    }
} else {
?>
    <form name="form1" method="post" action="">
    <h1>Login</h1>
        <table>
             Usuario
             <br>
                <input type="text" name="username">
             <br>
             Contraseña
             <br>
                <input type="password" name="password">
            <br>
                <td><input type="submit" name="submit" value="Submit"></td>
            
        </table>
    </form>
<?php
}
?>
</body>
</html>