<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employment_partner;
class EmploymentPartnerController extends Controller
{
    
public function index(Employment_partner $employment_partner){
    $employment_partners = Employment_partner::all();
    return view('Employment_partners.index',compact('employment_partners'));
    }
    
        public function create(){
            return view('Employment_partners.create');
        }
    
        public function store(Request $request){
    
           $validated = $request->validate([

                'name' => 'required|max:255|unique:employment_partners',
                'logo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'address'=>'required',
                'website' => 'required|unique:employment_partners',
               
                 ]);
    
            $data = new Employment_partner();
            $data->name = $request->name;
            if($request->file('logo')){
                $file= $request->file('logo');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('logo'), $filename);
                $data['logo']= $filename;
    }
            $data ->address =$request->address;
            $data->website = $request->website;
            $data ->added_by =$request->added_by;
            $data ->extra =$request->extra;
        
            $data->save();
    
            toast('Employment_partners Added Successfully','success')->autoClose(3000);
          
            return redirect(route('employment_partners.index'));
        }
    
        public function edit($employment_partner){
                $employment_partners = Employment_partner::find($employment_partner);
               
              return view('Employment_partners.edit',compact('employment_partners'));
               
        }
    
        
    public function update( Request $request,Employment_partner $employment_partner ){
        $validated = $request->validate([

            'name' => 'required|max:255|unique:employment_partners',
            'logo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address'=>'required',
            'website' => 'required|unique:employment_partners',
            ]);

           if($request->file('logo')){
            $file= $request->file('logo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('logo'), $filename);
            $employment_partner['logo']= $filename;
            }
            else{
                unset($employment_partner['logo']);
            }
    
             $employment_partner->update($validated);
       
        toast('Employment_partner Records  Updated.','info')->autoClose(3000);
    
        return redirect(route('employment_partners.index'));
    }
    
    
    public function destroy(Request $request ,$employment_partner){
        Employment_partner::destroy($employment_partner);
        toast('Employment_partner Record Deleted. ','warning')->autoClose(3000);
        return redirect(route('employment_partners.index'));
    }
}
