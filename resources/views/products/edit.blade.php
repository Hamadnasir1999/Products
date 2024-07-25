<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="productName">Name:</label>
                <input type="text" id="productName" name="productName" class="form-control" value="{{ old('productName', $product->productName) }}" required>
            </div>
            <div class="form-group">
                <label for="productDescription">Description:</label>
                <textarea id="productDescription" name="productDescription" class="form-control" required>{{ old('productDescription', $product->productDescription) }}</textarea>
            </div>
            <div class="form-group">
                <label for="buyPrice">Price:</label>
                <input type="number" id="buyPrice" name="buyPrice" class="form-control" value="{{ old('buyPrice', $product->buyPrice) }}" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
</body>
</html>
