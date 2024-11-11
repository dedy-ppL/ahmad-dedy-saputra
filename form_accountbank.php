<?php
class AkunBank {
    private $nomorRekening;
    private $namaCustomer;
    private $saldoAwal;

    public function __construct($nomorRekening, $namaCustomer, $saldoAwal) {
        $this->nomorRekening = $nomorRekening;
        $this->namaCustomer = $namaCustomer;
        $this->saldoAwal = $saldoAwal;
    }

    // Getter dan Setter
    public function getNomorRekening() {
        return $this->nomorRekening;
    }

/*************  ✨ Codeium Command ⭐  *************/
    /**
     * Set the account number for the bank account.
     *
     * @param int $nomorRekening The new account number to be set.
     */
/******  43b5d814-eb5c-45f7-aaa5-5389e3de7124  *******/
    public function setNomorRekening($nomorRekening) {
        $this->nomorRekening = $nomorRekening;
    }

    public function getNamaCustomer() {
        return $this->namaCustomer;
    }

    public function setNamaCustomer($namaCustomer) {
        $this->namaCustomer = $namaCustomer;
    }

    public function getSaldoAwal() {
        return $this->saldoAwal;
    }

    public function setSaldoAwal($saldoAwal) {
        $this->saldoAwal = $saldoAwal;
    }
}

// Membuat objek akun bank
$akun1 = new AkunBank(123, "Neymar", 2000000);

// Simpan data akun dalam array (untuk contoh sederhana)
$dataAkun = [
    ['nomorRekening' => 10, 'namaCustomer' => 'Messi', 'saldo' => 5000000],
    ['nomorRekening' => 70, 'namaCustomer' => 'Ronaldo', 'saldo' => 10000000],
    ['nomorRekening' => $akun1->getNomorRekening(), 'namaCustomer' => $akun1->getNamaCustomer(), 'saldo' => $akun1->getSaldoAwal()]
];

// Tampilkan formulir dan tabel
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Account Bank</title>
</head>
<body>
    <h2>Form Account Bank</h2>
    <form method="post">
        <label for="nomorRekening">Nomor Rekening:</label>
        <input type="text" id="nomorRekening" name="nomorRekening" value="<?php echo $akun1->getNomorRekening(); ?>">

        <label for="namaCustomer">Nama Customer:</label>
        <input type="text" id="namaCustomer" name="namaCustomer" value="<?php echo $akun1->getNamaCustomer(); ?>">

        <label for="saldoAwal">Saldo Awal:</label>
        <input type="text=" id="saldoAwal" name="saldoAwal" value="<?php echo $akun1->getSaldoAwal(); ?>">

        <input type="submit" value="Submit">
    </form>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>No. Rekening</th>
                <th>Customer</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($dataAkun as $akun) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $akun['nomorRekening'] . "</td>";
                echo "<td>" . $akun['namaCustomer'] . "</td>";
                echo "<td>" . number_format($akun['saldo']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>