<?php



namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\UserInvestor;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;



class SocialController extends Controller

{



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function Callback($provider){
        $userSocial =   Socialite::driver($provider)->stateless()->user();
        $users       =   UserInvestor::where(['email' => $userSocial->getEmail()])->first();
        //dd($users);
        if($users){
            Auth::guard('investor')->login($users);
            return redirect('/dashboard/'.$users->id);
        }else{
            $user = UserInvestor::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
            ]);
            return redirect()->route('homey2');
        }
    }

}
