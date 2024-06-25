
<?php
    include('config/setup.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page['title'].' | '.$site_title;?> </title>
    <?php
    include('config/css.php');
    ?>
    <?php
    include('config/js.php');
    ?>
</head>
<body>

    <div class="background">
        <?php include('template/navigatie.php'); ?>
                    <div class="container">
                            <h1 style="color:deepskyblue"><?php echo $page['header']; ?></h1>
                            <h2 style="color:yellow;"><?php echo $page['body']; ?></h2>
                        <?php
                        if($page['idp'] == 1){ ?>
                        <h2 style="color:white">Locatia noastra:</h2>
                            <?php include('functii/map.php'); ?>
                        <?php }
                        ?>

                        <?php
                        if($page['idp'] == 2){ ?>
                        <?php
                        $query = "SELECT * FROM logo_cars";
                        $result = mysqli_query($dbc, $query);
                        $pic = mysqli_fetch_assoc($result);
                        while($pic = mysqli_fetch_assoc($result)){
                        ?>
                            <img src="<?php echo $pic['src']; ?>" width="175" height="200" />
                        <?php


                             }
                        ?>
                        <?php }
                        ?>

                    </div>

    </div>

</body>
</html>