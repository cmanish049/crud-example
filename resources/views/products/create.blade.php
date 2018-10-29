<!DOCTYPE html>
<html>
<head>
    <title>Product Crud</title>
</head>
<body>
<h3>Add New Product</h3>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name">
    </div>
    <div class="form-group">
        <label for="">Category</label>
        <input type="text" name="category">
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input type="text" name="price">
    </div>
    <div class="form-group">
        <input type="submit" value="Add Product">
    </div>
</form>
</body>
</html>