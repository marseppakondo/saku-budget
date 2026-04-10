<div>
    <h1>Selamat datang, {{ Auth::user()->name }}</h1>
        <a href="{{ route('logout') }}" style="
            padding-left: 25px; 
            padding-right: 25px; 
            padding-top: 12px; 
            padding-bottom: 12px; 
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border: none;
            cursor: pointer;">Logout</a>
</div>
