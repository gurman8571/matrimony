<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    public function Index(){
        $data=Enquiry::paginate(6);
        return view('admin.Enquiry_index',['data'=>$data]);
    }

    public function status($id)
    {
     $data=Enquiry::find($id);
//dd($data);
     $status =0;
     if ($data->status == 0) {
         $status =1;
      }

     $data->status=$status;
     $data->save();
     return back();
    }
    public function delete($id)
    {
     $data=Enquiry::find($id);
//dd($data);
           $data->delete();
     return back()->with('delete', 'Enquiry deleted!');;
    }


}
