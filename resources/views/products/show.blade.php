<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Product Details</h1>
        <div class="card">
            <div class="card-header">
                {{ $product->productName }}
            </div>
            <div class="card-body">
                <p class="card-text">{{ $product->productDescription }}</p>
                <p class="card-text">Price: ${{ number_format($product->buyPrice, 2) }}</p>
            </div>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
</body>
</html>
