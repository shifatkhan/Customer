<?php

/**
 * This class interacts with the database
 *
 * @author Shifat Khan
 */
class CustomerDAO {

    private $dbname;
    private $user;
    private $password;

    /**
     * Non-default constructor with default values.
     * @param type $dbname
     * @param type $user
     * @param type $password
     */
    function __construct($dbname = 'homestead', $user = 'homestead', $password = 'secret') {
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;
    }

    public function getDbname() {
        return $this->dbname;
    }

    public function getUser() {
        return $this->user;
    }

    public function getPassword() {
        return $this->password;
    }

    /**
     * Inserts a given Customer into the database
     * @param Customer $c
     */
    public function insertCustomer(Customer $c) {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=$this->dbname", 
                    $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $instertQuery = 'INSERT INTO customer(firstname, lastname, birthdate, salary, '
                    . 'civicnumber, street, city, state, postcode) '
                    . 'VALUES(?,?,?,?,?,?,?,?,?);';
            
            $stmt = $pdo->prepare($instertQuery);
            $stmt->bindValue(1, $c->getFirstName());
            $stmt->bindValue(2, $c->getLastName());
            $stmt->bindValue(3, $c->getBirthdate()->format('Y-m-d H:i:s'));
            $stmt->bindValue(4, $c->getSalary());
            $stmt->bindValue(5, $c->getCivicnumber());
            $stmt->bindValue(6, $c->getStreet());
            $stmt->bindValue(7, $c->getCity());
            $stmt->bindValue(8, $c->getState());
            $stmt->bindValue(9, $c->getPostcode());
            
            $stmt->execute();
            
            echo "Inserted customer. ". $stmt->rowCount() ." rows affected.\n";
            
        } catch (PDOException $pdoe) {
            echo $pdoe->getMessage()."\n";
        } finally {
            unset($pdo);
        }
    }

}
