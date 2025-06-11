<html>
    <head>
        <title>Simple calculator</title>
        <link rel="stylesheet" href="simple.css">
        <style>
        .calc-btn {
    width: 120px;
    height: 50px;
    font-size: 16px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: background 0.3s;
    position: absolute;
    top: 20px;
    left: 20px;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
}
    </style>
    </head>

<?php //ini dibuat untuk memasukkan php ke html
if (isset($_POST['hitung'])) { //isset ngecek kalo variabel udah di siapkan/set/punya niali/di isi formnya. $_POST mengambil data dari form html dengan klik(<form action="index.php" method="POST">)
    if ($_POST['operasi'] == "tambah") { // jika form di isi dengan memilih operasi tambah +,
        $hasil = $_POST['angka1'] + $_POST['angka2']; // maka isi dari angka1 dan angka2 ditambahkan. MIsal kita mau ngisi angka1 4 dan angka2 2 jadi jawabanya 6
    }elseif ($_POST['operasi'] == "kurang"){ // jika form di isi dengan memilih operasi kurang -,
        $hasil = $_POST['angka1'] - $_POST['angka2']; // maka isi dari angka1 dan angka2 dikurang. MIsal kita mau ngisi angka1 4 dan angka2 2 jadi jawabanya 2
    }elseif ($_POST['operasi'] == "kali"){ // jika form di isi dengan memilih operasi kali x,
        $hasil = $_POST['angka1'] * $_POST['angka2']; // maka isi dari angka1 dan angka2 dikali. MIsal kita mau ngisi angka1 4 dan angka2 2 jadi jawabanya 8
    }else { // else tidak menerima kurung () makanya kalo di coba tambahin kayak yang lain ($_POST['operasi'] == "bagi") maka error. Kalo diubah jadi elseif juga tetep gajadi. Jadi.. jika form di isi dengan memilih operasi bagi /,
        $hasil = $_POST['angka1'] / $_POST['angka2'];// maka isi dari angka1 dan angka2 dibagi. MIsal kita mau ngisi angka1 4 dan angka2 2 jadi jawabanya 2
    }
} else {
        $hasil = 0; //Kalau user belum tekan tombol hitung, maka kita set $hasil = 0.
}
 
?>


    <body>
    <a href="/calculator/home.php" class="calc-btn">Kembali</a>
    
        <div class="isi">
        <h2 class="judul" style="font-family: Arial, sans-serif;"><strong>CALCULATOR</strong></h2>
       <form action="index.php" method="POST">  <!-- form itu mengambil input data kaya login,daftar,kalkulator,survei dan kirim komen. Saat input udah dikirim maka akan dikirim ke file index.php. POST cara pengiriman sebenernya bisa pake GET tapi akan terlihat di url -->
           <input type="number" name="angka1" class="input">  <!-- Input tag html buat kolom kosong. type tipe/jenis kegunaan kolom. name nama data form. class input sama kaya pengertian input -->
            <input type="number" name="angka2" class="input"> <!-- Input tag html buat kolom kosong. type tipe/jenis kegunaan kolom. name nama data form. class input sama kaya pengertian input -->
            <select name="operasi" class="operasi"> <!-- select dropdown pilihan. name nama data form. class eksternal yang di panggil lewat style.css -->
              <option value="tambah">+</option>   <!-- option pilihanya. value  ini cuma teks tampilan di tombol atau syling -->
                <option value="kurang">-</option>  <!-- option pilihanya. value  ini cuma teks tampilan di tombol atau syling -->
                <option value="kali">x</option>  <!-- option pilihanya. value  ini cuma teks tampilan di tombol atau syling -->
                <option value="bagi">/</option>  <!-- option pilihanya. value  ini cuma teks tampilan di tombol atau syling -->
            </select>  <!-- select dropdown pilihan -->
            <input type="submit" name="hitung" value="punch" class="hitung" style="font-weight:bold;">  <!-- Input tag html buat kolom kosong. type type tipe/jenis kegunaan kolom. name nama data form. value  ini cuma teks tampilan di tombol atau syling. class eksternal yang di panggil lewat style.css -->
            <h2>
            <input type="text" class="hasil" value="<?= $hasil; ?>">
                <!-- <strong style="font-family: Arial, sans-serif;">HASIL : ?php echo $hasil; ? </strong>  ini dibuat untuk memasukkan php ke html. echo tag tuk tampilkan teks. $hasil nama data form POST -->
            </h2>
        </form>
        </div>
    </body> 
</html>