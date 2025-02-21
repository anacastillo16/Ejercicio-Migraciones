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
    <form action="{{ route("categorias.store") }}" method="post">
            @csrf
            <label for="nombre">Introduce el nombre de la categoría: </label>
            <input type="text" name="nombre" id="nombre">
            <br>
            <label for="descripcion">Introduce la descripción: </label>
            <input type="text" name="descripcion" id="descripcion">
            <br>
            <input type="submit" value="Crear categoría">
            
        </form>
    </main>
</body>
</html>