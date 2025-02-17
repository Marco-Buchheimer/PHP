<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "klausimausi" && $password == "geheim123"){
    echo "Herzlich Willkommen Klaus!";
}
else{
    echo "Du bist nicht Klaus";
}
?>

