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
    <form action="{{ route("categorias.update", $categoria->id) }}" method="post">
            @csrf
            @method('put')
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" value="{{ $categoria->nombre }}">
            <br>
            <label for="descripcion">Descripción: </label>
            <input type="text" name="descripcion" id="descripcion" value="{{ $categoria->telefono }}">
            <br>
            <input type="submit" value="Editar categoría">
        </form>
    </main>
</body>
</html>