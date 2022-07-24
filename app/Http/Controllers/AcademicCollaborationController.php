<?php

namespace App\Http\Controllers;

use App\Models\Academic_collaboration;
use Illuminate\Http\Request;

class AcademicCollaborationController extends Controller
{
    function index(Academic_collaboration $academic_collaboration){
        $academic_collaboration = Academic_collaboration::all();
        return view('academic.index',compact('academic_collaboration'));
    }
    public function create(){
        return view('academic.create');
    }
    public function store(Request $request){

        $validated = $request->validate([

             'academy_name' => 'required|max:255|unique:academic_collaborations',
             'website_url' => 'required|unique:academic_collaborations',
             'logo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',



              ]);

         $data = new Academic_collaboration();
         $data-> academy_name = $request->academy_name;
         $data-> website_url = $request->website_url;


         if($request->file('logo')){
             $file= $request->file('logo');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('logo'), $filename);
             $data['logo']= $filename;
         }


         $data->save();

         toast('Academic_collaborations Added Successfully','success')->autoClose(3000);

         return redirect(route('academics.index'));
     }

     public function edit($academic){
             $academics = Academic_collaboration::find($academic);

           return view('academic.edit',compact('academics'));

     }


 public function update( Request $request,  $academic ){


        $validated = $request->validate([
        'academy_name' => 'required|max:255',
        'website_url' => 'required',
        'logo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);

         $data = Academic_collaboration::find($academic);
         $data-> academy_name = $request->academy_name;
         $data-> website_url = $request->website_url;


           if($request->file('logo')){
                        $file= $request->file('logo');
                        $filename= date('YmdHi').$file->getClientOriginalName();
                        $file-> move(public_path('logo'), $filename);
                        $data->logo= $filename;
            }

         $data->save();


     toast('Academic Collaboration Records  Updated.','info')->autoClose(3000);

     return redirect(route('academics.index'));
 }


 public function destroy(Request $request ,$academic){
     Academic_collaboration::destroy($academic);
     toast('Academic Collaboration Record Deleted. ','error')->autoClose(3000);
     return redirect(route('academics.index'));
 }
}
