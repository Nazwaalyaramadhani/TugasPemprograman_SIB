<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Nilai : <input type="number" name="nilai" />
        <input type="submit" value="Proses" />
     </form>
     <?php
     $nilai = $_GET['nilai'];
     if($nilai >100){
        echo "Data Anda Tidak valid";
     }elseif($nilai >= 70){
        echo "Lulus Ujian dengan Baik";
     }elseif($nilai >= 60){
        echo "Lulus Ujian dengan cukup";
     }else{
        echo "Tidak Lulus Ujian";
     }
     ?>
</body>
</html>