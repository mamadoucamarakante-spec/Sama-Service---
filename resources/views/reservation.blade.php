<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation | SamaService</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #f4f6f9;
            color: #1e2a3a;
        }

        .top-bar {
            background: #111827;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 14px;
        }

        nav {
            background: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 50px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .logo {
            font-size: 22px;
            font-weight: 800;
            color: #22c55e;
        }

        .nav-links a {
            margin-left: 20px;
            text-decoration: none;
            color: #1e2a3a;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #22c55e;
        }

        .container {
            max-width: 850px;
            margin: 50px auto;
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
        }

        p.subtitle {
            text-align: center;
            color: #6b7280;
            margin-bottom: 30px;
        }

        .alert {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            border-radius: 12px;
            margin-bottom: 20px;
            text-align: center;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 6px;
            font-weight: 600;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            outline: none;
            transition: 0.2s;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #22c55e;
            box-shadow: 0 0 0 3px rgba(34,197,94,0.15);
        }

        textarea {
            resize: none;
        }

        .full {
            grid-column: 1 / -1;
        }

        button {
            width: 100%;
            padding: 14px;
            background: #22c55e;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
        }

        button:hover {
            background: #16a34a;
        }

        footer {
            text-align: center;
            padding: 30px;
            background: #111827;
            color: white;
            margin-top: 60px;
        }

        @media (max-width: 768px) {
            .grid {
                grid-template-columns: 1fr;
            }

            nav {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>

<body>

<div class="top-bar">
    🇸🇳 SamaService – Réservation rapide & services vérifiés
</div>

<nav>
    <div class="logo">SamaService</div>
    <div class="nav-links">
        <a href="/">Accueil</a>
        <a href="/reservation">Réservation</a>
        <a href="/prestataires">Prestataires</a>
    </div>
</nav>

<div class="container">

    <h1>Réserver un service</h1>
    <p class="subtitle">Remplissez le formulaire et un prestataire vous contactera rapidement</p>

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="/reservation" method="POST">
        @csrf

        <div class="grid">

            <div class="form-group">
                <label>Nom complet</label>
                <input type="text" name="nom" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Téléphone</label>
                <input type="tel" name="telephone" required>
            </div>

            <div class="form-group">
                <label>Service</label>
                <select name="service" required>
                    <option value="">Choisir...</option>
                    <option>🧹 Ménage</option>
                    <option>💇 Coiffure</option>
                    <option>💄 Maquillage</option>
                    <option>🔧 Réparation</option>
                </select>
            </div>

            <div class="form-group">
                <label>Date</label>
                <input type="date" name="date" required>
            </div>

            <div class="form-group">
                <label>Heure</label>
                <input type="time" name="heure" required>
            </div>

            <div class="form-group full">
                <label>Adresse / Détails</label>
                <textarea name="message" rows="4"></textarea>
            </div>

            <div class="form-group full">
                <button type="submit">Confirmer la réservation</button>
            </div>

        </div>
    </form>

</div>

<footer>
    © 2026 SamaService - Tous droits réservés
</footer>

</body>
</html>