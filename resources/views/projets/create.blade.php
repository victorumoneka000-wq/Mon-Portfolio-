<style>
    body {
        font-family: Arial;
        background-color: #f4f4f4;
    }

    .container {
        width: 400px;
        margin: 50px auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    input, textarea {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        width: 100%;
        padding: 10px;
        margin-top: 15px;
        background: #333;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background: #555;
    }
</style>

<div class="container">
    <h2>Ajouter un projet</h2>

    <form action="/projets" method="POST">
        @csrf
        <input type="text" name="titre" placeholder="Titre">
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Ajouter</button>
    </form>
</div>