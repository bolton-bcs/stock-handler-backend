<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $result = Supplier::all();

        return response()->json($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSupplierRequest $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $supplier = new Supplier();

        $supplier->supplier_name = $request->supplier_name;
        $supplier->supplier_address = $request->supplier_address;
        $supplier->supplier_number = $request->supplier_number;
        $supplier->supplier_email = $request->supplier_email;

        $supplier->save();

        return response()->json($supplier);
    }

    /**
     * Display the specified resource.
     *
     * @param Supplier $supplier
     * @return JsonResponse
     */
    public function show(int $id)
    {
        $supplier = Supplier::find($id);

        return response()->json($supplier);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Supplier $supplier
     * @return Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSupplierRequest $request
     * @param Supplier $supplier
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);

        $supplier->supplier_id = $request->supplier_id;
        $supplier->supplier_name = $request->supplier_name;
        $supplier->supplier_address = $request->supplier_address;
        $supplier->supplier_number = $request->supplier_number;
        $supplier->supplier_email = $request->supplier_email;
        $supplier->products = $request->products;

        $supplier->save();

        return response()->json($supplier);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Supplier $supplier
     * @return JsonResponse
     */
    public function destroy(int $id)
    {
        $supplier = Supplier::find($id);

        $supplier->delete();

        return response()->json(['message' => 'Supplier Deleted'], 201);
    }
}
