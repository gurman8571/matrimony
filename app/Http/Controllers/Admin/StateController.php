<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Country;
class StateController extends Controller
{
    public function index()
    {
          $data['state']=State::paginate(6);
          $data['country']=country::pluck('name','id');

          return view('admin.Stateindex',['data'=>$data]);

    }

    public  function status($id)
{
   $data=State::find($id);

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
   $data=State::find($id);
   $data->delete();
   return back()->with('delete', 'State deleted!');

}
public  function insert(request $req)
{


        $State=new State;
        $State->name=$req->name;
        $State->country_id=$req->input('country');

         $State->save();
         return back()->with('insert', ' Success! State added sucessfully');
}
}
