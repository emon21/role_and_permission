<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    //login with facebook
    public function facebookRedirect(){
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    public function loginWithFacebook(){
        $user = Socialite::driver('facebook')->stateless()->user();
       // return (array) $user->id;

        $findUser = User::where('facebook_id',$user->id)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect('/home');
        }
        else{

            // $olduser = (array) $user->email;
            // $findUser = User::where('email',$olduser)->first();
            //     if($findUser){
            //         Auth::login($findUser);
            //         return redirect('/home');
            //     }
            $check = User::where('email',$user->email)->first();
            if ($check) {
                $check->facebook_id=$user->id;
                $check->save();
                // update([
                //     'facebook_id'=>$user->id,

                // ]);
                Auth::login($check);
                return redirect('/home');
            }


            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->facebook_id = $user->id;
            $new_user->password = bcrypt('12345678');
            $new_user->save();
            Auth::login($new_user);
            return redirect('/home');
        }
    }

    // login with google
    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogle(){
        $user = Socialite::driver('google')->stateless()->user();
         return (array) $user->id;
        $findUser = User::where('google_id',$user->id)->first();
        $google_id =  (array) $user->id;
        if ($findUser) {
            $findUser->update([
                'google_id' => $google_id,
               // 'github_refresh_token' => $githubUser->refreshToken,
            ]);
        }
        else{
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->google_id = $user->id;
            $new_user->password = bcrypt('12345678');
            $new_user->save();
        }

        Auth::login($findUser);
        return redirect('/home');
    }

    // login with github
    public function githubRedirect(){
        return Socialite::driver('github')->redirect();
    }

    public function loginWithGithub(){
        $user = Socialite::driver('github')->stateless()->user();
        $findUser = User::where('github_id',$user->id)->first();
        // if($findUser){
        //     Auth::login($findUser);
        //     return redirect('/home');
        // }



        if ($findUser) {
            $findUser->update([
                'github_id' => $user->token,
               // 'github_refresh_token' => $githubUser->refreshToken,
            ]);
        }
        else{
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->github_id = $user->id;
            $new_user->password = bcrypt('12345678');
            $new_user->save();
            Auth::login($new_user);
            return redirect('/home');
        }

        Auth::login($user);

        return redirect('/home');
    }

     // login with Linkdin
     public function linkdinRedirect(){
        return Socialite::driver('linkedin')->redirect();
    }

    public function loginWithLinkdin(){

      //  $user = Socialite::driver('linkdin')->stateless()->user();
      //  $findUser = User::where('linkdin_id',$user->id)->first();

        $user = Socialite::driver('linkedin')->user();

        $finduser = User::where('linkdin_id', $user->id)->first();

        if ($finduser) {
            $finduser->update([
                'linkdin_id' => $user->id,
               // 'github_refresh_token' => $githubUser->refreshToken,
            ]);
        // } else {
        //     $user = User::create([
        //         'name' => $githubUser->name,
        //         'email' => $githubUser->email,
        //         'linkdin_id' => $githubUser->id,

        //      //   'github_token' => $githubUser->token,
        //      //   'github_refresh_token' => $githubUser->refreshToken,
        //          'password' => bcrypt('12345678'),

        //     ]);
        // }
        }
        else{
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->linkdin_id = $user->id;
            $new_user->password = bcrypt('12345678');
            $new_user->save();
            Auth::login($new_user);
            return redirect('/home');
        }

        Auth::login($user);

        return redirect('/home');
        // if($findUser){
        //     Auth::login($findUser);
        //     return redirect('/home');
        // }
        // else{
        //     $new_user = new User();
        //     $new_user->name = $user->name;
        //     $new_user->email = $user->email;
        //     $new_user->github_id = $user->id;
        //     $new_user->password = bcrypt('12345678');
        //     $new_user->save();
        //     Auth::login($new_user);
        //     return redirect('/home');
        // }
    }
}
