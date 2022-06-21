<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Occupation;
class OccupationController extends Controller
{

   public  function insert(request $req)
   {
            $Occupation=new Occupation;
            $Occupation->name=$req->name;
             $Occupation->save();
             return back()->with('insert', ' Success! Occupation added sucessfully');
   }
    public  function index()
    {
       $data=Occupation::Paginate(6);
       //dd($data);
       return view('admin.Occupation_index',['data'=>$data]);
    }
    public  function status($id)
    {
       $data=Occupation::find($id);
       
       $status =0;
       if ($data->status == 0) {
           $status =1;
        } 
 
       $data->status=$status;
       $data->save();
       return back()->with('message', 'status changed!');
    
    }
    public  function delete($id)
    {
       $data=Occupation::find($id);
       $data->delete();
       return back()->with('delete', 'caste deleted!');
    
    }
}
