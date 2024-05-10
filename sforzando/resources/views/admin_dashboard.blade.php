<!--Made by Martin Podmanicky, Dominik Tulach-->

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
        <a href="#"><i class="fas fa-file"></i> Products</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="#" onclick="this.closest('form').submit();"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </form>
    </div>

    </div>

    <div class="content">
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
</div>

    <button id="addButton">Add</button>

    