<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rule as ValidationRule;

class ListingController extends Controller
{
    // show all listings
    public function index()
    {
        
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->simplePaginate(2)
        ]);
    }
    //Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //show create form
    public function create()
    {
        return view('listings.create');
    }

    //store listings
    public function store(Request $request)
    {
        
        $formFields = $request->validate([
            'job' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);
if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
}
        Listing::create($formFields);
        return redirect('/')->with('message','Listing Created Successfully!');
    }
}
