<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = Crud::latest()->paginate(5);
        return view('index',compact('data'))
            ->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'name' => 'required',
             'image1' => 'image|max:2048',
             'type' => 'required',
             'weight' => 'required',
             'color' => 'required',
             'active' => 'required',
              'image' => 'required|image|max:2048',
              'quantity' => 'required',
              'price' => 'required'
           ]);
        $image = $request->file('image');

        $new_name = rand().'.'.$image->
             getClientOriginalExtension();
        $image->move(public_path('images'),$new_name);

        $image1 = $request->file('image1');

        $new_name1 = rand().'.'.$image1->
             getClientOriginalExtension();
        $image1->move(public_path('images1'),$new_name1);


        $form_data = array(
              'name' => $request->name,
              'image1' => $new_name1,
              'type' => $request->type,
              'weight' => $request->weight,
              'color' => $request->color,
              'active' => $request->active,
              'quantity' => $request->quantity,
              'price' => $request->price,
              'image' => $new_name

        );
        Crud::create($form_data);
        return redirect('crud')->with('success','Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data = Crud::findOrFail($id);
        return  view('view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data = Crud::findOrFail($id);
           return view('edit',compact('data'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        $image_name1 = $request->hidden_image1;
        $image1 = $request->file('image1');
        if ($image !='')
        if ($image1 !='')
        {
            $request->validate([
                'name' =>'required',
                'type' => 'required',
                'weight'=>'required',
                'color' => 'required',
                'active'=> 'required',
                'quantity' => 'required',
                'price' => 'required',
              
                
                
            ]);
            $image_name =rand().'.'.$image->
                 getClientOriginalExtension();
             $image->move(public_path('images'),$image_name);
             $image_name1 =rand().'.'.$image1->
                 getClientOriginalExtension();
             $image1->move(public_path('images1'),$image_name1);
        }
        else
        {
            $request->validate([
                 'name' =>'required',
                'type' => 'required',
                'weight'=>'required',
                'color' => 'required',
                'active'=> 'required',
                'quantity' => 'required',
                'price' => 'required', 
                'image1' => 'image1|max:2048'
                 
            ]);
        }
        $form_data = array(
             'name' => $request->name,
             'type' => $request->type,
             'color' => $request->color,
             'weight' => $request->weight,
             'active' => $request->active,
             'quantity' => $request->quantity,
             'price' => $request->price,
             'image1' => $image_name1,
             'image' => $image_name
           );
        Crud::whereId($id)->update($form_data);
        return redirect('crud')->with('success','Data is Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = Crud::findOrFail($id);
         $data->delete();
         return redirect('crud')->with('success','Data is Successfully Deleted');  
    }
}
