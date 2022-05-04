<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="styleregistro.css">
</head>

<body>
    <?php
    include("connection.php");

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if($user == "" || $pass == "" || $name == "" || $email == "") {
            echo "<br/>";
            echo "<br/>";
            echo "<center><h1>ERROR.</h1>";
            echo "<br/>";
            echo "<h1>Formulario Vacio.</h1>";
            echo "<br/>";
            echo "<a href='registro.php'><h1>Volver</h1></a>";
        } else {
            mysqli_query($mysqli, "INSERT INTO login(name, email, username, password) VALUES('$name', '$email', '$user', md5('$pass'))")
            or die("<center><h1>ERROR.</h1>");
			
            echo "<center><h1>El registro se realiso correctamente</h1>";
            echo "<br/>";
            echo "<a href='login.php'><h1>Login</h1></a>";
        }
    } else {
?>
        <form name="form1" method="post" action="" class="container">
            <div>
            <h1 class="lab">Registro</h1>
                    <h2 class="lab">Nombre</h2>
                    <input type="text" name="name" class="r" placeholder="Nombre">
                
                    <h2 class="lab">Email</h2>
                    <input type="text" name="email" class="r" placeholder="ejemplo@gmail.com">
                 
                    <h2 class="lab">Usuario</h2>
                    <input type="text" name="username" class="r" placeholder="Usuario">
                 
                    <h2 class="lab">Contraseña</h2>
                    <input type="password" name="password" class="r" placeholder="Contraseña">
                <div>
                    <input type="submit" name="submit" value="enviar">
                    <a href="index.php">Login</a>
                </div>
            </div>
</form>
    <?php
    }
    ?>
</body>
</html>