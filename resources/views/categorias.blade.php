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
            <a href="{{ route('categorias.create') }}">Crear agente</a>
        </nav>
    </header>

    <main>
        <ul>
            @foreach ($categorias as $categoria)
                <li> <a href="{{ route('categorias.show', $categoria->id)}}">{{ $categoria->nombre }}</a></li>
            @endforeach
        </ul>
    </main>
</body>
</html>