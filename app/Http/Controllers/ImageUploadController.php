<?php



namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ImageUploadController extends Controller

{


    public function index()

    {
        $users=User::all();
        return view('profile.profile_picture',[
           'users'=>$users,
        ]);

    }


    public function store(Request $request)

    {
       $user= Auth::user();

        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);


        $imageName = Auth::id().'.'.$request->image->extension();
        if(Auth::user()->profile_photo!="profile.png"){

            $path=public_path()."/backend_assets/admin_photo/".Auth::user()->profile_photo;
            //unlink($path);
        }
        $request->image->move(public_path('/backend_assets/admin_photo/'), $imageName);

        User::where('id',Auth::id())->update([
            'profile_photo'=>$imageName,
        ]);
        return back()->with('success','You have successfully upload image.')->with('image',$imageName);

    }

}
