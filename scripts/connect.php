<!-- faz conexão com banco-->
<?php
/* credenciais */
    $host= "localhost";
    $user= "ragnarok";
    $password= "ragnarok";
    $database= "ragnarok";
    $results_per_page = 20;

    $connect = mysqli_connect($host,$user,$password,$database) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
    $query = "SELECT id, name_english, type, subtype, price_buy FROM item_db ORDER BY id";

    $result = mysqli_query($connect, $query)     
?>