# php-mysql-poc
POC for PHP/MySQL

## Getting Started

1. Create codespace.
2. Connect to the `mariadb` database using MySQL Workbench, HeidiSQL or another MySQL client (username and password are both `mariadb`).
3. Create a table with the following query:
```
CREATE TABLE `mariadb`.`registrations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));
```
4. Inside codespace, run `apache2ctl start`.
5. Access in your browser at `http://localhost:8080`.
6. Submit form, then check the DB to see the name provided.

## Reference

https://www.youtube.com/watch?v=nP-MvFoDVZE