<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Add Product</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="productName">Name:</label>
                <input type="text" id="productName" name="productName" class="form-control" value="{{ old('productName') }}" required>
            </div>
            <div class="form-group">
                <label for="productDescription">Description:</label>
                <textarea id="productDescription" name="productDescription" class="form-control" required>{{ old('productDescription') }}</textarea>
            </div>
            <div class="form-group">
                <label for="buyPrice">Price:</label>
                <input type="number" id="buyPrice" name="buyPrice" class="form-control" value="{{ old('buyPrice') }}" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
</body>
</html>
