<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Validasi PHP</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>

<?php
// Mulai sesi untuk menyimpan pesan error
session_start();

// Inisialisasi variabel
$nameErr = $emailErr = $genderErr = "";
$name = $email = $website = $comment = $gender = "";

// Periksa apakah formulir telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi input nama
    if (empty($_POST["name"])) {
        $nameErr = "Nama harus diisi";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Validasi input email
    if (empty($_POST["email"])) {
        $emailErr = "Email harus diisi";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Format email tidak valid";
        }
    }

    // Validasi input gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender harus dipilih";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    // Simpan pesan error dalam session
    $_SESSION["nameErr"] = $nameErr;
    $_SESSION["emailErr"] = $emailErr;
    $_SESSION["genderErr"] = $genderErr;

    // Jika tidak ada error, proses data formulir
    if (empty($nameErr) && empty($emailErr) && empty($genderErr)) {
        // Lakukan sesuatu dengan data formulir, misal: simpan ke database
        echo "<h2>Data Anda:</h2>";
        echo "Nama: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Website: " . htmlspecialchars($_POST["website"]) . "<br>"; // Mengambil data website dari input
        echo "Komentar: " . htmlspecialchars($_POST["comment"]) . "<br>"; // Mengambil data komentar dari input
        echo "Gender: " . $gender;
    }
}

// Fungsi untuk membersihkan input dari karakter berbahaya
function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website: <input type="text" name="website" value="<?php echo htmlspecialchars($website);?>">
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo htmlspecialchars($comment);?></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo "checked";?>>Female
    <input type="radio" name="gender" value="male" <?php if ($gender == "male") echo "checked";?>>Male
    <input type="radio" name="gender" value="other" <?php if ($gender == "other") echo "checked";?>>Other
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
