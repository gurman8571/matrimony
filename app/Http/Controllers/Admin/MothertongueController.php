<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mothertongue;
class MothertongueController extends Controller
{

   public  function insert(request $req)
   {
            $Mothertongue=new Mothertongue;
            $Mothertongue->name=$req->name;
             $Mothertongue->save();
             return back()->with('insert', ' Success! mother tongue added sucessfully');
   }

    public  function index()
    {
       $data=Mothertongue::Paginate(6);
       //dd($data);
       return view('admin.mothertongue_index',['data'=>$data]);
    }
    public  function status($id)
    {
       $data=Mothertongue::find($id);

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
       $data=Mothertongue::find($id);
       $data->delete();
       return back()->with('delete', 'mothertongue deleted!');

    }
}
