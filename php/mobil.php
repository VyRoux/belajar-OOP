<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Belajar OOP bersama Mobil</title>
</head>

<body>
      <?php
      class Mobil
      {
            public $warna;
            public $merek;
            public $harga;

            function __construct($warna, $merek, $harga)
            {
                  $this->warna = $warna;
                  $this->merek = $merek;
                  $this->harga = $harga;
            }

            function tampilInfo()
            {
                  echo "Warna : " . $this->warna . "<br>";
                  echo "Merek : " . $this->merek . "<br>";
                  echo "Harga : " . $this->harga . "<br>";
            }

            function jalan()
            {
                  echo "Mobil $this->merek sedang berjalan <br>";
            }

            function break()
            {
                  echo "<br>";
            }
      }

      $mobil1 = new Mobil("Merah", "Toyota", "Rp. 10.000.000");
      $mobil1->tampilInfo();
      $mobil1->jalan();
      $mobil1->break();

      //       Output:
      //       Warna : Hitam
      // Merek : Toyota
      // Harga : Rp. 10.000.000
      // Mobil Toyota sedang berjalan

      $mobil2 = new Mobil("Hitam", "Honda", "Rp. 100.000.000");
      $mobil2->tampilInfo();
      $mobil2->jalan();

      //       output:
      //       Warna : Hitam
      // Merek : Honda
      // Harga : Rp. 100.000.000
      // Mobil Honda sedang berjalan
      ?>
</body>

</html>