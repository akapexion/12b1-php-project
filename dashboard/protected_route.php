<?php

    include("config/db.php");

 if(!isset($_SESSION['email'])){
                        echo "<script>
                            location.assign('login.php');
                        </script>";
                    }




?>