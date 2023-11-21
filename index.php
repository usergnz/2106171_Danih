<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Costumer Wifi UBER NET</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kotak">
        <h1>Formulir Pendaftaran Costumer Wifi UBER NET</h1>
        <form method="post" action="proses_input.php">
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" maxlength="20" class="form-input" required><br>

            <label for="password">Password :</label>
            <input type="password" name="password" id="password" maxlength="20" class="form-input" required><br>

            <label for="tanggalpendaftaran">Tanggal Pendaftaran :</label>
            <input type="date" name="tanggalpendaftaran" id="tanggalpendaftaran" maxlength="20" class="form-input" required><br>
            
            Paket Wifi :
                <select name="paketwifi">
                    <option value="5mbps" selected>5MBPS = 150rb</option>
                    <option value="10mbps">10MBPS = 200rb</option>
                    <option value="15mbps">15MBPS = 250rb</option>
                    <option value="20mbps">20MBPS = 300rb</option>
                </select>
            <br><br>

            <label for="alamat">Alamat :</label>
            <input type="text" name="alamat" id="alamat" maxlength="20" class="form-input" required><br>


            <label for="email">Email :</label>
            <input type="text" name="email" id="email" maxlength="20" class="form-input" required><br>

            <button type="submit" id="btn-kirim">Daftar🤖</button>
        </form>
    </div>

</body>

</html>