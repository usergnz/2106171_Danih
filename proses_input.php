<?php 
    $db = mysqli_connect("localhost","root","","2106171_danih");
    var_dump($db);
    if (!$db) {
        echo "<script>
                alert('database tidak terhubung')
            </script>";
    };

    $nama = $_POST['nama'];
    var_dump($nama);
    $password = $_POST['password'];
    var_dump($password);
    $tanggalpendaftaran = $_POST['tanggalpendaftaran'];
    var_dump($tanggalpendaftaran);
    $paketwifi = $_POST['paketwifi'];
    var_dump($paketwifi);
    $alamat = $_POST['alamat'];
    var_dump($alamat);
    $email = $_POST['email'];
    var_dump($email);


    $query = "INSERT INTO pendafataran-wifi VALUES(NULL,'$nama','$password','$tanggalpendaftaran','$paketwifi','$alamat','$email')";
    mysqli_query($db,$query);
    //echo "<script>alert('Costumer berhasil ditambahkan')</script>";
    //echo "<script>window.location='./index.php'</script>";
    ?>