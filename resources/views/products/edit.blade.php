<!DOCTYPE html>
<html>
<head>
    <title>Product Crud</title>
</head>
<body>
<h3>Update New Product</h3>
<form action="{{ route('products.update', ['id' => $product->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $product->name }}">
    </div>
    <div class="form-group">
        <label for="">Category</label>
        <input type="text" name="category" value="{{ $product->category }}">
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input type="text" name="price" value="{{ $product->price }}">
    </div>
    <div class="form-group">
        <input type="hidden" name="id" value="{{ $product->id }}">
        <input type="submit" value="Update Product">
    </div>
</form>
</body>
</html>