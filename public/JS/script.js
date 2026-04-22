const form = document.getElementById("contactForm");

form.addEventListener("submit", function(e) {

    e.preventDefault();

    let nom = document.getElementById("nom").value.trim();
    let email = document.getElementById("email").value.trim();
    let message = document.getElementById("message").value.trim();
    let erreur = document.getElementById("erreur");

    erreur.style.color = "red";

    if(nom === ""){
        erreur.textContent = "Veuillez entrer votre nom";
        return;
    }

    if(email === ""){
        erreur.textContent = "Veuillez entrer votre email";
        return;
    }

    if(!email.includes("@")){
        erreur.textContent = "Email invalide";
        return;
    }

    if(message === ""){
        erreur.textContent = "Veuillez entrer un message";
        return;
    }

    erreur.style.color = "green";
    erreur.textContent = "Message envoyé avec succès !";

    form.reset();
});