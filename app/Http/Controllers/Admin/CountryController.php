<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
class CountryController extends Controller
{
        public function index()
        {
              $data=Country::paginate(6);
              return view('admin.countryindex',['data'=>$data]);      
        }

        public  function status($id)
    {
       $data=Country::find($id);
       
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
       $data=Country::find($id);
       $data->delete();
       return back()->with('delete', 'Country deleted!');
    
    }
    public  function insert(request $req)
   {
            $Country=new Country;
            $Country->name=$req->name;
             $Country->save();
             return back()->with('insert', ' Success! Country added sucessfully');
   }
}
