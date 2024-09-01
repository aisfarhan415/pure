<!DOCTYPE html>
<html>
<head>
    <title>Add New Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
        <br>
        <label for="price">Price:</label>
        <input type="text" name="price" id="price">
        <br>
        <label for="stock_quantity">Stock Quantity:</label>
        <input type="text" name="stock_quantity" id="stock_quantity">
        <br>
        <button type="submit">Add Product</button>
    </form>
    <a href="{{ route('products.index') }}">Back to Product List</a>
</body>
</html>
