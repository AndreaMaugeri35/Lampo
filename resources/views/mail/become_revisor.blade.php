<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vendilo.it</title>
</head>
<body style="background-color: #252525; display:flex; justify-content: center; font-size:large">
    <div style=" display:flex; flex-direction:column; align-items: center;">
        <h1 style="color: #A238FF;">Lampo.it</h1>
        <h2 style="color: #A238FF">Un utente ha richiesto di lavorare con noi</h1>
        <p style="color: white">Salve staff di Lampo.it, Vorrei entrare a far parte del team, nel ruolo di revisore</p>    
        <h3 style="color: white">Ecco i miei dati:</h2>
        <p style="color: white">Nome: {{ $user->name }}</p>
        <p style="color: white">Email: {{ $user->email }}</p>
        <p style="color: white">Utente dal: {{ $user->created_at->format('d/m/Y') }}</p>
        <p style="color: white">Per rendere revisone questo utente clicca qui: </p>
        <a style="color: #A238FF" href="{{ route('make.revisor', compact('user'))}}">Rendi revisore</a>
    </div>
</body>
</html>