<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        /* CSS untuk tampilan menu */
        #menu {
            display: none;
            margin-bottom: 20px;
        }

        /* CSS untuk tombol */
        button {
            background-color: blue; /* Warna biru */
            color: white; /* Teks putih */
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: darkblue; /* Warna lebih gelap saat hover */
        }

        /* Style untuk form */
        form {
            margin-top: 20px;
        }

        .message {
            margin-top: 10px;
            color: red; /* Warna teks error */
        }

        .success {
            color: green; /* Warna teks sukses */
        }
    </style>
</head>
<body>
    <input type="checkbox" id="toggleMenu" style="display:none;">
    <label for="toggleMenu" style="cursor:pointer; background-color: blue; color: white; padding: 10px; border: none;">Toggle Menu</label>
    <div id="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

    <h1>Form Login</h1>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>

    <div class="message">
        <?php
        // Proses login di sini
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Ubah nilai berikut dengan yang diinginkan
            $valid_username = "user123"; // Ganti dengan username yang diinginkan
            $valid_password = "securepass"; // Ganti dengan password yang diinginkan

            if ($username === $valid_username && $password === $valid_password) {
                echo "<div class='success'>Login berhasil! Selamat datang, $username.</div>";
            } else {
                echo "<div class='error'>Username atau password salah.</div>";
            }
        }
        ?>
    </div>

    <script>
        // Script untuk toggle menu
        const toggleButton = document.getElementById('toggleMenu');
        const menu = document.getElementById('menu');

        toggleButton.addEventListener('click', () => {
            menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
        });
    </script>
</body>
</html>
