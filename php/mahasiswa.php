<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Belajar OOP bersama Mahasiswa</title>
</head>

<body>
      <?php
      class Mahasiswa
      {
            public $nama;
            public $nim;
            public $jurusan;

            function __construct($nama, $nim, $jurusan)
            {
                  $this->nama = $nama;
                  $this->nim = $nim;
                  $this->jurusan = $jurusan;
            }

            function tampilData()
            {
                  echo "Nama : " . $this->nama . "<br>";
                  echo "NIM : " . $this->nim . "<br>";
                  echo "Jurusan : " . $this->jurusan . "<br>";
            }

            function daftarMatkul($matkul)
            {
                  echo $this->nama . " mendaftarkan mata kuliah " . $matkul . "<br>";
            }

            function Kosong()
            {
                  echo "<br>";
            }
      }
      $ms1 = new Mahasiswa("Dwi", "123456", "Rekayasa Perangkat Lunak");
      $ms1->tampilData();
      $ms1->daftarMatkul("Pemrograman Web");
      $ms1->Kosong();
      // Nama : Dwi
      // NIM : 123456
      // Jurusan : Rekayasa Perangkat Lunak
      // Dwi mendaftarkan mata kuliah Pemrograman Web

      $ms2 = new Mahasiswa("Joko", "654321", "Sistem Informasi");
      $ms2->tampilData();
      $ms2->daftarMatkul("Basis Data.");
      // Nama : Joko
      // NIM : 654321
      // Jurusan : Sistem Informasi
      // Joko mendaftarkan mata kuliah Basis Data.
      ?>
</body>

</html>