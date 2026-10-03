@extends('user.headerfooter')
@section('content')
<style>
.about-hero{
    text-align:center; padding:80px 0 30px;
    background: #f8f9ff;
}
.about-hero h1{
    font-family: 'Playfair Display', serif; font-style: italic;
    font-size:48px; color:#0a1128;
}
.about-story{
    display:flex; gap:40px; align-items:center;
    max-width:1100px; margin:50px auto; padding:20px;
}
.story-img{ flex:1; }
.story-img img{
    width:100%; border-radius:20px 20px 20px 0;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}
.story-text{ flex:1; }
.story-text h2{
    font-family:'Playfair Display', serif; font-style:italic;
    color:#0a1128; font-size:36px;
}
.story-text p{ color:#444; line-height:1.8; margin-top:15px; }

.why-section{
    background:white; color:white; padding:60px 20px; margin-top:40px;
}
.why-grid{
    display:grid; grid-template-columns: repeat(3, 1fr);
    gap:25px; max-width:1100px; margin:30px auto;
}
.why-card{
    background:#343a40; border-radius:20px; padding:25px;
    position:relative; overflow:hidden; text-align:left;
}
.why-card h3{ color:#fff; font-size:20px; margin-bottom:10px; }
.why-card p{ color:#d0d5e8; font-size:14px; line-height:1.6; }
.why-card .icon{
    background:#8b1a2b; width:45px; height:45px;
    border-radius:50%; display:flex; align-items:center; justify-content:center;
    margin-bottom:15px; font-size:20px;
}
.stats{
    display:flex; justify-content:space-around; text-align:center;
    max-width:900px; margin:60px auto;
}
.stats h2{ color:#8b1a2b; font-size:36px; font-weight:bold; }
.stats p{ color:#0a1128; }
</style>

<div class="about-hero">
    <h1>About Elegance Salon</h1>
    <p>Where Beauty Meets Elegance</p>
</div>

<div class="about-story">
    <div class="story-img">
        <img src="images/salon.png" alt="salon">
    </div>
    <div class="story-text">
        <h2>Our Story</h2>
        <p>
        <b>Elegance Salon</b> was started with a dream to make every bride feel confident and beautiful on her special day. We believe makeup is not just color, it's confidence.
        </p>
        <p>
        Since 2018, we have served 5000+ brides for Nikkah, Mayoun, Mehndi, Baraat and Valima. Our expert artists use only high-quality, original products for a long-lasting, glowing look.
        </p>
        <a href="/menu" style="background:#8b1a2b; color:white; padding:10px 25px; border-radius:25px; text-decoration:none; display:inline-block; margin-top:20px;">View Our Work</a>
    </div>
</div>

<div class="why-section">
    <h2 style="text-align:center; font-family:'Playfair Display', serif; font-style:italic; font-size:38px;">Why Choose Us</h2>
    <div class="why-grid">
        <div class="why-card">
            <div class="icon">💄</div>
            <h3>Expert Artists</h3>
            <p>Our certified makeup artists have 8+ years of experience in bridal glam, with soft to heavy looks.</p>
        </div>
        <div class="why-card">
            <div class="icon">✨</div>
            <h3>Premium Products</h3>
            <p>We use only Huda Beauty, MAC, NARS and Charlotte Tilbury for a flawless, skin-friendly finish.</p>
        </div>
        <div class="why-card">
            <div class="icon">👰</div>
            <h3>Custom Bridal Looks</h3>
            <p>Every face is different. We design Mayoun, Mehndi, Nikkah, Baraat & Valima looks according to your dress and face.</p>
        </div>
    </div>
</div>

<div class="stats">
    <div><h2>5000+</h2><p>Happy Brides</p></div>
    <div><h2>8+</h2><p>Years Experience</p></div>
    <div><h2>100%</h2><p>Original Products</p></div>
</div>

@endsection
</style>