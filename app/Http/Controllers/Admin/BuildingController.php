<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\MzBuilding;

class BuildingController extends Controller
{
     public function index() {
        
        $buildings = MzBuilding::all();
        
        return view('admin.building.index', [
            'buildings' => $buildings
        ]);
        
    }
    
    public function add() {
        
        return view('admin.building.add');
        
    }
    
    public function create() {
        
        $request = request();
        
        $formData = request()->validate([
            'manager_id' => 'required|integer',
            'name' => 'required|string|min:3|max:25',
            'building_number' => 'required|string|min:1|max:6',
            'unique_id' => 'required|string|min:1|max:6',
            'tax_id' => 'required|string|min:1|max:6',
            'address' => 'required|string|min:1|max:50',
            'city' => 'required|string|min:1|max:50',
            'township' => 'required|string|min:1|max:50',
            'postal_code' => 'required|size:5',
            'entrance' => 'required|string|min:1|max:6',
            'num_of_apartments' => 'required|integer',
            'description' => 'string|nullable|min:1|max:250',
            'status' => 'required'           
        ]);
        
        $building = new MzBuilding();
        $building->fill([
            'manager_id' => $request->input('manager_id'),
            'name' => $request->input('name'),
            'building_number' => $request->input('building_number'),
            'unique_id' => $request->input('unique_id'),
            'tax_id' => $request->input('tax_id'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'township' => $request->input('township'),
            'postal_code' => $request->input('postal_code'),
            'entrance' => $request->input('entrance'),
            'num_of_apartments' => $request->input('num_of_apartments'),
            'description' => $request->input('description'),
            'status' => $request->input('status')
        ]);
        $building->save();
        
        return redirect()->back()->with('systemMessage', 'Building is added successfully.');
        
    }
    
    public function edit($id) {
        
        $request = request();
        
        $building = MzBuilding::findorFail($id);
        
        return view('admin.building.edit', [
            'building' => $building
        ]);
        
    }
    
    public function update($id) {
        
        $request = request();
        
        $formData = request()->validate([
            'manager_id' => 'required|integer',
            'name' => 'required|string|min:3|max:25',
            'building_number' => 'required|string|min:1|max:6',
            'unique_id' => 'required|string|min:1|max:6',
            'tax_id' => 'required|string|min:1|max:6',
            'address' => 'required|string|min:1|max:50',
            'city' => 'required|string|min:1|max:50',
            'township' => 'required|string|min:1|max:50',
            'postal_code' => 'required|size:5',
            'entrance' => 'required|string|min:1|max:6',
            'num_of_apartments' => 'required|integer',
            'description' => 'string|nullable|min:1|max:250',
            'status' => 'required' 
        ]);
        
        $building = MzBuilding::findorFail($id);
        $building->fill([
            'manager_id' => $request->input('manager_id'),
            'name' => $request->input('name'),
            'building_number' => $request->input('building_number'),
            'unique_id' => $request->input('unique_id'),
            'tax_id' => $request->input('tax_id'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'township' => $request->input('township'),
            'postal_code' => $request->input('postal_code'),
            'entrance' => $request->input('entrance'),
            'num_of_apartments' => $request->input('num_of_apartments'),
            'description' => $request->input('description'),
            'status' => $request->input('status')
        ]);
        $building->save();
        
        return redirect()->back()->with('systemMessage', 'Building is edited successfully.');
    }
    
    public function delete() {
        
        $request = request();
        
        $building = MzBuilding::findorFail($request->input('id'));
        $building->delete();
        
        return redirect()->back()->with('systemMessage', 'Building ' . $building['name'] . ' is successfully deleted.');
        
    }
}
