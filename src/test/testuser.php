<?php
include("./src/classes/user.php");
$user1 = new User("nico@gmail.com","Puech","Nicolas",22);
var_dump($user1->isValid());

$user2 = new User("nico@gmail.com","Puech","Nicolas",12);
//var_dump($user2->isValid());

$user3 = new User("nicogmail.com","Puech","Nicolas",22);
var_dump($user3->isValid());

$user4 = new User("nicogmail.com","","",22);
var_dump($user4->isValid());