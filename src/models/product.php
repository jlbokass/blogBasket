<?php

/**
 *
 */
class Product
{
    /**
     * @return false|\PDOStatement
     */
    public function getData(): false|PDOStatement
    {
        $dsn = "mysql:host=localhost;dbname=blog_basket;charset=utf8;port=3306";
        $user = "admin_blog_basket";
        $pass = "Password(2024";
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        return $pdo->query("SELECT * FROM product");
    }
}