<?php

function date_page($dbc,$pageid) {

        $q = "SELECT * FROM pagini WHERE idp = $pageid";
        $r = mysqli_query($dbc,$q);
        $date = mysqli_fetch_assoc($r);
    return $date;

}


?>