<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{

public function index(Mentor $mentor){
$mentors = Mentor::all();
return view('mentors.index',compact('mentors'));
}

    public function create(){
        return view('mentors.create');
    }

    public function store(Request $request){

       $validated = $request->validate([
            'name' => 'required|max:255|unique:mentors',
            'mobile_number'=>'required|max:10|unique:mentors',
            'position'=>'required',
            'email' => 'required|unique:mentors',
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date'=>'required',
           
          
           
            
        ]);

        $data = new Mentor();
        $data->name = $request->name;
        $data ->mobile_number =$request->mobile_number;
        $data->position = $request->position;
        $data ->email =$request->email;
                if($request->file('photo')){
                    $file= $request->file('photo');
                    $filename= date('YmdHi').$file->getClientOriginalName();
                    $file-> move(public_path('photo'), $filename);
                    $data['photo']= $filename;
        }
        $data ->date_of_join =$request->date;
      
      
        
        $data->save();

        toast('Mentors Added Successfully','success')->autoClose(3000);
        return redirect(route('mentors.index'));
    }

    public function edit($mentor){
            $mentors = Mentor::find($mentor);
           
          return view('mentors.edit',compact('mentors'));
           
    }

    
public function update( Request $request,Mentor $mentor ){
    $validated = $request->validate([
        'name' => 'required|max:255',
        'mobile_number'=>'required',
        'position'=>'required',
        'email' => 'required',
        'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'date'=>'required',
       ]);

       if($request->file('photo')){
        $file= $request->file('photo');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('photo'), $filename);
        $mentor['photo']= $filename;
        }
        else{
            unset($mentor['photo']);
        }



    $mentor->update($validated);
   
    toast('Mentor Records  Updated.','info')->autoClose(3000);

    return redirect(route('mentors.index'));
}


public function destroy(Request $request ,$mentor){
    Mentor::destroy($mentor);
    toast('Mentor Record Deleted. ','warning')->autoClose(3000);
    return redirect(route('mentors.index'));
}
}
