<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SamaService | Accueil</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI', Arial, sans-serif;
}

body{
    background:#f5f7fb;
    color:#1e2a3a;
}

/* TOP BAR */
.top-bar{
    background:#1e2a3a;
    color:white;
    text-align:center;
    padding:10px;
    font-size:14px;
}

/* NAV */
nav{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:18px 40px;
    background:white;
    box-shadow:0 2px 12px rgba(0,0,0,0.06);
    flex-wrap:wrap;
}

.logo{
    font-size:1.9rem;
    font-weight:800;
    color:#27ae60;
}
.logo span{color:#1e2a3a;}

.nav-links{
    display:flex;
    gap:15px;
}

.nav-links a{
    text-decoration:none;
    color:#1e2a3a;
    font-weight:600;
    padding:8px 14px;
    border-radius:30px;
    transition:0.3s;
}

.nav-links a:hover{
    background:#27ae60;
    color:white;
}

/* HERO */
.hero{
    background:
    linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),
    url('https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg') center/cover;
    color:white;
    text-align:center;
    padding:120px 20px;
}

.hero h1{
    font-size:3rem;
    max-width:850px;
    margin:auto;
}

.hero p{
    font-size:1.2rem;
    max-width:750px;
    margin:15px auto 0;
    opacity:0.9;
}

/* QUI SOMMES-NOUS */
.presentation{
    max-width:900px;
    margin:70px auto;
    padding:0 20px;
    text-align:center;
}

.presentation h2{
    font-size:2.3rem;
    margin-bottom:20px;
}

.presentation p{
    color:#4a5a6a;
    font-size:1.05rem;
    line-height:1.8;
    margin-bottom:15px;
}

/* FEATURES */
.features{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:25px;
    max-width:1100px;
    margin:50px auto;
    padding:0 20px;
}

.feature{
    background:white;
    padding:30px;
    border-radius:18px;
    text-align:center;
    box-shadow:0 8px 25px rgba(0,0,0,0.05);
}

.feature h3{
    color:#27ae60;
    margin-bottom:8px;
}

/* SERVICES */
.section{
    max-width:1200px;
    margin:auto;
    padding:40px 20px;
}

.title{
    text-align:center;
    font-size:2.2rem;
    margin-bottom:30px;
}

.services{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(160px,1fr));
    gap:20px;
}

.service{
    background:white;
    padding:25px;
    text-align:center;
    border-radius:18px;
    box-shadow:0 10px 25px rgba(0,0,0,0.05);
    transition:0.3s;
    font-weight:600;
}

.service:hover{
    background:#27ae60;
    color:white;
    transform:translateY(-8px);
}

/* CTA */
.cta{
    background:linear-gradient(135deg,#27ae60,#1f8b4a);
    color:white;
    text-align:center;
    padding:70px 20px;
    margin-top:60px;
}

.cta h2{
    font-size:2.5rem;
}

.cta p{
    opacity:0.9;
    margin-top:10px;
}

.cta a{
    margin-top:20px;
    display:inline-block;
    background:white;
    color:#27ae60;
    padding:12px 25px;
    border-radius:30px;
    font-weight:bold;
    text-decoration:none;
}

/* FOOTER */
footer{
    background:#1e2a3a;
    color:white;
    text-align:center;
    padding:30px;
}

footer a{
    color:#ccc;
    margin:0 10px;
    text-decoration:none;
}

footer a:hover{
    color:#27ae60;
}

/* RESPONSIVE */
@media(max-width:768px){
    nav{
        flex-direction:column;
        gap:10px;
        text-align:center;
    }

    .hero h1{
        font-size:2.2rem;
    }
}
</style>
</head>

<body>

<!-- TOP BAR -->
<div class="top-bar">
🇸🇳 SamaService – Trouvez des prestataires fiables près de chez vous
</div>

<!-- NAV -->
<nav>
    <div class="logo"><span>Sama</span>Service</div>

    <div class="nav-links">
        <a href="/">Accueil</a>
        <a href="/prestataires">Prestataires</a>
        <a href="/reservation">Réservation</a>
        <a href="/contact">Contact</a>
    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <h1>Des services à domicile rapides et fiables au Sénégal</h1>
    <p>Ménage, coiffure, beauté, plomberie, électricité et bien plus. Réservez un prestataire qualifié en quelques clics.</p>
</section>

<!-- QUI SOMMES-NOUS -->
<section class="presentation">

    <h2>Qui sommes-nous ?</h2>

    <p>
        SamaService est une plateforme digitale qui connecte les clients avec des prestataires de services qualifiés et vérifiés au Sénégal.
    </p>

    <p>
        Nous avons constaté que trouver rapidement un professionnel fiable peut être difficile. C’est pourquoi nous avons créé une solution simple, rapide et sécurisée pour faciliter la vie quotidienne.
    </p>

    <p>
        Notre objectif est de vous permettre d’accéder facilement à des prestataires dans différents domaines : ménage, coiffure, beauté, plomberie, électricité et bricolage.
    </p>

    <p>
        Chaque prestataire est sélectionné selon des critères stricts de qualité, d’expérience et de fiabilité afin de garantir un service satisfaisant.
    </p>

    <p>
        Grâce à notre plateforme, vous pouvez réserver un service en quelques clics et bénéficier d’une intervention rapide à domicile.
    </p>

    <p>
        SamaService est plus qu’un service : c’est une solution moderne pour améliorer le quotidien et valoriser les compétences locales.
    </p>

</section>

<!-- FEATURES -->
<div class="features">

    <div class="feature">
        <h3>✔ Qualité garantie</h3>
        <p>Prestataires vérifiés et évalués</p>
    </div>

    <div class="feature">
        <h3>⚡ Rapide</h3>
        <p>Réservation en quelques secondes</p>
    </div>

    <div class="feature">
        <h3>🔒 Sécurisé</h3>
        <p>Paiement fiable et protégé</p>
    </div>

</div>

<!-- SERVICES -->
<section class="section">

<h2 class="title">Nos services</h2>

<div class="services">

    <div class="service">🧹 Ménage</div>
    <div class="service">💇 Coiffure</div>
    <div class="service">💄 Beauté</div>
    <div class="service">🔧 Plomberie</div>
    <div class="service">⚡ Électricité</div>
    <div class="service">🧱 Bricolage</div>

</div>

</section>

<!-- CTA -->
<div class="cta">

    <h2>Prêt à trouver un prestataire ?</h2>
    <p>Réservez maintenant et simplifiez votre quotidien</p>

    <a href="/reservation">Réserver maintenant</a>

</div>

<!-- FOOTER -->
<footer>

    <div>
        <a href="/">Accueil</a>
        <a href="/prestataires">Prestataires</a>
        <a href="/reservation">Réservation</a>
        <a href="/contact">Contact</a>
    </div>

    <p>📞 77 782 17 01 | 📧 samaservice@sénégal.sn</p>
    <p>&copy; 2026 SamaService</p>

</footer>

</body>
</html><?php /**PATH C:\xampp\htdocs\samaservice\resources\views/accueil.blade.php ENDPATH**/ ?>