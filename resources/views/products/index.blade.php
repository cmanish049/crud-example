<!DOCTYPE html>
<html>
<head>
    <title>Product Crud</title>
</head>
<body>
<h3>Product List</h3>
<p><a href="{{ route('products.create') }}">Add new</a></p>
<table>
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Action</th>
    </tr>
    @if($products->count() > 0)
        @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->category }}</td>
        <td>{{ $product->price }}</td>
        <td>
            <form action="{{ route('products.edit', $product->id) }}">
                @csrf
                <input type="submit" name="submit" value="Edit">
            </form>
            <form action="{{ route('products.destroy', $product->id) }}">
                @csrf
                @method('DELETE')
                <input type="submit" name="submit" value="Delete">
            </form>
        </td>
    </tr>
        @endforeach
        @endif
</table>
</body>
</html>