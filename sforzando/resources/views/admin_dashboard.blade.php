<!--Made by Martin Podmanicky, Dominik Tulach-->

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
</head>
<body>
    <h1>Admin Page</h1>

    <select id="productSelect">
        <!-- Add options for products here -->
        <option value="klavir_petrof">Grand klavír - Petrof</option>
    </select>

    <button id="removeButton">Remove</button>

    <a href="admin_page_modify.html">
        <button id="modifyButton">Modify</button>
    </a>
    <br><br><br>

    
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="description">Description:</label><br>
    <textarea id="description" name="description" rows="6" cols="40"></textarea><br><br>

    <label for="category">Category:</label>
    <select id="category" name="category">
        <option value="elektricke_gitary">Elektrické gitary</option>
        <option value="akusticke_gitary">Akustické gitary</option>
        <option value="dychove_nastroje">Dychové nástroje</option>
        <option value="bicie_nastroje">Bicie nástroje</option>
        <option value="klaviry">Klavíry</option>
        <option value="basgitary">Basgitary</option>
    </select>

    <br><br>

    <label for="image">Image:</label>
    <input type="file" id="image" name="image"><br><br>

    <label for="image2">Image 2:</label>
    <input type="file" id="image2" name="image2"><br><br>

    <button id="addButton">Add</button>

    