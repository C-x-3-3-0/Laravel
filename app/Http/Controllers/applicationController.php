<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Event;

class applicationController extends Controller
{
    public function create($id){
        $request = request();
        $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email',
            'answer' => 'required|max:3|min:2'
        ]);

        $application = new Application();
        $application->email = $request->get('email');
        $application->firstname = $request->get('firstname');
        $application->lastname = $request->get('lastname');
        //$application->answer = $request->get('answer');
        $application->event_id = $id;
        $application->save();

        return redirect('/event'. '/' . $id);
    }

    public function  list($id){
        $event = Event::findOrFail($id);
        $applications = Application::where('answer', 'yes');
        $declinedApplications = Application::where('answer', 'no')->count();

        return view('applications',[
                'id' => $id,
                'applications'=> $applications,
                'declinedApplications' => $declinedApplications,
            ]
    );
    }
}
