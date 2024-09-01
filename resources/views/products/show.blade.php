<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
</head>
<body>
    <h1>Product Details</h1>
    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Price:</strong> {{ $product->price }}</p>
    <p><strong>Stock Quantity:</strong> {{ $product->stock_quantity }}</p>
    <a href="{{ route('products.index') }}">Back to Product List</a>
    <a href="{{ route('products.edit', $product->id) }}">Edit Product</a>
</body>
</html>
