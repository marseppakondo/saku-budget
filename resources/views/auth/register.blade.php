<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
        }
        input {
            padding: 10px;
            margin-top: 5px;
        }
        button {
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Register</h1>
    <form action="{{ route('register') }}" method="post">
        @csrf

        @if($success = session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif

        <label >Nama</label>
        <input type="text" name="name" required>
        <label >Email</label>
        <input type="email" name="email" required>
        <label >Password</label>
        <input type="password" name="password" required>
        <div style="width: 100%; display: flex; justify-content: space-evenly; align-items: center;">
            <button type="submit">Register</button>
            <a href="/login">Sudah punya akun?Login</a>
        </div>
    </form>

</body>
</html>