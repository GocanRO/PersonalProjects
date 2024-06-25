<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <ul class="nav navbar-nav">
            <?php

                $q="SELECT * FROM pagini";
                $r= mysqli_query($dbc,$q);

                while($nav = mysqli_fetch_assoc($r)) { ?>

                    <li<?php if($pageid == $nav['idp']){echo ' class="active" ' ;} ?> ><a href="?page=<?php echo $nav['idp']; ?>"><?php echo $nav['title']; ?></a></li>

                <?php
                }

            ?>

        </ul>
    </div>

</nav><!-- SFARSIT NAV -->