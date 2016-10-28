<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=homestead', "homestead", "secret");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $dropQuery = "DROP TABLE IF EXISTS customer;";
    $tableQuery = "CREATE TABLE customer("
            . 'id INT PRIMARY KEY AUTO_INCREMENT,'
            . 'firstname VARCHAR(255),'
            . 'lastname VARCHAR(255),'
            . 'birthdate DATETIME,'
            . 'salary DOUBLE,'
            . 'civicnumber INT,'
            . 'street VARCHAR(255),'
            . 'city VARCHAR(255),'
            . 'state VARCHAR(255),'
            . 'postcode VARCHAR(12));';
    $pdo->exec($dropQuery);
    $pdo->exec($tableQuery);
    
    checkTables($pdo, 'customer');
}
catch(PDOException $pdoe)
{
    echo $pdoe->getMessage();
}
 finally {
     unset($pdo);
}

/**
 * Checks if the table was created
 * @param type $pdo
 * @param type $tablename
 */
function checkTables($pdo, $tablename)
{
    $tableCheck = $pdo->query("SELECT * FROM $tablename");
    if(!empty($tableCheck))
    {
        echo "Table created\n";
    }
    else
    {
        echo "ERROR: Table not created\n";
    }
}