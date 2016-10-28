<?php

require('vendor/autoload.php');
require('CustomerDAO.php');
require('Customer.php');

$faker = Faker\Factory::create();

$dao = new CustomerDAO();

for($i = 0; $i < 1000; $i++){
    $c = new Customer($faker->firstName, $faker->lastName, 
            $faker->dateTimeBetween('-65 years', 'now'), 
            $faker->randomFloat(2,10000, 900000), $faker->numberBetween(1000, 9999), 
            $faker->streetName, $faker->city, $faker->stateAbbr, $faker->postcode);
    
    $dao->insertCustomer($c);
}