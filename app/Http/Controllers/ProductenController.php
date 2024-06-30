<?php

namespace App\Http\Controllers;
use App\Models\Leverancier;
use App\Models\Product;
use carbon\carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
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

    public function showProductenOverzicht()
    {
        $producten = Product::all(); // Zorgt ervoor dat alle kolommen worden opgehaald, inclusief `id`
        return view('leverancier.productenoverzicht', compact('producten'));
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
    public function show($id)
    {
        $product = Product::find($id);
        return view('productenoverzicht', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    
    public function edit($id)
    {
        $product = Product::findOrFail($id); // Find the product by ID or fail
        return view('leverancier.edit', compact('product')); // Return the edit view with the product data
    }
     
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Valideer de request data
    $validatedData = $request->validate([
        'houdbaarheidsdatum' => 'required|date',
        // Voeg eventuele andere velden toe die je wilt valideren
    ]);

    // Vind het product en update het met de gevalideerde data
    $product = Product::findOrFail($id);
    $product->houdbaarheidsdatum = $validatedData['houdbaarheidsdatum'];
    // Update eventuele andere velden hier
    $product->save();

    // Check of de houdbaarheidsdatum meer dan 7 dagen in de toekomst ligt
    $today = Carbon::today();
    $futureDate = Carbon::parse($validatedData['houdbaarheidsdatum']);
    $daysDifference = $today->diffInDays($futureDate);

    if ($daysDifference > 7) {
        // Als de datum meer dan 7 dagen in de toekomst ligt, geef een foutmelding
        return redirect()->back()->with('error', 'Houdbaarheidsdatum mag niet meer dan 7 dagen in de toekomst liggen.');
    }

    // Redirect naar een view met een succesbericht, of toon de bijgewerkte productgegevens
    // Pas de route aan naar waar je de gebruiker naartoe wilt sturen
    return redirect()->route('producten.overzicht', $product->id)->with('success', 'Product succesvol bijgewerkt.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
