<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Caste;

class CasteController extends Controller
{
   public  function insert(request $req)
   {
            $Caste=new Caste;
            $Caste->name=$req->name;
             $Caste->save();
             return back()->with('insert', ' Success!Caste created sucessfully');
   }

    public  function casteindex()
    {
       $data=Caste::Paginate(6);
       //dd($data);
       return view('admin.casteindex',['data'=>$data]);
    }
    public  function castestatus($id)
    {
       $data=Caste::find($id);
       
       $status =0;
       if ($data->status == 0) {
           $status =1;
        } 
 
       $data->status=$status;
       $data->save();
       return back()->with('message', 'status has been changed!');
    
    }
    public  function castedelete($id)
    {
       $data=Caste::find($id);
       $data->delete();
       return back()->with('delete', 'caste has been deleted!');
    

      }
   
}
