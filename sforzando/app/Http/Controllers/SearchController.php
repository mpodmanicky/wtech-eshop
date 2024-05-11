<?php
//Martin Podmanicky
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;

class SearchController extends Controller
{
    // Search Controller

    public function search(Request $request) {

        $searchTerm = $request->input('search');

        $searchTerm = '%' . $searchTerm . '%'; // Wildcard

        // Here, possible sanitazion of the search term could be done

        // and even prevetion from SQL injection

        $products = Product::where(function (Builder $subQuery) use ($searchTerm) {
            $subQuery->whereRaw("LOWER(name) like LOWER(?)", [$searchTerm])
                 ->orWhereRaw("LOWER(brand) like LOWER(?)", [$searchTerm])
                 ->orWhereRaw("LOWER(category) like LOWER(?)", [$searchTerm]);
        })->paginate(12);

        return view('products', ['products' => $products]);

    }
}
