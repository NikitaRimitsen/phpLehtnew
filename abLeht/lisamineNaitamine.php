<?php
require ('conf.php'); //require - запрашиваем
global $yhendus;
//lisamine INSERT INTO
if(!empty($_REQUEST['loomanimi'])){
$kask=$yhendus->prepare('INSERT INTO loomad(nimi)
VALUES (?)');
//"s" - string
// $_REQUEST['loomanimi'] - запрос в текстовый ящик input name="loomanimi"
$kask->bind_param("s", $_REQUEST['loomanimi']);
$kask->execute();
// изменяет адресную строку
    //$_SERVER[PHP_SELF] - до имени файла
header("Location: $_SERVER[PHP_SELF]");

}
//tabelist kustutamine
if(isset($_REQUEST['kustuta'])){
    $kask=$yhendus->prepare('DELETE FROM loomad WHERE id=?');
    $kask->bind_param("i",$_REQUEST['kustuta']);
    $kask->execute();
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Andmetabeli sisu näitamine</title>
</head>
<body>
<h1>
    Andmetabeli "Loomad" sisu näitamine
</h1>
<?php
global $yhendus;
//tabeli sisu näitamine
$kask=$yhendus->prepare("SELECT id, nimi, kirjeldus FROM loomad");
$kask->bind_result($id, $nimi, $kirjeldus);
$kask->execute();
echo "<table>";
echo "<tr>
<th>id</th>
<th>Loomanimi</th>
<th>Kirjeldus</th>
<th>Tegevus</th>
</tr>";
//fetch() - извлечение данных из набора данных
while($kask->fetch()){
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$nimi</td>";
    echo "<td>$kirjeldus</td>";
    echo "<td><a href='$_SERVER[PHP_SELF]?kustuta=$id'>delete</a></td>";
    echo "</tr>";
}
echo "</table>";

?>
<!--new code-->
<br><br>
<form action="" method="post">
    <label for="loomanimi">Loomanimi</label>
    <input type="text" name="loomanimi" id="loomanimi">
    <input type="submit" value="Lisa">
</form>
<?php
$yhendus->close();
?>
</body>
</html>
