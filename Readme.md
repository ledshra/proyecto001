![](https://media.istockphoto.com/vectors/owl-bird-symbol-of-wise-education-elearning-distance-concept-graduate-vector-id1368758562?b=1&k=20&m=1368758562&s=170667a&w=0&h=hGlK0es3mb7--jm0JjIlIod7qGlTOhq1mDjNatBQlkA=)

# TODO- LIST Proyecto 001
### Instrucciones

Al aver descargado el .zip del proyecto
almacenar el archivo descomprimido en la carpeta htdocs
del xampp.

#Pasos para la ejecucion
Activar los servicios de apache y mysql en xampp control panel
luego:

##Paso 1
Crear la base de datos en mysql del servidor de xampp
> http://localhost//phpmyadmin

Con el siguiente script
```sql
create database `todo`;

use `todo`;

CREATE TABLE `login` (
    `id` int(9) NOT NULL auto_increment,
    `name` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `username` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,  
    PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

CREATE TABLE `tareas` (
    `id` int(11) NOT NULL auto_increment,
    `name` varchar(100) NOT NULL,
    `login_id` int(11) NOT NULL,
    PRIMARY KEY  (`id`),
    CONSTRAINT FK_products_1
    FOREIGN KEY (login_id) REFERENCES login(id)
    ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;
```

##Paso 2
Abrir en el navegador la carpeta del poryecto
> http://localhost/proyecto001-master/


#Pasos para el uso de la pagina todo-list
Despues de aver ejecutado correctamente las anteriores pasos ahora seguimos con el uso de la pagina creada.

##Paso 1
Registrarte con:
+ Nombre
+ Email
+ Usuario
+ Contraseña

##Paso 2
Luego de aver registrado corectamente, iniciar seción
con el:
+ usuario
+ contraseña.

|Usuario
|-------------
|`Usuario`
|**Contraseña**
|`Contraseña`
|![](https://simg.nicepng.com/png/small/281-2819748_how-to-set-use-login-button-clipart-button.png)



##Paso 3
**Agregar nuvas tareas**

Nueva tarea |............
------------- | -------------
 `Agregar tarea` | **Agregar**

**lista de tareas**

| id | Tarea  | Accion|............
|----------|------------|
|3| tarea 3 |editar|eliminar
|2| tarea 2 |editar |eliminar
| 1|tarea 1 | editar |eliminar


##Directorio de Archivos

###Proyecto001

- [ ]agregar.html
- [ ]agregar.php
- [ ]base_datos.sql
- [ ]connection.php
- [ ]delete.php
- [ ]edit.php
- [ ]index.php
- [ ]login.php
- [ ]logout.php
- [ ]Readme.md
- [ ]registro.php
- [ ]styleagregar.css
- [ ]styleedit.css
- [ ]styleindex.css
- [ ]stylelogin.css
- [ ]styleregistro.css

###End
