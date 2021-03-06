<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ListingRepository;
use Illuminate\Databse\Eloquent\Model;
use App\Listing;
use App\Http\Requests\ListingRequest;
use App\Http\Requests\SearchRequest;

class ListingController extends Controller
{
    private $listing;

    public function __construct(Listing $listing)
    {
        $this->listing = new ListingRepository($listing);
    }

    public function index()
    {
        $listings = $this->listing->list();
//        $categories = $this->listing->categories();
        return view('listings.index', compact('listings'));
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(ListingRequest $listing)
    {
        if($listing->validated()->create(request()->merge([
            'user_id' => Auth::id()
        ]))){
            return redirect()->view('listings.index')->with('status', 'Listing was sucessfully created.');
        }
    }


    public function show(Listing $listing)
    {
        return view('listings.show', compact('listing'));
    }


    public function edit($id)
    {
        $listing = $this->listing->find($id);

        return view('listing.edit', compact('listing'));
    }

    public function update()
    {
        if(!$this->listing->update(request()->merge([
            'user_id' => Auth::id()
        ]))) {
            return abort(404);
        }
        return view('listing.show')->with('status', 'Sucessfully updated listing.');
    }

    public function destroy(Lisitng $listing)
    {
        $listing->delete();
//        $request->session()->flash('status', 'Listing was sucessfully deleted.');
        return view('listing.index')->with('status', 'Listing was sucessfully deleted.');

    }

    public function search(SearchRequest $request)
    {
        $listings = $this->listing->search($request->validated());

        return view('listings.index', compact('listings'));
    }
}
