create database `todo_list`;

use `todo_list`;

CREATE TABLE `login` (
    `id` int(2) NOT NULL auto_increment,
    `name` varchar(25) NOT NULL,
    `email` varchar(25) NOT NULL,
    `username` varchar(25) NOT NULL,
    `password` varchar(25) NOT NULL,  
    PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

CREATE TABLE `tareas` (
    `id` int(2) NOT NULL auto_increment,
    `name` varchar(25) NOT NULL,
    `login_id` int(2) NOT NULL,
    PRIMARY KEY  (`id`),
    CONSTRAINT FK_products_1
    FOREIGN KEY (login_id) REFERENCES login(id)
    ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;