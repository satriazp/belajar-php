<?php

$nama = "Satria Yudha Pratama";
/*
echo "$nama";
echo "<br/>";
echo "$nama";
echo "<br/>";
echo "$nama";
echo "<br/>";
echo "$nama";
echo "<br/>";
echo "$nama";
echo "<br/>";
*/

/*
for ($i=0; $i<5; $i++) {
    echo $nama."<br/>";
}
*/
/*
$no = 10;
$i = 0;
while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;
do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++; 
} while ($i < $no)
*/

$data = array('Avanza','Pajero','CRV','Tesla','Lamborghini','Rubicon');
/*
$i = 0;
while ($i < count($data)) {
    echo $data[$i]."<br>";
    $i++;
}
*/

/*
foreach($data as $value) {
    echo $value."<br>";
}
*/

//Percabangan
/*
if ($nama =="Satria") {
    echo $nama." adalah orang Lamongan.";
} else {
    echo $nama." bukan orang Lamongan";
}
*/

/*
switch ($nama) {
    case "Satria":
        echo $nama." adalah orang Satria";
    break;
    case "Makachev":
        $pesan = $nama." adalah orang Dagestan";
    break;
    default:
        $pesan = $nama." darimana ya?";
}
echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label>Nama</label>
    <input type="text" name="nama">
    <label>Jumlah</label>
    <input type="text" name="no">
    <input type="submit" name="submit" value="Submit">
</form>
<?php
    if(!empty($_POST['submit'])) {

        switch ($_POST['nama']) {
            case "Satria":
                $pesan = $_POST['nama']." adalah orang Lamongan";
            break;
            case "Makachev":
                $pesan = $_POST['nama']." adalah orang Dagestan";
            break;
            default:
                $pesan = $_POST['nama']." darimana ya?";
        }
        for ($i=0;$i<$_POST['no'];$i++) {
            echo $pesan."<br>";
        }
    } else {
        echo "Anda belum input nama dan jumlah";
    }

?>
</body>
</html>