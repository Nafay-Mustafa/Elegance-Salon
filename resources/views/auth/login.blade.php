<!DOCTYPE html>
<html>
<head>
    <title>Elegance Salon - Login</title>
    <style>
        body{margin:0; font-family:'Poppins', sans-serif; background:#0f0f1a; display:flex; height:100vh; overflow:hidden;}
        .left{width:50%; background:url('/images/salon.png') center/cover no-repeat; position:relative;}
        .left::after{content:''; position:absolute; inset:0; background:linear-gradient(45deg, rgba(0,0,0,0.7), rgba(255,65,108,0.5));}
        .left-text{position:absolute; bottom:50px; left:40px; z-index:2; color:white;}
        .left-text h1{font-size:40px; margin:0;}
        .left-text p{opacity:0.8;}
        .right{width:50%; display:flex; align-items:center; justify-content:center; background:#151525;}
        .card{background:#1e1e32; padding:40px; border-radius:15px; width:380px; box-shadow:0 10px 30px rgba(0,0,0,0.5);}
        .card h2{color:white; text-align:center; margin-bottom:25px;}
        label{color:#aaa; font-size:13px;}
        input{width:100%; padding:12px; margin:8px 0 15px 0; border-radius:8px; border:1px solid #333; background:#2a2a45; color:white; outline:none;}
        input:focus{border-color:#ff416c;}
        .btn-login{width:100%; padding:12px; background: linear-gradient(90deg, #ff416c, #ff4b2b); border:none; border-radius:8px; color:white; font-weight:bold; cursor:pointer; margin-top:10px;}
        .links{display:flex; justify-content:space-between; margin-top:15px; font-size:12px;}
        .links a{color:#ff416c; text-decoration:none;}
    </style>
</head>
<body>
    <div class="left">
        <div class="left-text">
            <h1>Elegance Salon</h1>
            <p>Where Beauty Meets Elegance - Login to book your perfect look</p>
        </div>
    </div>
    <div class="right">
        <div class="card">
            <h2>Welcome Back</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="admin@elegancesalon.com">

                <label>Password</label>
                <input type="password" name="password" required placeholder="••••••••">

                <div style="display:flex; align-items:center; gap:5px; color:#aaa; font-size:12px;">
                    <input type="checkbox" name="remember" style="width:auto; margin:0;"> Remember me
                </div>

                <button type="submit" class="btn-login">LOG IN</button>

                <div class="links">
                    <a href="{{ route('password.request') }}">Forgot password?</a>
                    <a href="{{ route('register') }}">Create account</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>