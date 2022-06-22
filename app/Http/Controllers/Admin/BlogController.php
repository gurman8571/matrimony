<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
  public function create(request $req)
  {
    $blog=New Blog;
    $blog->title=$req->title;
    //text editor images storage
    $content = $req->desc;
    $dom = new \DomDocument();
    $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    $imageFile = $dom->getElementsByTagName('img');

    foreach($imageFile as $item => $image){
        $data = $image->getAttribute('src');
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $imgeData = base64_decode($data);
        //dd($imgeData);
        $image_name= "/text_editorimages/". time().$item.'.png';
        $path = public_path() . $image_name;
        file_put_contents($path, $imgeData);

        $image->removeAttribute('src');

        $image->setAttribute('src', asset($image_name));
     }

    $content = $dom->saveHTML();

    $blog->	description=$content;
    $blog->author=auth()->id();

    //banner image storage
    $imagename = time().'-'.".".$req->banner_image->extension();
    $req->banner_image->move(public_path('blogs'), $imagename);
    $blog->banner_image = $imagename;


    $blog->save();
  }


}
