<!--Made by Martin Podmanicky, Dominik Tulach-->
<!DOCTYPE html>
<html>

<head>
    <title>Modify Page</title>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
</head>

<body>
    <h1>Modify Page</h1>
    <br>

    <div class="content">
        <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}"><br><br>

            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="6" cols="40">{{ $product->description }}</textarea><br><br>

            <label for="category">Category:</label>
            <select id="category" name="category">
                <option value="electric_guitars">Elektrické gitary</option>
                <option value="acoustic_guitars">Akustické gitary</option>
                <option value="wind_instruments">Dychové nástroje</option>
                <option value="percussion">Bicie nástroje</option>
                <option value="pianos">Klavíry</option>
                <option value="bass_guitars">Basgitary</option>
            </select>
            <br><br>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" value="{{ $product->price }}"><br><br>

            <label for="color">Color:</label>
            <input type="text" id="color" name="color" value="{{ $product->color }}"><br><br>

            <label for="brand">Brand:</label>
            <input type="text" id="brand" name="brand" value="{{ $product->brand }}"><br><br>

            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="available_stock" value="{{ $product->available_stock }}"><br><br>

            <br><br>

            <label for="images">Images:</label>
            <input type="file" id="images" name="images[]" multiple><br><br>

            <button type="submit" id="updateButton">Update product</button>
        </form>
    </div>
</body>