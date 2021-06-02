<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use OpenTracing\Formats;

class ExampleController extends Controller
{
    private $tracer;
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->tracer = app('tracer');
    }

    public function index()
    {
        $products = Product::paginate(10)->withQueryString();
        $data = [
            'products' => $products
        ];
        return view('index', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'description', 'price']);
        Product::create($data);
        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $data = [
            'product' => $product
        ];
        return view('edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->only(['name', 'description', 'price']);
        Product::findOrFail($id)->update($data);
        return redirect()->route('product.index');
    }

    public function delete($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('product.index');
    }
}
