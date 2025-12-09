<h1>Lista de Productos</h1>

<a href="/productos/create">Crear producto</a>
<br><br>
<a href="/productos/stock-alto">Stock Alto</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Categoría</th>
    </tr>

    @foreach ($productos as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nombre }}</td>
        <td>{{ $p->precio }}</td>
        <td>{{ $p->stock }}</td>
        <td>{{ $p->categoria }}</td>
    </tr>
    @endforeach
</table>
