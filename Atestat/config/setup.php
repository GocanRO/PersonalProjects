<?php

$dbc = mysqli_connect('localhost', 'admin', 'admin', 'atestat') OR die('Nu se poate realiza conectarea: '.mysqli_connect_error());

#Functii:
include('functii/date.php');

$site_title = 'Auto World';
if(isset($_GET['page'])){

    $pageid= $_GET['page']; //Aici variabila pageid primeste valoarea lui page din URL
}   else{

    $pageid = 1; //Daca nu gaseste o valoare pentru page,va primi 1
                 //pentru ca aceasta este pagina principala
}

#Setarile pentru pagina
$page = date_page($dbc, $pageid);

?>