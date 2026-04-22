<style>
    body{
        font-famly: Arial;
        background-color: #f4f4f4;
    }

    .container{
        width: 400px;
        margin: 50px auto;
        background: #f3f3f2;
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
    <h2>Modifier projet</h2>

    <form action="/projets/{{ $projet->id }}" method="POST">
        @csrf
        <input type="text" name="titre" value="{{ $projet->titre }}">
        <textarea name="description">{{ $projet->description }}</textarea>
        <button type="submit">Modifier</button>
    </form>
</div>