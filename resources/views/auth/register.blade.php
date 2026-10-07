<!DOCTYPE html>
<html>
<head>
    <title>Elegance Salon - Register</title>
    <style>
        body{margin:0; font-family:'Poppins', sans-serif; background:#0f0f1a; display:flex; height:100vh; overflow:hidden;}
        .left{width:50%; background:url('/images/salon.png') center/cover no-repeat; position:relative;}
        .left::after{content:''; position:absolute; inset:0; background:linear-gradient(45deg, rgba(0,0,0,0.7), rgba(255,65,108,0.5));}
        .left-text{position:absolute; bottom:50px; left:40px; z-index:2; color:white;}
        .left-text h1{font-size:40px; margin:0;}
        .left-text p{opacity:0.8; max-width:350px;}
        .right{width:50%; display:flex; align-items:center; justify-content:center; background:#151525; overflow-y:auto;}
        .card{background:#1e1e32; padding:35px 40px; border-radius:15px; width:380px; box-shadow:0 10px 30px rgba(0,0,0,0.5); margin:20px 0;}
        .card h2{color:white; text-align:center; margin-bottom:20px;}
        label{color:#aaa; font-size:13px;}
        input{width:100%; padding:11px; margin:6px 0 4px 0; border-radius:8px; border:1px solid #333; background:#2a2a45; color:white; outline:none;}
        input:focus{border-color:#ff416c;}
        .error-text{color:#ff6b6b; font-size:11px; display:block; margin-bottom:10px;}
        .btn-register{width:100%; padding:12px; background: linear-gradient(90deg, #ff416c, #ff4b2b); border:none; border-radius:8px; color:white; font-weight:bold; cursor:pointer; margin-top:10px;}
        .links{text-align:center; margin-top:15px; font-size:12px; color:#aaa;}
        .links a{color:#ff416c; text-decoration:none; font-weight:bold;}
    </style>
</head>
<body>
    <div class="left">
        <div class="left-text">
            <h1>Join Elegance</h1>
            <p>Create your account and get 40% off on our Glow Up Packages. Book your bridal look today.</p>
        </div>
    </div>
    <div class="right">
        <div class="card">
            <h2>Create Account</h2>
            <form method="POST" action="{{ route('register') }}" id="registerForm">
                @csrf
                <label>Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required placeholder="Your Name">
                @error('name') <span class="error-text">{{ $message }}</span> @enderror

                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="you@example.com">
                @error('email') <span class="error-text">{{ $message }}</span> @enderror

                <label>Password</label>
                <input type="password" id="password" name="password" required minlength="8" placeholder="••••••••">
                <span id="passError" class="error-text" style="display:none;">Password must be at least 8 characters</span>
                @error('password') <span class="error-text">{{ $message }}</span> @enderror

                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" required placeholder="••••••••">

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div style="color:#aaa; font-size:11px; margin:10px 0;">
                    <input type="checkbox" name="terms" id="terms" style="width:auto;"> I agree to Terms and Privacy Policy
                </div>
                @endif

                <button type="submit" class="btn-register">REGISTER</button>

                <div class="links">
                    Already registered? <a href="{{ route('login') }}">Login here</a>
                </div>
            </form>
        </div>
    </div>

<script>
const passInput = document.getElementById('password');
const passError = document.getElementById('passError');
const form = document.getElementById('registerForm');

passInput.addEventListener('input', function(){
    if(this.value.length > 0 && this.value.length < 8){
        passError.style.display = 'block';
        this.style.border = '1px solid #ff6b6b';
    } else {
        passError.style.display = 'none';
        this.style.border = '1px solid #333';
    }
});

form.addEventListener('submit', function(e){
    if(passInput.value.length < 8){
        e.preventDefault();
        passError.style.display = 'block';
        passInput.style.border = '1px solid #ff6b6b';
        passInput.focus();
    }
});
</script>

</body>
</html>