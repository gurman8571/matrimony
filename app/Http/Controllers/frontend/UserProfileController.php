<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Rules\agevalidation;

use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\Religion;
use App\Models\Caste;
use App\Models\Mothertongue;
use App\Models\Occupation;
use App\Models\Education;
use App\Models\Like;
class UserProfileController extends Controller
{
    public function masterdata()
    {
         $data['country']=Country::where('status',1)->pluck('name','id')->sortByDesc('name');
         $data['caste']=Caste::where('status',1)->OrderBy('name','ASC')->pluck('name','id')->sortByDesc('name');
         $data['religion']=Religion::where('status',1)->OrderBy('name','ASC')->pluck('name','id')->sortByDesc('name');
         $data['language']=Mothertongue::where('status',1)->OrderBy('name','ASC')->pluck('name','id')->sortByDesc('name');
         $data['occupation']=Occupation::where('status',1)->OrderBy('name','ASC')->pluck('name','id')->sortByDesc('name');
         $data['degree']=Education::where('status',1)->OrderBy('name','ASC')->pluck('name','id')->sortByDesc('name');



        return view('frontend.User_profile',['data'=>$data]);
    }



    public function create(request $req)
    {

        $validatedData=$req->validate([
            'age' =>['required' ,new agevalidation],
            //'religion'=>'required',
            //'country'=>'required',
            //'height'=>'required',
            //'Marital_Status'=>'required',
            //'occupation'=>'required',
            //'education_level'=>'required',
              //'caste'=>'required',
           ]);

        $User_id=Auth::id();
        $User = User::find($User_id);



                 $User->gender=$req->Gender;
                 $User->religion_id=$req->Religion;
                 $User->caste_id=$req->Caste;
                 $User->mothertongue_id=$req->language;
                 $User->height=$req->height;
                 $User->age=$req->age;
                 $User->mothertongue_id=$req->language;
                 $User->education_id=$req->degree;
                 $User->education_level=$req->education_level;
                 $User->occupation_id=$req->occupation;
                   $User->income=$req->income;
                 $User->Marital_Status=$req->marital_status;
                  $User->drink=$req->Drink_and_smoke;
                  $User->state_id=$req->state;
                  $User->drink=$req->Drink_and_smoke;
                  $User->diet=$req->diet;
                  $User->summary=$req->summary;
                  $User->country_id=$req->country;

                   $User->source="matrimony.com";



                $User->save();

return redirect ('User_contact');

    }

    //func to get state using ajax
 public function getState( request $req)
 {


$country_id=$req->post('country_id');

          $states = State::where("country_id",$country_id)->pluck('name','id');
return view('frontend.state',compact('states'));


 }


//to check if user profile is completed or not
 public  static function checkUser()
{
if(Auth::check()){
    $User_id=Auth::id();
    $User = User::find($User_id);
 if ($User->religion_id!=NULL && $User_id!=NULL ) {
     return true;
 }
 else{
  return false;
 }
}
}

 //To show authenticated User's profile
public function index()
{
if (UserProfileController::checkUser()) {


$user_id=Auth::id();
$data=User::where('id',$user_id)->get();
$likes=Like::where('profile_id',$user_id)->count();
    return view('frontend.profile.Profile',compact('data','likes'));
}
else{
    return redirect('frontend.User_profile');
}
}

// To delete user's profile
public function delete(){

     $user=Auth::id();
    $user->delete();

    return redirect('/');

}
//TO edit user's profile
public function edit(){

$id=Auth::id();
$data['User']=User::find($id);
$data['data']=$this->masterdata();
//dd($data);


    return view('frontend.profile.edit',compact('data'));

}

// to Update User's Profiles

public function update(request $req)
{

    $validatedData=$req->validate([



        'age'=>[ new agevalidation],
       ]);


$User_id=$req->id;
$User=User::find($User_id);


$User->religion_id=$req->Religion;
$User->caste_id=$req->Caste;
$User->height=$req->height;
$User->age=$req->age;
$User->education_id=$req->degree;
$User->education_level=$req->education_level;
$User->occupation_id=$req->occupation;
  $User->income=$req->income;
$User->Marital_Status=$req->marital_status;
 $User->drink=$req->Drink_and_smoke;
 $User->diet=$req->diet;
 $User->summary=$req->summary;
 $User->phone=$req->phone;
 $User->prefrence=$req->prefrence;
 $User->save();
 return redirect(route('getprofile'));


}

//to enter user's image and contact details
public function Contact(request $req)
{



    $validatedData=$req->validate([


        'phone' => 'required|unique:users'

       ]);


    $User_id=Auth::id();
    $User = User::find($User_id);


             $User->phone=$req->phone;
             $User->prefrence=$req->prefrence;

             $imagename=time().'-'.$User->name.".".$req->image->extension();
             //dd($imagename);
           $req->image->move(public_path('uploads'), $imagename);
           $User->image=$imagename;
             //dd($test);
            $User->save();


return redirect()->route('getprofile');



}

public function Deactivateprofile()
{

    $user_id=Auth::id();
    $user=User::find($user_id);
    if ($user->status == 1) {
        $user->status=0;
        $user->save();
    }
    else{
        $user->status=1;
        $user->save();
    }


    return back();
}

public function EditProfilePic(request $req)
{
       $user_id=Auth::id();
       $user=User::find($user_id);
       $dest=base_path()."\public\uploads"."/".basename($user->image);
      unlink($dest);

      //upload new one
      $imagename=time().'-'.".".$req->image->extension();
     $req->image->move(public_path('uploads'), $imagename);
    $user->image=$imagename;
    $user->save();
return back();
}

}
