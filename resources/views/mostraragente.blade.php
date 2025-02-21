<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Inmobiliaria Ana</h1>
        <nav>
            <a href="{{ route("propiedades.index") }}">Volver a index</a>
        </nav>
    </header>
  
    <main>
        <h2>Datos sobre el agente {{ $agente->nombre }}</h2>

        <ul>
            <li>{{ $agente->nombre }}</li>
            <li>{{ $agente->telefono }}</li>
        </ul>

        <a href="{{ route("agentes.edit", $agente->id) }}">Editar</a>
        <form action= {{ route("agentes.destroy", $agente->id) }} method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Borrar agente">

        </form>
    </main>
</body>
</html>