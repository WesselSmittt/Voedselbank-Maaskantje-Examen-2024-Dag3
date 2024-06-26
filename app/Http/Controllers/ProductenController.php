<?php

namespace App\Http\Controllers;
use App\Models\Leverancier;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $leverancierId = $request->query('leverancier_id');
    
        // Voer een join uit met de productperleverancier tabel en filter op leverancier_id
        $producten = Product::join('productperleverancier', 'product.id', '=', 'productperleverancier.product_id')
                            ->where('productperleverancier.leverancier_id', $leverancierId)
                            ->select('product.naam', 'product.soortallergie', 'product.barcode', 'product.houdbaarheidsdatum')
                            ->get();
    
        $leverancier = Leverancier::find($leverancierId);

        return view('leverancier.productenoverzicht', compact('leverancier', 'producten'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Logica om product op te slaan...
        $product = Product::create($request->all());
    
        // Redirect naar de bewerkpagina van het nieuwe product
        return redirect()->route('edit', ['product' => $product->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    
    //  public function edit(Leverancier $leverancier)
    //  {
    //      // Zoek het product op basis van de ID. Gebruik firstOrFail om een 404 te gooien als het product niet gevonden wordt.
    //      $product = Product::findOrFail($id);
     
    //      // Stuur het product door naar de view. Zorg ervoor dat je een view hebt die overeenkomt met dit pad.
    //      return view('leverancier.edit', compact('product'));
    // }
     
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'houdbaarheidsdatum' => 'required|date',
        ]);
    
        $product->houdbaarheidsdatum = $validated['houdbaarheidsdatum'];
        $product->save();
    
        return redirect()->route('producten.overzicht')->with('success', 'Product bijgewerkt.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
