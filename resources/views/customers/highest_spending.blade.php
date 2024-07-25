<!DOCTYPE html>
<html>
<head>
    <title>Highest Spending Customer</title>
</head>
<body>
    <h1>Highest Spending Customer</h1>
    @if ($customer)
            <p>Customer Name: {{ $customer->customerName }}</p>
            <p>Total Spent: ${{ number_format($customer->totalSpent, 2) }}</p>
        @else
            <p>No customer data available.</p>
        @endif
    <a href="{{ route('customers.highestOrderCount') }}">Find Customer with Most Orders</a>
</body>
</html>
