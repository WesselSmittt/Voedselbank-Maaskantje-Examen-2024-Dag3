<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\ProductPerMagazijn;
use App\Models\Magazijn;

class VoorraadController extends Controller
{
    public function index(Request $request)
    {

        // Get the stock information
        $categorie_id = $request->input('categorie_id');
        $query = Product::join('categorieen', 'producten.categorie_id', '=', 'categorieen.id')
                        ->join('producten_per_magazijn', 'producten.id', '=', 'producten_per_magazijn.product_id')
                        ->join('magazijnen', 'producten_per_magazijn.magazijn_id', '=', 'magazijnen.id')
                        ->select('producten.id', 'producten.naam as productnaam', 'categorieen.naam as categorie', 'magazijnen.verpakkingseenheid as eenheid', 'magazijnen.aantal', 'producten.houdbaarheidsdatum', 'producten_per_magazijn.locatie as magazijn');

        if ($categorie_id) {
            $query->where('categorieen.id', $categorie_id);
        }


        // Get the stock information
        $voorraad = $query->get();
        $categories = Categorie::all();

        return view('voorraad.index', compact('voorraad', 'categories', 'categorie_id'));
    }

    public function show($id)
    {
        // Get the product and the stock information
        $product = Product::findOrFail($id);
        $magazijn = ProductPerMagazijn::where('product_id', $id)
            ->join('magazijnen', 'producten_per_magazijn.magazijn_id', '=', 'magazijnen.id')
            ->first();

        return view('voorraad.show', compact('product', 'magazijn'));
    }

    public function edit($id)
    {
        // Get the product and the magazijn
        $product = Product::findOrFail($id);
        $magazijn = ProductPerMagazijn::where('product_id', $id)
            ->join('magazijnen', 'producten_per_magazijn.magazijn_id', '=', 'magazijnen.id')
            ->first();

        return view('voorraad.edit', compact('product', 'magazijn'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        $request->validate([
            'aantal' => 'required|integer|min:0',
        ]);

        // Update the product in the database...
        $productPerMagazijn = ProductPerMagazijn::where('product_id', $id)->first();
        $magazijn = Magazijn::find($productPerMagazijn->magazijn_id);

        // Check if the amount of products to be delivered is greater than the amount in stock
        if ($request->input('aantal') > $magazijn->aantal) {
            return redirect()->route('voorraad.edit', $id)
                ->withErrors(['aantal' => 'Er worden meer producten uitgeleverd dan er in voorraad zijn'])
                ->withInput();
        }

        // Update the amount of products in stocka
        $magazijn->aantal = $request->input('aantal');
        $magazijn->save();

        // Redirect to the product details page
        return redirect()->route('voorraad.edit', $id)
        ->with('success', 'De productgegevens zijn gewijzigd')
        ->with('redirect', route('voorraad.show', $id));
    }
}
