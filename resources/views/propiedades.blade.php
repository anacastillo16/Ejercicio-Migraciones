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
            <a href="{{ route("agentes.index") }}">Ver agentes</a>
            <a href="{{ route('categorias.index') }}">Ver categorías</a>
            <a href="{{ route('propiedades.create') }}">Crear propiedad</a>
        </nav>
    </header>

    <main>
        <ul>
            @foreach ($propiedades as $propiedad)
                <li> <a href="{{ route('propiedades.show', $propiedad->id)}}">{{ $propiedad->nombre }}</a> - {{ $propiedad->direccion}} </li>
            @endforeach
        </ul>
    </main>
</body>
</html>