<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Image;
use Illuminate\Support\Facades\Auth;

class Userimagescontroller extends Controller
{

//User gallery controller
    public function Add( request $req)
    {


         $Image= new Image;
         $Image->user_id=Auth::id();
       $imagename=time().'-'.".".$req->image->extension();
        //dd($imagename);
       $req->image->move(public_path('gallery'), $imagename);
      $Image->image=$imagename;
        //dd($test);
       $Image->save();
       return back()->with('insert','Image added to gallery');

    }
public function Index()
{
     $data=Image::where('user_id',Auth::id())->pluck('image','id');
     //dd($files);
      return view('frontend.profile.Usergallery',['data'=>$data]);

}

public function Delete($id)
{
  $file=Image::find($id);

  if($file->count()){

    $dest=base_path()."\public\gallery"."/".basename($file->image);
      unlink($dest);
      $file->delete();
      return back()->with('delete','Image Deleted');
  }

}
public function Reset(){
    $data=Image::where('user_id',Auth::id())->pluck('image','id');
     //dd($data);
     foreach ($data as $key=>$value) {

    //echo"$key = $value ";
        $dest=base_path()."\public\gallery"."/".basename(  $value);


        unlink($dest);
     $file=Image::find($key);

     $file->delete();

     }

//$data->delete();
     return back()->with('delete',' all Images Deleted');
}

}
//
