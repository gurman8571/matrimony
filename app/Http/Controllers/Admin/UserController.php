<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\Religion;
use App\Models\Caste;
use App\Models\Mothertongue;
use App\Models\Occupation;
use App\Models\Education;
class UserController extends Controller
{
    public static function calculateuser()
    {
        $data=DB::table('users')

        ->count();
        return $data;

    }

    public static function calculategender()
    {
        $data['male']=DB::table('users')
        ->where('gender', 'male')
        ->where('is_admin',0)
        ->count();

        $data['female']=DB::table('users')
        ->where('gender', 'female')
        ->where('is_admin',0)
        ->count();

//sdd($data);


return $data;
    }


    public static function calculateadmin()
    {
        $data=DB::table('users')
        ->where('is_admin', '1')
        ->count();

      return $data;

    }
    public function index()
    {
         $data['country']=Country::where('status',1)->pluck('name','id')->sortByDesc('name');
         $data['caste']=Caste::where('status',1)->OrderBy('name','ASC')->pluck('name','id')->sortByDesc('name');
         $data['religion']=Religion::where('status',1)->OrderBy('name','ASC')->pluck('name','id')->sortByDesc('name');
         $data['language']=Mothertongue::where('status',1)->OrderBy('name','ASC')->pluck('name','id')->sortByDesc('name');
         $data['occupation']=Occupation::where('status',1)->OrderBy('name','ASC')->pluck('name','id')->sortByDesc('name');
         $data['degree']=Education::where('status',1)->OrderBy('name','ASC')->pluck('name','id')->sortByDesc('name');



        return view('Admin.user',['data'=>$data]);
    }
    public function Insert(request $req)
    {


        $User=new User;
        $User->email=$req->email;
        $User->password=Hash::make("12038493rffw");
        $User->name=$req->username;
       $User->phone=$req->phone;
$User->age=$req->age;
$User->height=$req->height;
//$User->weight=$req->weight;
$User->caste_id=$req->caste;
$User->religion_id=$req->religion;
$User->country_id=$req->country;
$User->state_id=$req->state;
$User->mothertongue_id=$req->language;
$User->education_id=$req->degree;
$User->education_level=$req->education_level;
$User->occupation_id=$req->occupation;
        $User->gender=$req->gender;
$User->prefrence=$req->prefrence;
$User->address=$req->address;
$User->Marital_Status=$req->martial_status;
$User->source="Tribune";
$User->date=$req->date;
$User->summary=$req->summary;

         $User->save();



    }
 public function getStates( request $req)
 {

    // dd($req->all());
//echo"hi";
$country_id=$req->post('country_id');

     //die()
     $states = State::where("country_id",$country_id)->pluck('name','id');
return view('state',compact('states'));


 }
 public function UserIndex(){

    $data=User::where('is_admin',0)->paginate(6,
    ['name','email','id','status','is_admin','phone']);

    //dd($data);
    return view('Admin.Userindex',compact('data'));


    }
    public  function status($id)
    {

        $data=User::find($id);

        $status =0;
        if ($data->status == 0) {
            $status =1;
         }

        $data->status=$status;
        $data->save();
        return back()->with('message', 'User status changed!');
    }
    public function Role($id)
    {
        $data=User::find($id);

        $status =0;
        if ($data->is_admin == 0) {
            $status =1;
         }

        $data->is_admin=$status;
        $data->save();
        return back()->with('message', 'User control changed!');
    }

    public  function delete($id)
    {
       $data=User::find($id);
       $data->delete();
       return back()->with('delete', 'User deleted!');

    }

public function Search(request $req)
{
     $data=User::where('phone',$req->phone)->

     paginate(6,
     ['name','email','id','status','is_admin','phone']);

     //dd($data);
     return view('Admin.Userindex',compact('data'));
}
}
