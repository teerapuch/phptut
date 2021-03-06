<?php
/**
* Parses and verifies the doc comments for file.
*
* PHP version 5.6
*
* @category  PHP
* @package   PHPTUT
* @author    Teerapuch Kassakul <teerapuch@hotmail.com>
* @copyright 2016 Teerapuch
* @license   http://opensource.org/licenses/mit-license.php MIT License
* @link      http://teerapuch.com
*/
try {
    // connect to database
    $db = new PDO('mysql:host=localhost; dbname=zendtut; charset=utf8', 'root', '');
    // sql statment
    $select = $db->query('SELECT * FROM customer_tbl LIMIT 100');
    $customer = $select->fetchAll();
    $countrySQL = $db->query('SELECT DISTINCT id,country_name FROM country_tbl');
    $country = $countrySQL->fetchAll();

    $cus = $db->query('SELECT * FROM customer_tbl LIMIT 100');
    $cust = $cus->fetchAll();
    foreach ($cust as $key => $c) {
        $custo["data"][] = $c;
    }
    $cj = json_encode($custo);
    // $email =  $db->query("SELECT email FROM customer_tbl WHERE id = $id ");
    // $mail = $email->fetchAll();
    /*
    $email =  $db->prepare("SELECT email FROM customer_tbl WHERE id = $id ");
    $email->execute();
    $mail = $email->fetch();
    */
} catch (Exception $e) {
    echo 'Can not connect to database';
    throw new Exception($e);
}
