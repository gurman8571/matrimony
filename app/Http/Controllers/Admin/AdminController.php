<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller
{
    public  Function index()
    {
        $data=User::all('id', 'name', 'email','is_admin','religion_id')
        ->where('is_admin',1);
        //dd($data);
        return view ('Admin.AdminControl',['data'=>$data]);
    }

    public  function status($id)
    {
       $data=User::find($id);

       $status =0;
       if ($data->is_admin == 0) {
           $status =1;
        }

       $data->is_admin=$status;
       $data->save();
       return back()->with('message', 'admin control changed!');

    }
    public  function delete($id)
    {
       $data=User::find($id);
       $data->delete();
       return back()->with('delete', 'admin  deleted!');

    }
}
