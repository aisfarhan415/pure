<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}">
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $product->description }}</textarea>
        <br>
        <label for="price">Price:</label>
        <input type="text" name="price" id="price" value="{{ $product->price }}">
        <br>
        <label for="stock_quantity">Stock Quantity:</label>
        <input type="text" name="stock_quantity" id="stock_quantity" value="{{ $product->stock_quantity }}">
        <br>
        <button type="submit">Update Product</button>
    </form>
    <a href="{{ route('products.index') }}">Back to Product List</a>
</body>
</html>
