<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Religion;

class ReligionController extends Controller
{
   public  function insert(request $req)
   {
            $Religion=new Religion;
            $Religion->name=$req->name;
             $Religion->save();
      return back()->with('insert', 'religion created!');
   }
    public  function religionindex()
    {
       $data=Religion::Paginate(6);
       //dd($data);
       return view('admin.religion_index',['data'=>$data]);
    }
    public  function religionstatus($id)
    {
       $data=Religion::find($id);
       
       $status =0;
       if ($data->status == 0) {
           $status =1;
        } 
 
       $data->status=$status;
       $data->save();
       return back()->with('message', 'status changed!');
    
    }
    public  function religiondelete($id)
    {
       $data=Religion::find($id);
       $data->delete();
       return back()->with('delete', 'religion deleted!');
    
    }

}
