CREATE TABLE `db_ifranc-r`.ft_table
(
	`id` INT PRIMARY KEY UNIQUE AUTO_INCREMENT NOT NULL,
	`login` VARCHAR(8) NOT NULL DEFAULT 'toto',
	`group` ENUM('staff','student','other') NOT NULL,
	`creation_date` DATE NOT NULL
);