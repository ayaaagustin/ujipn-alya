<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aspirasi Sekolah</title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>

<div class="login-box">
    <!-- LOGO SEKOLAH -->
    <div class="logo">
        <img src="{{asset ('logo_smkpn.jpg')}}" alt="Logo SMK PN">
    </div>

    <form action="{{ route('login.process') }}" method="POST">
        @csrf
        <h2>Login Aspirasi Sekolah</h2>
        <p class="subtitle">Wadah Aspirasi Siswa</p>

        <label>Email</label>
        <input type="email" name="email" id="email" placeholder="Masukkan email" required>

        <label>Password</label>
        <input type="password" name="password" id="password" placeholder="Masukkan password" required>

        <div class="options">
            <label>
                <input type="checkbox"> Remember me
            </label>
            <a href="#">Lupa password</a>
        </div>

        <button type="submit">Login</button>
    </form>

    <p class="registe