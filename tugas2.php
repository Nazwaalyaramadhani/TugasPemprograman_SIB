<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mahasiswa STMIK KAPUTAMA</title>
</head>
<body>
    <h2>Penilaian Mahasiswa</h2>
    <form method="post" action="">
        <label for="nilai1">Masukkan Nilai Mata Kuliah 1:</label>
        <input type="number" name="nilai1" id="nilai1" required><br><br>
        
        <label for="nilai2">Masukkan Nilai Mata Kuliah 2:</label>
        <input type="number" name="nilai2" id="nilai2" required><br><br>
        
        <label for="nilai3">Masukkan Nilai Mata Kuliah 3:</label>
        <input type="number" name="nilai3" id="nilai3" required><br><br>
        
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari input field
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $nilai3 = $_POST['nilai3'];

        // Hitung nilai rata-rata
        $rataRata = ($nilai1 + $nilai2 + $nilai3) / 3;

        // Tentukan status kelulusan
        $statusKelulusan = ($rataRata >= 60) ? "Lulus" : "Tidak Lulus";

        // Tampilkan hasil
        echo "<h3>Nilai Rata-Rata: " . number_format($rataRata, 2) . "</h3>";
        echo "<h3>Status Kelulusan: " . $statusKelulusan . "</h3>";
    }
    ?>
</body>
</html>