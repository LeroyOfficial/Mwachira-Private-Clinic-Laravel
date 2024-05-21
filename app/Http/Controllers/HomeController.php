<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\Staff;
use App\Models\Info;
use App\Models\Client;
use App\Models\Contact;


class HomeController extends Controller
{
    //

    public function index()
		{
            $check = User::count();
            if($check == 0)
                {
                    $data = new User;
                    $data->name = "Mwachira Admin";
                    $data->email = "admin@mwachira.com";
                    $data->email_verified_at = null;
                    //$table->rememberToken();
                    $data->password = "$2y$10$vnKHk5v5KfEfIGJYZ1FQoe1E8BjY90EMZVHwmZ5zF/9g0v.9tH0Di";
                    $data->current_team_id = null;
                    $data->profile_photo_path = null;
                    $data->created_at = Carbon->now();
                    $data->updated_at = Carbon->now();

                    $data->save();
                }

            $contact_check = Info::count();

            if($contact_check == 0)
                {
                    $data = new Info;
                    $data->name = "phone_number";
                    $data->details = "+265 888 327 385";
                    $data->save();

                    $data = new Info;
                    $data->name = "email_address_1";
                    $data->details = "mwachira@gmail.com";
                    $data->save();

                    $data = new Info;
                    $data->name = "email_address_2";
                    $data->details = "mwachira@gmail.com";
                    $data->save();

                    return redirect('/');
                }

            $info = Info::all();
            $staffcount = Staff::count();
            $staff = Staff::take(4)->get();
            $serviceCount = Service::count();
            $services = Service::latest()->take(3)->get();

            return view ('User.home',compact('info','serviceCount','services','staffcount','staff'));
            // if(Auth::id())
            //     {
            //         return redirect('admin/dashboard');
            //     }
            // else
            //     {

            //         return view ('User.home');
            //     }
        }

    public function clients()
        {
            $clientcount = Client::count();
            $clients = Client::all();
            $info = Info::all();
            return view('user.clients',compact('clientcount','clients','info'));
        }

    public function who_we_are()
        {
            $info = Info::all();
            return view('user.who_we_are',compact('info'));
        }

    public function management()
        {
            $info = Info::all();
            $staffcount = Staff::count();
            $staff = Staff::all();
            return view('user.management',compact('info','staffcount','staff'));
        }

    public function contact()
        {
            $info = Info::all();
            return view('user.contact',compact('info'));
        }

    public function new_contact(Request $request)
        {
            $data = new Contact;
            $data->first_name = $request->fname;
            $data->last_name = $request->lname;
            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->message = $request->message;
            $data->status = "not seen";
            $data->save();
            return redirect()->back()->with('message','you have successfully sent us a message');
        }

    public function services()
        {
            $services = Service::all();
            $serviceCount = Service::count();
            $info = Info::all();
            return view('user.services',compact('serviceCount','services','info'));
        }

    public function appointment()
        {
            $info = Info::all();
            return view('user.appointment',compact('info'));
        }

    public function post_appointment(Request $request)
        {
            $data = new Appointment;

            $data->first_name = $request->fname;
            $data->last_name = $request->lname;
            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->date = $request->date;
            $data->time = $request->time;
            $data->reason = $request->reason;
            $data->status = "not seen";

            $data->save();

            return redirect()->back()->with('message','you have successfully booked an appointment');
        }
}
