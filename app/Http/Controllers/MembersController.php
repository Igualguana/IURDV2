<?php

namespace App\Http\Controllers;
use App\path;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Member;
class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    $members= Member::all();
        return view (' members.index')->with(' members',  $members);
    }
    public function ver()
    {
        $members= Member::all();
        return view (' members.inde',compact('members'));
    }
 

    public function inde()
    {
        $members= Member::all();
        return view ( $members);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {   
     
     
        $nombre =$request->firstName;
        $apellido =$request->lastName;
        $telefono =$request->telephone;
        $direccion =$request->address;
        $ciudad =$request->country;
        $estado =$request->state;
        $code =$request->zip;
        $oracion =$request->Oracion;
        $medio =$request->Medio;

      

       /* $image_path = $request->file('image')->store('image', 'public');   $nombreimagen = Str::slug($request->firstName).".".$image->guessExtension();*/
        if ($request->file('image')) {
          /*  $image_path = Storage::put('image', $request->file("image"));*/
          $image_p =$request->file("image")->store('public/image');

           $image_path= Storage::url($image_p);
        }
     

         $input = Member::create([
            'firstName'=> $nombre,
            'lastName'=> $apellido,
            'telephone'=> $telefono,
            'address'=> $direccion,
           'country'=> $ciudad,
            'state'=> $estado,
            'zip'=> $code,
            'Oracion'=> $oracion,
            'Medio'=> $medio,
            'image' => $image_path,

        ]);
     
     
           


        return redirect('member')->with('flash_message', 'Member Addedd!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $members =  Member::find($id);
        return view('members.show')->with('members',$members);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
