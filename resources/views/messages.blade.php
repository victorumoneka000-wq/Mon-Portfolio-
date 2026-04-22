<style>
    table{
        color:black;
        /* TABLE */
table {
    width: 90%;
    margin: 30px auto;
    border-collapse: collapse;
    background: #111;
    color: white;
    border-radius: 10px;
    overflow: hidden;
}

/* EN-TÊTE */
th {
    background: #00ff88;
    color: black;
    padding: 12px;
    text-align: left;
}

/* CELLULES */
td {
    padding: 12px;
    border-bottom: 1px solid #333;
}

/* LIGNES */
tr:hover {
    background: #ababab;
}

/* BOUTON SUPPRIMER */
button {
    background: red;
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background: darkred;
}

/* TITRE */
h1 {
    text-align: center;
    margin-top: 20px;
    color: #00ff88;
}
    }
</style>
<h1>Messages recu</h1>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Message</th>
        <th>Action</th>
    </tr>

    @foreach ($messages as $msg)
    <tr>
        <td>{{ $msg->nom }}</td>
        <td>{{ $msg->email }}</td>
        <td>{{ $msg->message }}</td>
        <td>
            <form action="/messages/{{ $msg->id }}/delete" method="POST">
                @csrf
                <button type="submit">Supprimer</button>
            </form>
        </td>
    </tr>  
    @endforeach
</table>
