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
            <a href="{{ route('propiedades.index') }}">Volver a index</a>
        </nav>
    </header>

    <main>
        <form action="{{ route("propiedades.update", $propiedad->id) }}" method="post">
            @csrf
            @method('put')
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" value="{{ $propiedad->nombre }}">
            <br>
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" value="{{ $propiedad->direccion }}">
            <br>
            <input type="submit" value="Editar propiedad">
        </form>
    </main>
</body>
</html>