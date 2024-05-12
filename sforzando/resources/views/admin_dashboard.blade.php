<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <h1>Admin</h1>
        <a href="#"><i class="fas fa-home"></i> Dashboard</a>
        <a href="#"><i class="fas fa-file"></i> Products</a>
        <div class="sidebar">
            <h1>Admin</h1>
            <a href="#"><i class="fas fa-home"></i> Dashboard</a>
            <a href="{{ route('admin.products') }}"><i class="fas fa-file"></i> Products</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="#" onclick="this.closest('form').submit();"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </form>
        </div>
    </div>

    <div class="content">
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf

            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br><br>

            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="6" cols="40"></textarea><br><br>

            <label for="category">Category:</label>
            <select id="category" name="category">
                <option value="electric_guitar">Elektrické gitary</option>
                <option value="acoustic_guitar">Akustické gitary</option>
                <option value="brass_instruments">Dychové nástroje</option>
                <option value="drums">Bicie nástroje</option>
                <option value="piano">Klavíry</option>
                <option value="bass_guitar">Basgitary</option>
            </select>
            <br><br>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01"><br><br>

            <label for="color">Color:</label>
            <input type="text" id="color" name="color"><br><br>

            <label for="brand">Brand:</label>
            <input type="text" id="brand" name="brand"><br><br>

            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="available_stock"><br><br>

            <br><br>

            <label for="images">Images:</label>
            <input type="file" id="images" name="images[]" multiple><br><br>

            <button type="submit" id="addButton">Add product</button>
        </form>
    </div>
</body>
</html>