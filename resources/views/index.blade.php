<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio</title>
<link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
</head>

<body>

<header class="tete">
 <center><h2 class="logo">UNV<span>Tech</span></h2></center>
</header>


<section class="hero">

<div class="hero-text">
<h1>Je suis un Music Producer</h1>
<h2>Victor Umoneka Numbi</h2>

<p><strong>J'ai des competences en Musique qui sont les suivantes:</strong></p>
 <ul>
    <li>
        J'ai une metrise en ce qui concerne la batterie (Drum)
    </li>
    <li>
        Je suis aussi arrangeur de chant
    </li>
    <li>
        chantre et compositeur
    </li>
    <li>
        J'ai aussi une connaissance dans les instrument harmonieux
    </li>
 </ul>

</div>

<div class="hero-img">
<img src="bf1136249245caf99f1ceefa1563a8f8.jpg">
</div>

</section>



<section class="about">

<div class="about-img">
<img src="be18407e6511b3d372a060887627438c.jpg">
</div>

<div class="about-text">
<h2><span>BEGINNER</span> WEB DEVELOPPER</h2>

<p>
 Etant debutant dans le web j'ai une certaine maitrise en ce qui concerne le  Front-end et les outils utilisé sont:
</p><br>

<ul class="photoLogo">
    <li> HTLM <br><img src="2ce8bdbe29a864ab82373d407ce7ec6f.jpg" width="200" height="200"></li><br>
    <li> CSS <br><img src="17650db87fb5752364a9a4b6885290ac.jpg" width="200" height="200"></li><br>
    <li> JS <br><img src="0e4fdce8ac22e09688c580e5bc4dcd7d.jpg" width="200" height="200"></li>
</ul>

</div>

</section>


<section class="services">

<h2 class="title">OUR <span>SERVICES</span></h2>

<div class="service-box">

<div class="card">
<h3>Web Developpement</h3>
<p>Front-end</p><br>
<br>
<img src="cc8b21651a5bc415f798fc55f81e3103.jpg" width="150" height="150">
</div>

<div class="card">
<h3>Mastering Audio</h3>
<p>Fl Studio</p><br>
<br>
<img src="84d3692135c0df58790fa490aac40adb.jpg"width="150" height="150">

</div>

<div class="card">
<h3>Photo Design</h3>
<p>PhotoShop</p><br>
<br>
<img src="d7897a8c5792a2f7a908e4aea8019e8f.jpg" width="150" height="150">
</div>

</div>

</section>

<section id="projets">
    <h2>Mes Projets</h2>
@foreach($projets as $projet)

    <div>
        <h3>{{ $projet->titre }}</h3>
        <p>{{ $projet->description }}</p>

        <a href="/projets/{{ $projet->id }}/edit"><button>Modifier</button></a>
       <form action="/projets/{{ $projet->id }}/delete" method="POST">
    @csrf
    <button type="submit" id="deleteBtn">Supprimer</button>
</form>
    </div>
@endforeach

</section>
<section id="contact">
    <h2>Formulaire de contact</h2>
    <form id="contactForm" method="POST" action="/contact">
        @csrf
        <label>Nom</label>
        <input type="text" name="nom" placeholder="Votre Nom">

        <label>Email</label>
        <input type="email" name="email" placeholder="Votre Email">

        <label>Message</label>
        <textarea name="message" rows="5" placeholder="Votre Message"></textarea>

        <button type="submit">Envoyer</button>
    </form>
</section>     
</body>
<footer>

<h3>Victor Umoneka</h3>

<p>Développeur Web | Passionné de technologie et de musique</p>

<div class="socials">
<a href="#">Facebook</a>
<a href="#">GitHub</a>
<a href="#">LinkedIn</a>
</div>

<p class="copy">
© 2026 Tous droits réservés
</p>
<a href="mailto:victorumoneka000@gmail.com">victorumoneka000</a>
</footer>
</html>