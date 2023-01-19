public function storeCar(Request $request)
    {
 
        $this->validate($request, [
            'fileToUpload'  => 'required|mimes:doc,docx,pdf|max:2048'
           ]);
        
        $destinationPath = public_path('/uploadedfiles');
        $image = $request->file('fileToUpload');
 
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $image->move($destinationPath, $input['imagename']);
 
       
        $dbPath = $destinationPath. '/'.$input['imagename'];
        //dd($dbPath);
        $car = new Car();
        $car->name = request('imagename');
        $car->path = $dbPath;
 
        $car->save();
        //return view('uploadfile');
        return back()->with('success', 'File Uploaded Successfully With Validation')->with('path', $input['imagename']);
    }