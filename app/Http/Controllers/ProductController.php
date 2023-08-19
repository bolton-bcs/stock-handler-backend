<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $result = Product::all();

        return response()->json($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreproductRequest $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $product = new Product();

        $product->item_code = $request->item_code;
        $product->item_name = $request->item_name;
        $product->supplier_id = $request->supplier_id;
        $product->quantity = $request->quantity;
        $product->unit_price = $request->unit_price;
        $product->status = $request->status;


        $product->save();

        return response()->json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\product $product
     * @return JsonResponse
     */
    public function show(int $id)
    {
        $product = Product::find($id);

        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\product $product
     * @return Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateproductRequest $request
     * @param \App\Models\product $product
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->item_code = $request->item_code;
        $product->item_name = $request->item_name;
        $product->supplier_id = $request->supplier_id;
        $product->quantity = $request->quantity;
        $product->unit_price = $request->unit_price;
        $product->status = $request->status;

        $product->save();

        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @param \App\Models\product $product
     * @return JsonResponse
     */
    public function destroy(int $id)
    {
        $product = Product::find($id);

        $product->delete();

        return response()->json(['message' => 'Product Deleted'], 201);
    }
}
