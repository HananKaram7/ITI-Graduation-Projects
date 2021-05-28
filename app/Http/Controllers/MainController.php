<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function home()
    {
        return view('FrontPages.home');
    }
    function thanks()
    {
        return view('FrontPages.thanks');
    }
    function adduser()
    {
        return view('auth.register');
    }

    function crowd()
    {
        return view('FrontPages.crowd');
    }
    function panel()
    {
        return view('FrontPages.panel');
    }


    function workshops()
    {
        return view('FrontPages.workshops');
    }
    function workshopsDs()
    {
        return view('FrontPages.workshopsDs');
    }
    function workshopform()
    {
        return view('FrontPages.workshopform');
    }

    function speakers()
    {
        return view('FrontPages.speakers');
    }


    function contact()
    {
        return view('FrontPages.contact');
    }

    function about()
    {
        return view('FrontPages.about');
    }

    function hackathon()
    {
        return view('FrontPages.Hackathons');
    }


    function hackathonForm()
    {
        return view('hackathon.hackathon');
    }
    function partnersForm()
    {
        return view('partners.partners');
    }
    
    function startupsForm()
    {
        return view('startup.startup');
    }

    function attendeesForm()
    {
        return view('attendee.attendee');
    }

    function partner()
    {
        return view('partners.partner');
    }
}
