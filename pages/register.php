<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - AdmasPro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Register for AdmasPro</h1>
    </header>
    <main>
        <section id="register-section">
            <h2>Register</h2>
            <form id="registerForm">
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" placeholder="Nama Anda" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email Anda" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password Anda" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Konfirmasi Password:</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Konfirmasi Password Anda" required>
                </div>
                <button type="submit">Daftar</button>
            </form>
            <p>Sudah punya akun? <a href="login.html">Login di sini</a></p>
        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>
