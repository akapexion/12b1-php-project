<?php

$conn = mysqli_connect("localhost", "root", "");  //mysql server connect

$db = mysqli_query($conn, "SHOW DATABASES LIKE 'market'"); //db check
$count_dbs = mysqli_num_rows($db);  // dbs count

if($count_dbs == 0){  // conditional statement
    mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS `market`"); // db creation

    mysqli_select_db($conn, "market"); // db selection

    // table creation
    mysqli_query($conn, " 
        CREATE TABLE IF NOT EXISTS users(
            user_id int PRIMARY KEY AUTO_INCREMENT,
            user_fname varchar(50),
            user_lname varchar(50),
            user_email varchar(100),
            user_password varchar(200),
            user_role varchar(50) DEFAULT 'user'
        )
    ");

    mysqli_query($conn, " 
        CREATE TABLE IF NOT EXISTS products(
            product_id int PRIMARY KEY AUTO_INCREMENT,
            product_name varchar(50),
            product_category varchar(50),
            product_price int,
            product_stock int,
            product_detail text(200),
            product_image varchar(100)
        )
    ");

    mysqli_query($conn, " 
        CREATE TABLE IF NOT EXISTS categories(
            category_id int PRIMARY KEY AUTO_INCREMENT,
            category_title varchar(50),
            caregory_image varchar(50)
        )
    ");

    // insert a user
    mysqli_query($conn, "
        INSERT IGNORE INTO users(user_fname, user_lname, user_email, user_password, user_role)
        VALUES('Moiz', 'Hussain', 'moiz@gmail.com', sha1('111'), 'admin'),('Test', '---', 'test@gmail.com', sha1('111'), 'user')
    ");
}
else {
    echo "Migration Already Executed";
}
?>