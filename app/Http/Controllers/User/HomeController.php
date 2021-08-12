<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\Contact;
use App\Model\user\Guide;
use App\Model\user\Tour;
use App\Model\user\TourSpecial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Home page
	 */
    public function index()
    {
    	$tours = Tour::where('status', 1)->orderBy('created_at', 'DESC')->take(6)->get();
        $specialTours = TourSpecial::where('status', 1)->orderBy('created_at', 'DESC')->take(6)->get();
    	return view('user.home', compact('tours', 'specialTours'));
    }

    /**
     * All tours
     */
    public function allTour()
    {
        $tours = Tour::where('status', 1)->orderBy('created_at', 'DESC')->paginate(18);
        return view('user.pages.tour', compact('tours')); 
    }

    /**
     * All tours special
     */
    public function specialTours()
    {
        $specialTours = TourSpecial::where('status', 1)->orderBy('created_at', 'DESC')->paginate(18);
        return view('user.pages.tour_special', compact('specialTours')); 
    }




    public function singleTours($slug)
    {
        $tour = Tour::where('slug', $slug)->first();
        return view('user.pages.tours_details', compact('tour'));
    }

    /**
     * Get single tour
     */
    public function singleTour(Tour $tour)
    {
    	return view('user.pages.tour_details', compact('tour'));
    }

    /**
     * Get single special tour
     */
    public function singleSpecialTour($specialtour)
    {
        $specialTour = TourSpecial::where('slug', $specialtour)->first();
        return view('user.pages.special_tour_details', compact('specialTour'));
    }

    /**
     * Get contact page
     */
    public function contact_page()
    {
        return view('user.pages.contact');
    }

    public function store_contact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->tour_title = $request->tour_title;
        $contact->message = $request->message;

        $contact->save();
        return redirect()->route('contact.home')->with('success', 'Message send successfully.');

    }

    public function privacy()
    {
        return view('user.pages.privacy');
    }

    public function about()
    {
        return view('user.pages.about');
    }

    public function guide($id)
    {
        $guide = Guide::findOrFail($id);
        return view('user.pages.single_guide', compact('guide'));
    }


}
