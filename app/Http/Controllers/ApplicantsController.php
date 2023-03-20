<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class ApplicantsController extends Controller
{

    public function dashboard(){
        $role=auth()->user()->user_role;
        if ($role=='job-seeker'){
                return view('layouts.jobseeker.dashboard');
            }
        else if($role=='recruiter'){
                return view('layouts.recruiter.dashboard');
            }
        else if($role=='admin'){
            $applicants= Applicant::orderBy('id','desc')->paginate(10);
       return view('layouts.admin.candidates',compact('applicants'));
            }
    }




    public function candidates()
    {
       $applicants= Applicant::paginate(10);
       return view('layouts.admin.candidates',compact('applicants'));
    }
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $resp='';
        if($request->file()) {
            $resp=$this->fileUpload($request);
        }

        if (empty($request->company_name))
        {
            $request->company_name='NULL';
        }
        $request->validate([
            'surname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],      
            'othernames' => ['max:255'],
            'company_name'=>['max:255'],
            'user_role'=>['required','string','max:20'],   
            'phone' => ['required','string', 'max:25'],         
            'email' => ['required', 'string', 'email', 'max:255'],
         
        ]);

        $user = Applicant::create([
            'title'=>'',
            'surname' => $request->surname,
            'firstname' => $request->firstname,
            'othernames' => $request->othernames,
            'company_name' => $request->company_name,
            'user_role'=>$request->user_role,
            'phone' => $request->phone,
            'email' => $request->email,            
            'status'=>1,
            'cv_url'=>$resp
        ]);

        return redirect('/register')->with(['success'=>'Application received successfully']);
    }
}
