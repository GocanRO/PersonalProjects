<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- jQuery CSS -->
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery.ui.all.css">

<!-- FontAwesome -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


<style>

    .background{
        min-height: 974px;
    <?php

    $query = "SELECT * FROM images";
    $result = mysqli_query($dbc, $query);

    while($pic = mysqli_fetch_assoc($result)){
        if($pic['name'] == $page['idp']){ ?>
        background-image: url("<?php echo $pic['src']; ?>");
    <?php
    }
}
?>
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
        width: 100%;
        margin: auto;
        padding: 0;
        display: table;
        top: 0;

    }
    .navbar-nav {
        float:none;
        margin:0 auto;
        display: block;
        text-align: center;
    }

    .navbar-nav > li {
        display: inline-block;
        float:none;
    }

</style>
