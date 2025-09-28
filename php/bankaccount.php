<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Belajar OOP bersama Bank Account</title>
</head>

<body>
      <?php
      class BankAccount
      {
            public $namaPemilik;
            public $saldo;

            function __construct($namaPemilik, $saldo = 0)
            {
                  $this->namaPemilik = $namaPemilik;
                  $this->saldo = $saldo;
            }

            function tampilSaldo()
            {
                  echo "Nama pemilik : " . $this->namaPemilik . "<br>";
                  echo "Saldo sekarang : " . $this->saldo . "<br>";
            }

            function setorUang($jumlah)
            {
                  $this->saldo += $jumlah;
                  echo "Setor: " . $jumlah . "<br>";
                  echo "Saldo sekarang " . $this->saldo . "<br>";
            }

            function tarikUang($jumlah)
            {
                  // $this->saldo -= $jumlah;
                  echo "Tarik: " . $jumlah . "<br>";

                  if ($this->saldo >= $jumlah) {
                        $this->saldo -= $jumlah;
                        echo "Saldo sekarang: " . $this->saldo . "<br>";
                  } else {
                        echo "Saldo tidak cukup untuk tarik: " . $this->saldo . "<br>";
                  }
            }

            function sisa()
            {
                  echo "Saldo sekarang: " . $this->saldo . "<br>";
            }

            function kosong()
            {
                  echo "<br>";
            }
      }


      $akun1 = new BankAccount("Joko");
      $akun1->tampilSaldo();
      $akun1->kosong();
      $akun1->setorUang(50000);
      $akun1->kosong();
      $akun1->tarikUang(30000);
      $akun1->kosong();
      $akun1->kosong();

      $akun2 = new BankAccount("Dontol");
      $akun2->tampilSaldo();
      $akun2->kosong();
      $akun2->setorUang(1000);
      $akun2->kosong();
      $akun2->tarikUang(2000);
      $akun2->kosong();


      ?>
</body>

</html>