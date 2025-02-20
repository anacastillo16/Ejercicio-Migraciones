<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmobiliaria</title>
</head>
<body>
    <header>
        <h1>Inmobiliaria Ana</h1>
        <nav>
            <a href="{{ route('propiedades.index') }}">Volver a index</a>
        </nav>
    </header>

    <main>
        <h2>Datos sobre la propiedad {{ $propiedad->nombre }}</h2>

        <ul>
            <li>{{ $propiedad->nombre }}</li>
            <li>{{ $propiedad->direccion }}</li>
        </ul>

        <a href="{{ route("propiedades.edit", $propiedad->id) }}">Editar</a>
        <form action= {{ route("propiedades.destroy", $propiedad->id) }} method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Borrar propiedad">

        </form>
    </main>
</body>
</html>