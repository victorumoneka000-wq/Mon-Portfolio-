<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des projets</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; color: #111; }
        .container { max-width: 800px; margin: 40px auto; padding: 20px; background: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .top { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .projects { list-style: none; padding: 0; }
        .projects li { background: #fafafa; padding: 15px; margin-bottom: 12px; border: 1px solid #ddd; border-radius: 8px; }
        .projects li h3 { margin: 0 0 8px; }
        .projects li p { margin: 0; }
        a.button { display: inline-block; padding: 10px 16px; background: #007bff; color: #fff; text-decoration: none; border-radius: 6px; }
        a.button:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <div class="top">
            <h1>Projets</h1>
            <a class="button" href="/projets/create">Ajouter un projet</a>
        </div>

        @if($projets->isEmpty())
            <p>Aucun projet enregistré pour le moment.</p>
        @else
            <ul class="projects">
                @foreach($projets as $projet)
                    <li>
                        <h3>{{ $projet->titre }}</h3>
                        <p>{{ $projet->description }}</p>
                        <p><a href="/projets/{{ $projet->id }}/edit">Modifier</a></p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>
