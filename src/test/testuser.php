<?php
include("./src/classes/user.php");
$user1 = new User("nico@gmail.com","Puech","Nicolas",22);
var_dump($user1->isValid());

// Si il n'y a pa sde nom ou de prenom
$user2 = new User("nico@gmail.com","","",12);
var_dump($user2->isValid());

// Si l'adressse email est mal remplie
$user3 = new User("nicogmail.com","Puech","Nicolas",22);
var_dump($user3->isValid());

// Si aucune des condition est remplie
$user4 = new User("nicogmail.com","","",12);
var_dump($user4->isValid());