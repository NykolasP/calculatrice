<?php
require_once "../classes/user.php";

$user1 = new User("nico@gmail.com","Puech","Nicolas",22);
echo "User1 : ";
echo $user1->isValid()."\n";
echo '<br><br>';

// Si il n'y a pa sde nom ou de prenom
$user2 = new User("nico@gmail.com","","",12);
echo "User2 : ";
foreach($user2->isValid() as $result){
    echo $result."\n";
    echo '<br>';
}
echo '<br><br>';
// Si l'adressse email est mal remplie
$user3 = new User("nicogmail.com","Puech","Nicolas",22);
echo "User3 : ";
foreach($user3->isValid() as $result){
    echo $result."\n";
    echo '<br>';
}
echo '<br><br>';
// Si aucune des condition est remplie
$user4 = new User("nicogmail.com","","",12);
echo "User4 : ";
foreach($user4->isValid() as $result){
    echo $result."\n";
    echo '<br>';
}
echo '<br><br>';