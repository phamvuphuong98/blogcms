<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Review::class, 'review');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::orderByDesc('id')->paginate(15);
        return view('admin.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReviewRequest $request)
    {
        $post_data = $request->safe()->except('image');

        if ($request->hasfile('image')) {
            $get_file = $request->file('image')->store('images/reviews');
            $post_data['image'] = $get_file;
        }

        Review::create($post_data);

        return to_route('admin.review.index')->with('message', 'Review Created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        return view('admin.review.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        $post_data = $request->safe()->except('image');

        if ($request->hasfile('image')) {
            Storage::delete($review->image);
            $get_file = $request->file('image')->store('images/reviews');
            $post_data['image'] = $get_file;
        }

        $review->update($post_data);

        return to_route('admin.review.index')->with('message', 'Review Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        if ($review->image != null) {
            Storage::delete($review->image);
        }
        $review->delete();
        return back()->with('message', 'Review Deleted');
    }
}
