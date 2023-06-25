<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Portfolio::class, 'portfolio');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::orderByDesc('id')->paginate(15);
        return view('admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortfolioRequest $request)
    {
        $post_data['title'] = $request->title;
        $post_data['slug'] = $request->slug;
        $post_data['description'] = $request->description;

        if ($request->hasfile('banner')) {
            $banner = $request->file('banner');
            $get_file_banner = $banner->store('images/portfolios');
            $post_data['banner'] = $get_file_banner;
        }

        if ($request->hasfile('product_photos')) {
            $post_data['product_photos'] = [];
            $product_photos = $request->file('product_photos');
            foreach ($product_photos as $product_photo) {
                $get_file_product_photo = $product_photo->store('images/portfolios');
                array_push($post_data['product_photos'], $get_file_product_photo);
            }
        }

        if ($request->hasfile('a_contents')) {
            $post_data['a_contents'] = [];
            $a_contents = $request->file('a_contents');
            foreach ($a_contents as $a_content) {
                $get_file_a_content = $a_content->store('images/portfolios');
                array_push($post_data['a_contents'], $get_file_a_content);
            }
        }

        if ($request->hasfile('a_content_longs')) {
            $post_data['a_content_longs'] = [];
            $a_content_longs = $request->file('a_content_longs');
            foreach ($a_content_longs as $a_content_long) {
                $get_file_a_content_long= $a_content_long->store('images/portfolios');
                array_push($post_data['a_content_longs'], $get_file_a_content_long);
            }
        }
        if ($request->hasfile('brand_stories')) {
            $post_data['brand_stories'] = [];
            $brand_stories = $request->file('brand_stories');
            foreach ($brand_stories as $brand_story) {
                $get_file_brand_story = $brand_story->store('images/portfolios');
                array_push($post_data['brand_stories'], $get_file_brand_story);
            }
        }
        if ($request->hasfile('brand_story_longs')) {
            $post_data['brand_story_longs'] = [];
            $brand_story_longs = $request->file('brand_story_longs');
            foreach ($brand_story_longs as $brand_story_long) {
                $get_file_brand_story_long = $brand_story_long->store('images/portfolios');
                array_push($post_data['brand_story_longs'], $get_file_brand_story_long);
            }
        }

        if (!empty($request->videos)) {
            $post_data['videos'] = [];
            $videos = explode("\n", $request->videos);
            foreach ($videos as $video) {
                array_push($post_data['videos'], preg_replace('/watch\?v=/', 'embed/', $video));
            }
        }

        if ($request->hasfile('social_post_designs')) {
            $post_data['social_post_designs'] = [];
            $social_post_designs = $request->file('social_post_designs');
            foreach ($social_post_designs as $social_post_design) {
                $get_file_social_post_design = $social_post_design->store('images/portfolios');
                array_push($post_data['social_post_designs'], $get_file_social_post_design);
            }
        }
        
        if ($request->hasfile('packging_designs')) {
            $post_data['packging_designs'] = [];
            $packging_designs = $request->file('packging_designs');
            foreach ($packging_designs as $packging_design) {
                $get_file_packging_design = $packging_design->store('images/portfolios');
                array_push($post_data['packging_designs'], $get_file_packging_design);
            }
        }

        $post_data['product_photos'] = isset($post_data['product_photos']) ? json_encode($post_data['product_photos']) : NULL;
        $post_data['a_contents'] = isset($post_data['a_contents']) ? json_encode($post_data['a_contents']) : NULL;
        $post_data['a_content_longs'] = isset($post_data['a_content_longs']) ? json_encode($post_data['a_content_longs']) : NULL;
        $post_data['brand_stories'] = isset($post_data['brand_stories']) ? json_encode($post_data['brand_stories']) : NULL;
        $post_data['brand_story_longs'] = isset($post_data['brand_story_longs']) ? json_encode($post_data['brand_story_longs']) : NULL;
        $post_data['videos'] = isset($post_data['videos']) ? json_encode($post_data['videos']) : NULL;
        $post_data['social_post_designs'] = isset($post_data['social_post_designs']) ? json_encode($post_data['social_post_designs']) : NULL;
        $post_data['packging_designs'] = isset($post_data['packging_designs']) ? json_encode($post_data['packging_designs']) : NULL;
        Portfolio::create($post_data);

        return to_route('admin.portfolio.index')->with('message', 'Portfolio Created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        $post_data = $request->safe()->except('image');

        $post_data['title'] = $request->title;
        $post_data['slug'] = $request->slug;
        $post_data['description'] = $request->description;
        $post_data['banner'] = $request->banner;

        if ($request->hasfile('banner')) {
            $banner = $request->file('banner');
            $get_file_banner = $banner->store('images/portfolios');
            $post_data['banner'] = $get_file_banner;
        }

        if ($request->hasfile('product_photos')) {
            $post_data['product_photos'] = [];
            $product_photos = $request->file('product_photos');
            foreach ($product_photos as $product_photo) {
                $get_file_product_photo = $product_photo->store('images/portfolios');
                array_push($post_data['product_photos'], $get_file_product_photo);
            }
        }

        if ($request->hasfile('a_contents')) {
            $post_data['a_contents'] = [];
            $a_contents = $request->file('a_contents');
            foreach ($a_contents as $a_content) {
                $get_file_a_content = $a_content->store('images/portfolios');
                array_push($post_data['a_contents'], $get_file_a_content);
            }
        }

        if ($request->hasfile('a_content_longs')) {
            $post_data['a_content_longs'] = [];
            $a_content_longs = $request->file('a_content_longs');
            foreach ($a_content_longs as $a_content_long) {
                $get_file_a_content_long= $a_content_long->store('images/portfolios');
                array_push($post_data['a_content_longs'], $get_file_a_content_long);
            }
        }
        if ($request->hasfile('brand_stories')) {
            $post_data['brand_stories'] = [];
            $brand_stories = $request->file('brand_stories');
            foreach ($brand_stories as $brand_story) {
                $get_file_brand_story = $brand_story->store('images/portfolios');
                array_push($post_data['brand_stories'], $get_file_brand_story);
            }
        }
        if ($request->hasfile('brand_story_longs')) {
            $post_data['brand_story_longs'] = [];
            $brand_story_longs = $request->file('brand_story_longs');
            foreach ($brand_story_longs as $brand_story_long) {
                $get_file_brand_story_long = $brand_story_long->store('images/portfolios');
                array_push($post_data['brand_story_longs'], $get_file_brand_story_long);
            }
        }

        if (!empty($request->videos)) {
            $post_data['videos'] = [];
            $videos = explode("\n", $request->videos);
            foreach ($videos as $video) {
                array_push($post_data['videos'], preg_replace('/watch\?v=/', 'embed/', $video));
            }
        }
        
        if ($request->hasfile('social_post_designs')) {
            $post_data['social_post_designs'] = [];
            $social_post_designs = $request->file('social_post_designs');
            foreach ($social_post_designs as $social_post_design) {
                $get_file_social_post_design = $social_post_design->store('images/portfolios');
                array_push($post_data['social_post_designs'], $get_file_social_post_design);
            }
        }

        if ($request->hasfile('packging_designs')) {
            $post_data['packging_designs'] = [];
            $packging_designs = $request->file('packging_designs');
            foreach ($packging_designs as $packging_design) {
                $get_file_packging_design = $packging_design->store('images/portfolios');
                array_push($post_data['packging_designs'], $get_file_packging_design);
            }
        }

        $post_data['product_photos'] = isset($post_data['product_photos']) ? json_encode($post_data['product_photos']) : $portfolio->product_photos;
        $post_data['a_contents'] = isset($post_data['a_contents']) ? json_encode($post_data['a_contents']) : $portfolio->a_contents;
        $post_data['a_content_longs'] = isset($post_data['a_content_longs']) ? json_encode($post_data['a_content_longs']) : $portfolio->a_content_longs;
        $post_data['brand_stories'] = isset($post_data['brand_stories']) ? json_encode($post_data['brand_stories']) : $portfolio->brand_stories;
        $post_data['brand_story_longs'] = isset($post_data['brand_story_longs']) ? json_encode($post_data['brand_story_longs']) : $portfolio->brand_story_longs;
        $post_data['videos'] = isset($post_data['videos']) ? json_encode($post_data['videos']) : $portfolio->videos;
        $post_data['social_post_designs'] = isset($post_data['social_post_designs']) ? json_encode($post_data['social_post_designs']) : $portfolio->social_post_designs;
        $post_data['packging_designs'] = isset($post_data['packging_designs']) ? json_encode($post_data['packging_designs']) : $portfolio->packging_designs;
        
        $portfolio->update($post_data);

        return to_route('admin.portfolio.index')->with('message', 'Portfolio Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return back()->with('message', 'Portfolio Deleted');
    }

    public function getSlug(Request $request)
    {
        $slug = str($request->title)->slug();
        if (Portfolio::where('slug', $slug)->exists()) {
            $slug = $slug . '-' . Str::random(2);
            return response()->json(['slug' => $slug]);
        } else {
            return response()->json(['slug' => $slug]);
        }
    }

    public function search(Request $request)
    {
        $searched_text = $request->input('search');

        $portfolios = Portfolio::query()->where('title', 'LIKE', "%{$searched_text}%")
        ->paginate(10);

        // Return the search view with the resluts
        return view('admin.portfolio.search', compact('portfolios'));
    }
}
