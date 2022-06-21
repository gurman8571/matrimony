<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
class EducationController extends Controller
{
    public  function insert(request $req)
    {
             $Education=new Education;
             $Education->name=$req->name;
              $Education->save();
              return back()->with('insert', ' Success! Degree added sucessfully');
    }

     public  function index()
     {
        $data=Education::Paginate(6);
        //dd($data);
        return view('admin.Education_index',['data'=>$data]);
     }
     public  function status($id)
     {
        $data=Education::find($id);

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
        $data=Education::find($id);
        $data->delete();
        return back()->with('delete', 'education deleted!');

     }
}
