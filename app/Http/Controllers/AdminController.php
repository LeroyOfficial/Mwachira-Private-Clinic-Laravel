<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\Staff;
use App\Models\Info;
use App\Models\Client;
use App\Models\Contact;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
        {
            $unreadAppointsCount = Appointment::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadAppoints = Appointment::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readAppoints = Appointment::where('status','seen')->orderBy('created_at','DESC')->get();

            $unreadMessageCount = Contact::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadMessages = Contact::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readMessages = Contact::where('status','seen')->orderBy('created_at','DESC')->get();

            return view('admin.home', compact('unreadAppointsCount','unreadAppoints','readAppoints','unreadMessageCount','unreadMessages','readMessages'));
        }

    public function appointments()
        {
            $appointments = Appointment::all();
            $unreadAppointsCount = Appointment::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadAppoints = Appointment::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readAppoints = Appointment::where('status','seen')->orderBy('created_at','DESC')->get();

            $unreadMessageCount = Contact::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadMessages = Contact::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readMessages = Contact::where('status','seen')->orderBy('created_at','DESC')->get();

            return view('admin.appointments',compact('appointments','unreadAppointsCount','unreadAppoints','readAppoints','unreadMessageCount','unreadMessages','readMessages'));
        }

    public function appointment($id)
        {
            $appointment = Appointment::find($id);
            $data = $appointment;

            if($data->status == 'not seen')
                {
                    $data->status = 'seen';
                    $data->save();
                }

            $unreadAppointsCount = Appointment::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadAppoints = Appointment::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readAppoints = Appointment::where('status','seen')->orderBy('created_at','DESC')->get();

            $unreadMessageCount = Contact::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadMessages = Contact::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readMessages = Contact::where('status','seen')->orderBy('created_at','DESC')->get();

            return view('admin.appointment',compact('appointment','unreadAppointsCount','unreadAppoints','readAppoints','unreadMessageCount','unreadMessages','readMessages'));
        }

    public function messages()
        {
            $messages = Contact::all();
            $unreadAppointsCount = Appointment::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadAppoints = Appointment::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readAppoints = Appointment::where('status','seen')->orderBy('created_at','DESC')->get();

            $unreadMessageCount = Contact::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadMessages = Contact::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readMessages = Contact::where('status','seen')->orderBy('created_at','DESC')->get();

            return view('admin.messages',compact('messages','unreadAppointsCount','unreadAppoints','readAppoints','unreadMessageCount','unreadMessages','readMessages'));
        }

    public function message($id)
        {
            $message = Contact::find($id);
            $data = $message;

            if($data->status == 'not seen')
                {
                    $data->status = 'seen';
                    $data->save();
                }

            $unreadAppointsCount = Appointment::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadAppoints = Appointment::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readAppoints = Appointment::where('status','seen')->orderBy('created_at','DESC')->get();

            $unreadMessageCount = Contact::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadMessages = Contact::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readMessages = Contact::where('status','seen')->orderBy('created_at','DESC')->get();

            return view('admin.message',compact('message','unreadAppointsCount','unreadAppoints','readAppoints','unreadMessageCount','unreadMessages','readMessages'));
        }

    public function services()
        {
            $services = Service::all();
            $unreadAppointsCount = Appointment::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadAppoints = Appointment::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readAppoints = Appointment::where('status','seen')->orderBy('created_at','DESC')->get();

            $unreadMessageCount = Contact::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadMessages = Contact::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readMessages = Contact::where('status','seen')->orderBy('created_at','DESC')->get();
            return view('admin.services',compact('services','unreadAppointsCount','unreadAppoints','readAppoints','unreadMessageCount','unreadMessages','readMessages'));
        }

    public function service($id)
        {
            $service = Service::find($id);
            $unreadAppointsCount = Appointment::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadAppoints = Appointment::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readAppoints = Appointment::where('status','seen')->orderBy('created_at','DESC')->get();

            $unreadMessageCount = Contact::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadMessages = Contact::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readMessages = Contact::where('status','seen')->orderBy('created_at','DESC')->get();
            return view('admin.service_info',compact('service','unreadAppointsCount','unreadAppoints','readAppoints','unreadMessageCount','unreadMessages','readMessages'));
        }

    public function new_service()
        {
            $unreadAppointsCount = Appointment::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadAppoints = Appointment::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readAppoints = Appointment::where('status','seen')->orderBy('created_at','DESC')->get();

            $unreadMessageCount = Contact::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadMessages = Contact::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readMessages = Contact::where('status','seen')->orderBy('created_at','DESC')->get();

            return view('admin.new_service',compact('unreadAppointsCount','unreadAppoints','readAppoints','unreadMessageCount','unreadMessages','readMessages'));
        }

    public function post_service(Request $request)
        {
            $data = new Service;
            $data->name = $request->name;

            $image = $request->image;
            if ($image)
                {
                    $imagename = 'Service'.'-'.$request->fname.'_'.$request->lname.'_'.time().'.'.$image->getClientoriginalExtension();
                    $image->move('Service_Pics',$imagename);
                    $data->image = $imagename;
                }

            $data->details = $request->details;
            $data->save();

            return redirect('/admin/services');
        }

    public function update_service(Request $request, $id)
        {
            $data = Service::find($id);
            $data->name = $request->name;

            $image = $request->image;
            if ($image)
                {
                    $imagename = 'Service'.'-'.$request->fname.'_'.$request->lname.'_'.time().'.'.$image->getClientoriginalExtension();
                    $image->move('Service_Pics',$imagename);
                    $data->image = $imagename;
                }

            $data->details = $request->details;
            $data->save();

            return redirect('/admin/services');
        }


    public function all_staff()
        {
            $staff = Staff::all();
            $unreadAppointsCount = Appointment::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadAppoints = Appointment::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readAppoints = Appointment::where('status','seen')->orderBy('created_at','DESC')->get();

            $unreadMessageCount = Contact::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadMessages = Contact::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readMessages = Contact::where('status','seen')->orderBy('created_at','DESC')->get();
            return view('admin.all_staff',compact('staff','unreadAppointsCount','unreadAppoints','readAppoints','unreadMessageCount','unreadMessages','readMessages'));
        }

    public function staff($id)
        {
            $staff = Staff::find($id);
            $unreadAppointsCount = Appointment::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadAppoints = Appointment::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readAppoints = Appointment::where('status','seen')->orderBy('created_at','DESC')->get();

            $unreadMessageCount = Contact::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadMessages = Contact::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readMessages = Contact::where('status','seen')->orderBy('created_at','DESC')->get();
            return view('admin.staff_info',compact('staff','unreadAppointsCount','unreadAppoints','readAppoints','unreadMessageCount','unreadMessages','readMessages'));
        }

    public function new_staff()
        {
            $unreadAppointsCount = Appointment::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadAppoints = Appointment::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readAppoints = Appointment::where('status','seen')->orderBy('created_at','DESC')->get();

            $unreadMessageCount = Contact::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadMessages = Contact::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readMessages = Contact::where('status','seen')->orderBy('created_at','DESC')->get();
            return view('admin.new_staff',compact('unreadAppointsCount','unreadAppoints','readAppoints','unreadMessageCount','unreadMessages','readMessages'));
        }

    public function post_staff(Request $request)
        {
            $data = new Staff;
            $data->first_name = $request->fname;
            $data->last_name = $request->lname;

            $image = $request->image;
            if ($image)
                {
                    $imagename = 'Staff'.'-'.$request->fname.'_'.$request->lname.'_'.time().'.'.$image->getClientoriginalExtension();
                    $image->move('Staff_Pics',$imagename);
                    $data->image = $imagename;
                }

            $data->position = $request->position;
            $data->save();

            return redirect('/admin/all_staff/');
        }

    public function update_staff(Request $request, $id)
        {
            $data = Staff::find($id);
            $data->first_name = $request->fname;
            $data->last_name = $request->lname;

            $image = $request->image;
            if ($image)
                {
                    $imagename = 'Staff'.'-'.$request->fname.'_'.$request->lname.'_'.time().'.'.$image->getClientoriginalExtension();
                    $image->move('Staff_Pics',$imagename);
                    $data->image = $imagename;
                }

            $data->position = $request->position;
            $data->save();

            return redirect('/admin/all_staff/');
        }

    public function reviews()
        {
            $reviews = Client::all();
            $unreadAppointsCount = Appointment::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadAppoints = Appointment::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readAppoints = Appointment::where('status','seen')->orderBy('created_at','DESC')->get();

            $unreadMessageCount = Contact::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadMessages = Contact::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readMessages = Contact::where('status','seen')->orderBy('created_at','DESC')->get();
            return view('admin.reviews',compact('reviews','unreadAppointsCount','unreadAppoints','readAppoints','unreadMessageCount','unreadMessages','readMessages'));
        }

    public function review()
        {
            $reviews = Client::find($id);
            $unreadAppointsCount = Appointment::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadAppoints = Appointment::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readAppoints = Appointment::where('status','seen')->orderBy('created_at','DESC')->get();

            $unreadMessageCount = Contact::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadMessages = Contact::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readMessages = Contact::where('status','seen')->orderBy('created_at','DESC')->get();
            return view('admin.review',compact('review','unreadAppointsCount','unreadAppoints','readAppoints','unreadMessageCount','unreadMessages','readMessages'));
        }

    public function new_review()
        {
            $unreadAppointsCount = Appointment::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadAppoints = Appointment::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readAppoints = Appointment::where('status','seen')->orderBy('created_at','DESC')->get();

            $unreadMessageCount = Contact::where('status','not seen')->orderBy('created_at','DESC')->count();
            $unreadMessages = Contact::where('status','not seen')->orderBy('created_at','DESC')->get();
            $readMessages = Contact::where('status','seen')->orderBy('created_at','DESC')->get();

            return view('admin.new_review',compact('unreadAppointsCount','unreadAppoints','readAppoints','unreadMessageCount','unreadMessages','readMessages'));
        }

    public function post_review(Request $request)
        {
            $data = new Client;
            $data->first_name = $request->fname;
            $data->last_name = $request->lname;

            $image = $request->image;
            if ($image)
                {
                    $imagename = 'Client'.'-'.$request->fname.'_'.$request->lname.'_'.time().'.'.$image->getClientoriginalExtension();
                    $image->move('client_Pics',$imagename);
                    $data->image = $imagename;
                }

            $data->message = $request->message;
            $data->save();

            return redirect('/admin/reviews');

        }

    public function update_review(Request $request, $id)
        {
            $data = Client::find($id);
            $data->first_name = $request->fname;
            $data->last_name = $request->lname;

            $image = $request->image;
            if ($image)
                {
                    $imagename = 'Client'.'-'.$request->fname.'_'.$request->lname.'_'.time().'.'.$image->getClientoriginalExtension();
                    $image->move('client_Pics',$imagename);
                    $data->image = $imagename;
                }

            $data->message = $request->message;
            $data->save();

            return redirect('/admin/reviews');

        }

}
