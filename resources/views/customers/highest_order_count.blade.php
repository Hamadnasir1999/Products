<!DOCTYPE html>
<html>
<head>
    <title>Highest Order Count Customer</title>
</head>
<body>
    <h1>Customer with Most Orders</h1>
    @if ($customer)
            <p>Customer Name: {{ $customer->customerName }}</p>
            <p>Number of Orders: {{ $customer->orderCount }}</p>
        @else
            <p>No customer data available.</p>
        @endif
    <a href="{{ route('customers.highestSpending') }}">Find Highest Spending Customer</a>
</body>
</html>
