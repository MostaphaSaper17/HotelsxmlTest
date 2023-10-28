<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendAgentController extends Controller
{
    public function agent()
    {
        return view('website.agent.home');
    }

    public function booking_list()
    {
        return view('website.agent.booking-list');
    }

    public function profile()
    {
        return view('website.agent.profile');
    }

    public function hotels()
    {
        return view('website.agent.hotels');
    }

    public function hotel_details()
    {
        return view('website.agent.hotel-details');
    }

    public function booking_info()
    {
        return view('website.agent.booking-info');
    }
}
