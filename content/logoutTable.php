logout.php<?php
session_start();
if (!isset($_SESSION['tuvastamine'])){
    header('Location: loginABTable.php');
    exit();

}
if (isset($_POST['logout'])){
    session_destroy();
    //aadressi reas avatakse login.php fail
    header('Location: loginABTable.php');
    exit();//vexod iz if
}
?>
