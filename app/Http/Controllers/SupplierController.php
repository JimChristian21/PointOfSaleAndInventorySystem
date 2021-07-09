<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Location;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        $locations = Location::all();
        return view('supplier.showSuppliers', ['suppliers' => $suppliers, 'locations' => $locations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.createSupplier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required:max:50',
            'barangay' => 'required:max:50',
            'municipality' => 'required:max:50',
            'province' => 'required:max:50',
            'phone_number' => 'required|numeric',
        ]);

        $newLocation = new Location();
        $newLocation->barangay = $request->barangay;
        $newLocation->municipality = $request->municipality;
        $newLocation->province = $request->province;
        $newLocation->save();

        $location = Location::latest()->first();

        $newSupplier = new Supplier();
        $newSupplier->company_name = $request->company_name;
        $newSupplier->location_id = $location->id;
        $newSupplier->phone_number = $request->phone_number;
        $newSupplier->save();


        return redirect('supplier')->with('supplierAdded', 'Supplier has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        $location = Location::find($supplier->location_id);

        return view('supplier.editSupplier', ['supplier'=> $supplier, 'location' => $location]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'company_name' => 'required:max:50',
            'barangay' => 'required:max:50',
            'municipality' => 'required:max:50',
            'province' => 'required:max:50',
            'phone_number' => 'required|numeric',
        ]);

        $supplier = Supplier::find($id);
        $supplier->company_name = $request->company_name;
        $supplier->phone_number = $request->phone_number;

        $location = Location::find($supplier->location_id);
        $location->barangay = $request->barangay;
        $location->municipality = $request->municipality;
        $location->province = $request->province;

        $supplier->save();
        $location->save();



        return redirect('supplier')->with('supplierEdited', 'Supplier has been edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();

        return redirect('supplier')->with('supplierDeleted', 'Supplier has been deleted successfully');
    }
}
