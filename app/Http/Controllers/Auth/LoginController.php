<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:investor')->except('logout');
    }

    public function showInvestorLoginForm()
    {
        SEOTools::setTitle('Login to Central Java Investment Platform');
        SEOTools::setDescription('by Login in to Central Java Investment Platform you can easily select our investment project and we are here to help');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::addImages('https://cjip.jatengprov.go.id/storage/settings/August2019/esr0C8HmQss78AAnlaue.png');
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@DPMPTSPJateng');
        SEOTools::jsonLd()->addImage('https://cjip.jatengprov.go.id/storage/settings/August2019/esr0C8HmQss78AAnlaue.png');

        return view('login_client', ['url' => 'investor']);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function investorLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        //dd(Auth::guard('investor'));
        if (Auth::guard('investor')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
