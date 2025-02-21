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
        <h2>Datos sobre la catrgoría {{ $categoria->nombre }}</h2>

        <ul>
            <li>{{ $categoria->nombre }}</li>
            <li>{{ $categoria->descripcion }}</li>
        </ul>

        <a href="{{ route("categorias.edit", $categoria->id) }}">Editar</a>
        <form action= {{ route("categorias.destroy", $categoria->id) }} method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Borrar categoría">

        </form>
    </main>
</body>
</html>