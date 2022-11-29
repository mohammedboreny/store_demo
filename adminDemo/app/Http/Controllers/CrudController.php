<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::latest()->paginate(10);

        return view('admin', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'

            ]);
            $products = new Products;
            $products->name = $request->input('name');
            $products->price = $request->input('price');

            $products->description = $request->input('description');

            if ($request->hasFile('logo')) {
                // Defining path for logo
                $des_path = 'public/images/logos';
                // from the request store the logo into variable image
                $image = $request->file('logo');
                // name the requested image with it's original name
                $image_name = $image->getClientOriginalName();
                // Store the logo into the public directory with the original name 
                $path = $request->file('logo')->storeAs($des_path, $image_name);
                $products->img = $image_name;
            }
            $products->save();
            return redirect('admin')->with('message', 'Product Added Successfully');
        } catch (\Exception $e) {
            return redirect('admin')->with('message', 'Something goes wrong', $e);
        }
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
        $products = Products::find($id);


        return view('edit', compact('products'));
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
        $products = Products::find($id);

        try {
            $request->validate([
                'name' => 'required',
                'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);
            $products->name = $request->input('name');
            $products->price = $request->input('price');

            $products->description = $request->input('description');

            if ($request->hasFile('logo')) {
                // Defining path for logo
                $des_path = 'public/images/logos';

                // Delete previous logo from public
                File::delete($des_path, "/" . $products->img);
                // name the requested image with it's original name
                $image = $request->file('logo');
                $image_name = $image->getClientOriginalName();
                // Store the logo into the public directory with the original name 
                $path = $request->file('logo')->storeAs($des_path, $image_name);
                $products->img = $image_name;
            }
            $products->update();
            return redirect()->back()->with('status', 'Successfully updated');
        } catch (\Exception $e) {
            return redirect()->back()->with('status', 'Not updated', $e);
        }
        return view('edit', compact('products'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::find($id);
        $des_path = 'public/images/logos';
        // Delete from public storage
        File::delete($des_path, "/" . $products->img);
        $products->delete();
        return redirect()->back()->with('status', 'products Successfully deleted');
    }


   
 
    
}
