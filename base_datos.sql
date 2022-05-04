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
