<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    // Search Controller

    public function search(Request $request): View {

        $q = $request->input('query');

        $query = Product::query()->latest()->select(['id', 'name', 'category', 'price', 'color', 'brand', 'available_stock']);

        $words = explode(' ', $q);
        foreach ($words as $term) {
            $word = Sanitize::sanitize($term);

            $word = str_replace(['%', "_"], ['\\%', '\\_'], $word);

            $searchTerm = '%' . $word . '%';

            $query->where(function (Builder $subQuery) use ($searchTerm) {
                $subQuery->where('name','like',$searchTerm)->orWhere('brand','like',$searchTerm)->orWhere('category','like',$searchTerm);
            });
        };

        return view('products', ['products' => $query->paginate()]);

    }
}
