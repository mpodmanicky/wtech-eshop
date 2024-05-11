<!DOCTYPE html>
<html>
<head>
    <title>Admin Products Page</title>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <h1>Admin</h1>
        <a href="#"><i class="fas fa-home"></i> Dashboard</a>
        <a href="#"><i class="fas fa-file"></i> Products</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="#" onclick="this.closest('form').submit();"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </form>
    </div>

    <div class="content">
        <h2>Products</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Color</th>
                    <th>Brand</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->brand }}</td>
                        <td>{{ $product->available_stock }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>