<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact | SamaService</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Segoe UI', Arial, sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background: linear-gradient(135deg, #27ae60, #1e2a3a);
    padding:20px;
}

/* CONTAINER */
.container{
    width:100%;
    max-width:950px;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
}

/* CARD */
.card{
    background: rgba(255,255,255,0.12);
    backdrop-filter: blur(15px);
    border:1px solid rgba(255,255,255,0.2);
    border-radius:20px;
    padding:30px;
    color:white;
    box-shadow:0 20px 50px rgba(0,0,0,0.25);
    transition:0.3s;
}

.card:hover{
    transform: translateY(-5px);
}

/* TITRES */
h1{
    font-size:1.8rem;
    margin-bottom:10px;
}

p{
    opacity:0.85;
    font-size:0.95rem;
    margin-bottom:20px;
}

/* CONTACT ITEMS */
.item{
    display:flex;
    align-items:center;
    gap:10px;
    padding:12px;
    margin-bottom:12px;
    border-radius:12px;
    background: rgba(255,255,255,0.08);
    transition:0.3s;
}

.item:hover{
    background: rgba(255,255,255,0.18);
}

.item a{
    color:white;
    text-decoration:none;
    font-weight:500;
}

/* FORM */
input, textarea{
    width:100%;
    padding:12px;
    margin-bottom:12px;
    border:none;
    border-radius:10px;
    outline:none;
    background: rgba(255,255,255,0.9);
    color:#1e2a3a;
}

button{
    width:100%;
    padding:12px;
    border:none;
    border-radius:10px;
    background:#27ae60;
    color:white;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#1f8b4a;
    transform: scale(1.02);
}

/* BOUTON ACCUEIL */
.btn-home{
    display:block;
    text-align:center;
    margin-top:15px;
    padding:12px;
    border-radius:12px;
    text-decoration:none;
    color:white;
    font-weight:600;
    background: rgba(255,255,255,0.10);
    border:1px solid rgba(255,255,255,0.25);
    transition:0.3s;
    position:relative;
    overflow:hidden;
}

.btn-home:hover{
    background: rgba(255,255,255,0.20);
    transform: translateY(-2px);
}

/* effet lumière */
.btn-home::before{
    content:"";
    position:absolute;
    top:0;
    left:-100%;
    width:100%;
    height:100%;
    background: linear-gradient(120deg, transparent, rgba(255,255,255,0.3), transparent);
    transition:0.5s;
}

.btn-home:hover::before{
    left:100%;
}

/* RESPONSIVE */
@media(max-width:768px){
    .container{
        grid-template-columns:1fr;
    }
}
</style>
</head>

<body>

<div class="container">

    <!-- CONTACT INFOS -->
    <div class="card">
        <h1>📞 Contact</h1>
        <p>Nous sommes disponibles pour répondre à toutes vos demandes rapidement.</p>

        <div class="item">📧 <a href="mailto:samaservice@gmail.com">samaservice@gmail.com</a></div>
        <div class="item">📱 <a href="tel:+221777821701">+221 77 782 17 01</a></div>
        <div class="item">💬 <a href="https://wa.me/221777821701" target="_blank">WhatsApp direct</a></div>

        <p style="margin-top:20px;font-size:0.8rem;">
            🇸🇳 Sénégal – Disponible 7j/7
        </p>

        <!-- BOUTON ACCUEIL -->
        <a href="/" class="btn-home">← Retour à l’accueil</a>
    </div>

    <!-- FORMULAIRE -->
    <div class="card">
        <h1>✉️ Envoyer un message</h1>
        <p>Remplissez le formulaire ci-dessous</p>

        <form>
            <input type="text" placeholder="Votre nom" required>
            <input type="email" placeholder="Votre email" required>
            <textarea rows="5" placeholder="Votre message..." required></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </div>

</div>

</body>
</html>