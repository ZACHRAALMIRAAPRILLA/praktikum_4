<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Method POST proses</title>
</head>
<body>
    Alamat anda adalah :
    <?php
        if(isset($_POST["alamat"])){
            echo $_POST["alamat"];
        }
        else {
            "Alamat tidak ditemukan";
        }
    ?>        
</body>
</html>