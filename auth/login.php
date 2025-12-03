<?php
require '../function/koneksi.php';

$error = '';
if(isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $cek = query("SELECT * FROM user WHERE username = '$username' AND password = '$password' ");

    if($cek) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $cek[0]['role'];
        header('location:../admin/');
    }else{
        $error = 'Username atau password salah';
    }
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk & Daftar Event</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* --- CSS Reset & Dasar --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* --- Container Utama --- */
        .container {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.15), 0 10px 10px rgba(0,0,0,0.12);
            position: relative;
            overflow: hidden;
            width: 900px;
            max-width: 100%;
            min-height: 600px;
        }

        /* --- Form Container --- */
        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0 50px;
            background-color: white;
            text-align: center;
        }

        .form-container h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
        }
        
        .form-container span {
            font-size: 12px;
            color: #666;
            margin-bottom: 20px;
            display: block;
        }

        /* Input Styling */
        .input-group {
            position: relative;
            width: 100%;
            margin-bottom: 15px;
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 8px 15px;
            display: flex;
            align-items: center;
            border-left: 4px solid #0056b3;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .input-group i {
            color: #aaa;
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .input-group input {
            border: none;
            outline: none;
            width: 100%;
            padding: 8px 0;
            font-size: 14px;
        }

        /* --- Button Styling --- */
        button {
            border-radius: 5px;
            border: none;
            background-color: #0044cc;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            cursor: pointer;
            margin-top: 15px;
            box-shadow: 0 4px 10px rgba(0, 68, 204, 0.3);
        }

        button:active { transform: scale(0.95); }
        button:focus { outline: none; }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
            border: 1px solid #fff;
            box-shadow: none;
        }
        
        button.ghost:hover { background-color: rgba(255,255,255,0.2); }

        .forgot-pass {
            color: #666;
            font-size: 12px;
            text-decoration: none;
            margin: 10px 0 20px;
            display: block;
            align-self: flex-end;
        }

        /* --- Animasi Sliding Panel --- */
        .sign-in-container { left: 0; width: 50%; z-index: 2; }
        .sign-up-container { left: 0; width: 50%; opacity: 0; z-index: 1; }

        .container.right-panel-active .sign-in-container { transform: translateX(100%); }
        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {
            0%, 49.99% { opacity: 0; z-index: 1; }
            50%, 100% { opacity: 1; z-index: 5; }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container { transform: translateX(-100%); }

        .overlay {
            background: linear-gradient(135deg, #0044cc, #002a80);
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay { transform: translateX(50%); }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left { transform: translateX(-20%); }
        .container.right-panel-active .overlay-left { transform: translateX(0); }
        .overlay-right { right: 0; transform: translateX(0); }
        .container.right-panel-active .overlay-right { transform: translateX(20%); }

        .overlay-panel h2 { font-size: 28px; margin-bottom: 10px; font-weight: bold; }
        .overlay-panel p { font-size: 14px; margin-bottom: 30px; line-height: 1.5; }

        /* Hiasan Blob */
        .blob {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            z-index: 0;
            pointer-events: none;
        }
        .blob-1 { width: 200px; height: 200px; top: -50px; left: -50px; }
        .blob-2 { width: 300px; height: 300px; bottom: -100px; right: -50px; }

    </style>
</head>
<body>

<div class="container" id="container">
    
    <div class="form-container sign-up-container">
        <form action="#">
            <h1>Buat Akun Baru</h1>
            <span>Isi form pendaftaran untuk bisa mengiklankan event anda</span>
            
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Nama Lengkap" required />
            </div>

            <div class="input-group">
                <i class="fa-regular fa-user"></i>
                <input type="text" placeholder="Username" required />
            </div>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Alamat Email" required />
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Kata Sandi" required />
            </div>

            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Konfirmasi Kata Sandi" required />
            </div>
            
            <button type="submit">DAFTAR SEKARANG</button>
        </form>
    </div>

    <div class="form-container sign-in-container">
        <form method="post">
            <h1>Silakan Masuk</h1>
            <span>Masukkan username dan password untuk mulai mengiklankan event anda</span>
            <div style="color : red"><?= $error ?></div>
            <div class="input-group">
                <i class="fas fa-user-circle"></i>
                <input type="text" name="username" placeholder="Username" required />
            </div>

            <div class="input-group">
                <i class="fas fa-key"></i>
                <input type="password" name="password" placeholder="Kata Sandi" required />
            </div>
            
            <a href="#" class="forgot-pass">Lupa Kata Sandi?</a>
            <button type="submit" name="login">MASUK</button>
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="blob blob-1"></div>
            <div class="blob blob-2"></div>

            <div class="overlay-panel overlay-left">
                <h2>Sudah Punya Akun?</h2>
                <p>Silakan masuk untu   k mulai mengiklankan event anda.</p>
                <button class="ghost" id="signIn">Masuk Disini</button>
            </div>

            <div class="overlay-panel overlay-right">
                <h2>Selamat Datang di Event U</h2>
                <p>Belum punya akun? Silahkan daftar untuk mulai mengiklankan event yang kamu miliki.</p>
                <button class="ghost" id="signUp">Daftar Akun</button>
            </div>
        </div>
    </div>
</div>

<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>

</body>
</html> 