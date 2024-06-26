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
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
