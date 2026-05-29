<!DOCTYPE html>
<html>
<head>
    <title>Tanggal</title>
</head>
<body>
    <font size="10px">
        <?php
        date_default_timezone_set('Asia/Jakarta'); // Set zona waktu ke Jakarta 
        echo "Sekarang tanggal ";
        echo date('d-F-Y'); // format: hari-bulan-tahun
        echo "<br>dan jam ";
        echo date('h:i:s A'); // format: jam:menit:detik AM/PM
        ?>
    </font>
</body>
</html>
<!-- Project 9.1 By LILI NURHALIM - 221011450310 -->
