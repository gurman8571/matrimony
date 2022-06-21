<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Story;
class WeddingStoryController extends Controller
{


    public function index(){

        $stories=Story::paginate(6);
        //dd($stories);

        return view('admin.Story',compact('stories'));

    }

    public function delete($id)
    {
        $story=Story::find($id);
        $dest=base_path()."\public\wedding stories"."/".basename($story->image);
        unlink($dest);
        $story->delete();
        return back()->with('delete', 'Story deleted');
    }

    public function preview( $id)
    {
        $data=Story::find($id);
        //dd($data);
        return view('admin.StoryPreview',compact('data'));
    }
//finction to toggle the on display
    public  function Display($id)
    {
       $data=Story::find($id);
       $count=Story::where('ondisplay',1)->count();


       if($count<3){
        $status =0;
       if ($data->ondisplay == 0) {
           $status =1;
        }

       $data->ondisplay=$status;
       $data->save();
       return back()->with('message', 'Display Control changed!');
                   }
                   else{


                    if ($data->ondisplay == 1) {
                        $status = 0;
                        $data->ondisplay=$status;
                        $data->save();
                        return back()->with('message', 'Display Control changed!');

                     }
                     else{
                        return back()->with('delete', ' oops!Maximum stories on display remove any previous story first');
                     }

                   }


    }


}
