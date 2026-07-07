<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestataires | SamaService</title>

    <style>
        * { margin:0; padding:0; box-sizing:border-box; }

        body {
            font-family: Arial, sans-serif;
            background: #f8f9fb;
            color: #1e2a3a;
            line-height: 1.6;
        }

        .top-bar {
            background: #1e2a3a;
            color: white;
            text-align: center;
            padding: 12px;
        }

        nav {
            background: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 40px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            flex-wrap: wrap;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: #27ae60;
        }

        .logo span { color: #1e2a3a; }

        .nav-links {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .nav-links a {
            text-decoration: none;
            color: #1e2a3a;
            font-weight: 600;
            padding: 10px 18px;
            border-radius: 40px;
            transition: 0.3s;
        }

        .nav-links a:hover {
            background: #27ae60;
            color: white;
        }

        .hero {
            background: #1e2a3a;
            color: white;
            text-align: center;
            padding: 60px 20px;
        }

        .hero h1 {
            font-size: 2.5rem;
        }

        .section {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .intro-text, .conclusion-text {
            text-align: center;
            font-size: 1.1rem;
            max-width: 900px;
            margin: 0 auto 40px auto;
            color: #3a4a5a;
        }

        .why-us {
            background: white;
            padding: 40px;
            border-radius: 20px;
            margin-bottom: 50px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        .why-us h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .why-us-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
        }

        .why-item {
            text-align: center;
        }

        .why-item .icon {
            font-size: 2.5rem;
        }

        .why-item h4 {
            color: #27ae60;
            margin: 10px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            text-align: center;
        }

        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .price {
            font-size: 1.3rem;
            font-weight: bold;
            color: #27ae60;
            margin: 10px 0;
        }

        .rating {
            color: #f39c12;
            margin-bottom: 10px;
        }

        .btn-reserver {
            background: #27ae60;
            color: white;
            padding: 10px 20px;
            border-radius: 40px;
            display: inline-block;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            background: #1e2a3a;
            color: white;
            text-align: center;
            padding: 40px;
            margin-top: 60px;
        }
    </style>
</head>

<body>

<div class="top-bar">
    🇸🇳 SamaService – Prestataires vérifiés | Paiement sécurisé
</div>

<nav>
    <div class="logo"><span>Sama</span>Service</div>
    <div class="nav-links">
        <a href="/">Accueil</a>
        <a href="/reservation">Réservation</a>
        <a href="/prestataires">Prestataires</a>
        <a href="/contact.html">Contact</a>
    </div>
</nav>

<section class="hero">
    <h1>Nos Prestataires</h1>
</section>

<section class="section">

    <div class="intro-text">
        Découvrez les meilleurs professionnels de SamaService, soigneusement sélectionnés pour leur expertise, leur sérieux et leur sens du service.
        Chaque prestataire est évalué et noté par de vrais clients afin de garantir une expérience fiable, transparente et de haute qualité.
        Que ce soit pour le ménage, la beauté ou les réparations, nous vous mettons en relation avec des experts proches de chez vous, disponibles et compétents.
    </div>

    <div class="why-us">
        <h2>Pourquoi choisir SamaService ?</h2>

        <div class="why-us-grid">

            <div class="why-item">
                <div class="icon">✅</div>
                <h4>Prestataires vérifiés</h4>
                <p>
                    Chaque prestataire est rigoureusement sélectionné selon des critères de compétence, de fiabilité et d’expérience.
                    Un contrôle qualité est effectué pour garantir un service professionnel.
                </p>
            </div>

            <div class="why-item">
                <div class="icon">⭐</div>
                <h4>Avis clients authentiques</h4>
                <p>
                    Les avis proviennent uniquement de clients réels ayant utilisé nos services,
                    afin de vous aider à faire un choix fiable et transparent.
                </p>
            </div>

            <div class="why-item">
                <div class="icon">🔒</div>
                <h4>Paiement sécurisé</h4>
                <p>
                    Les paiements sont protégés via Wave, Orange Money ou carte bancaire,
                    garantissant des transactions sûres et sans risque.
                </p>
            </div>

            <div class="why-item">
                <div class="icon">⏱️</div>
                <h4>Intervention rapide</h4>
                <p>
                    Nos prestataires interviennent rapidement selon votre localisation,
                    pour répondre efficacement à vos besoins urgents ou quotidiens.
                </p>
            </div>

        </div>
    </div>

    <h2 class="section-title">Prestataires disponibles</h2>

    <div class="grid">

        <div class="card">
            <img src="<?php echo e(asset('images/fatou.png')); ?>" alt="Fatou">
            <div class="card-content">
                <h3>Fatou</h3>
                <p>🧹 Ménage professionnel</p>
                <div class="price">10 000 FCFA</div>
                <div class="rating">★★★★★ (15 avis)</div>
                <a href="/reservation" class="btn-reserver">Réserver</a>
            </div>
        </div>

        <div class="card">
            <img src="<?php echo e(asset('images/amy.png')); ?>" alt="Amy">
            <div class="card-content">
                <h3>Amy</h3>
                <p>💄 Maquillage professionnel</p>
                <div class="price">15 000 FCFA</div>
                <div class="rating">★★★★★ (23 avis)</div>
                <a href="/reservation" class="btn-reserver">Réserver</a>
            </div>
        </div>

        <div class="card">
            <img src="<?php echo e(asset('images/marieme.png')); ?>" alt="Marième">
            <div class="card-content">
                <h3>Marième</h3>
                <p>💇 Coiffure professionnelle</p>
                <div class="price">12 000 FCFA</div>
                <div class="rating">★★★★★ (32 avis)</div>
                <a href="/reservation" class="btn-reserver">Réserver</a>
            </div>
        </div>

        <div class="card">
            <img src="<?php echo e(asset('images/omar.png')); ?>" alt="Omar">
            <div class="card-content">
                <h3>Omar</h3>
                <p>🔧 Réparation & bricolage</p>
                <div class="price">8 000 FCFA</div>
                <div class="rating">★★★★☆ (9 avis)</div>
                <a href="/reservation" class="btn-reserver">Réserver</a>
            </div>
        </div>

    </div>

    <div class="conclusion-text">
        Avec SamaService, vous bénéficiez d’un service moderne, fiable et sécurisé qui vous simplifie la vie au quotidien.
        Notre objectif est de vous connecter aux meilleurs professionnels près de chez vous, en toute confiance.
    </div>

</section>

<footer>
    © 2026 SamaService — Tous droits réservés
</footer>

</body>
</html><?php /**PATH C:\xampp\htdocs\samaservice\resources\views/prestataires.blade.php ENDPATH**/ ?>