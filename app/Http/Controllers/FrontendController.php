<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\News;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function home()
    {
        $news = News::latest()->whereActive(1)->limit(3)->get();
        $projects = Project::latest()->whereActive(1)->limit(15)->get();
        return view('frontend.home', [
            'news' => $news,
            'projects' => $projects,
            'metas' => [
                'dd' => 'dd'
            ]
        ]);
    }

    public function team()
    {
        $teams = Team::whereActive(1)->orderBy('position')->get();
        return view('frontend.team', [
            'teams' => $teams
        ]);
    }

    public function about()
    {
        $partners = Partner::whereActive(1)->orderBy('position')->get();
        return view('frontend.about', [
            'partners' => $partners
        ]);
    }

    public function gallery()
    {
        $images = Image::with('gallery')->where('active', 1)->orderBy('position')->get();
        $galleries = Gallery::where('active', 1)->orderBy('position')->get();
        return view('frontend.gallery', [
            'images' => $images,
            'galleries' => $galleries
        ]);
    }

    public function news()
    {
        $news = News::latest()->paginate(20);
        return view('frontend.news', [
            'news' => $news,
        ]);
    }

    public function newsDetail($slug)
    {
        $news = News::whereSlug($slug)->firstOrFail();
        return view('frontend.news-detail', [
            'post' => $news
        ]);
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactUs(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'subject' => 'required|string|max:100',
            'body' => 'required'
        ]);
        Mail::to('info@sefng.org')
            ->send(
                new ContactUsMail(
                    $request->post('subject'),
                    $request->post('body'),
                    $request->post('first_name'),
                    $request->post('last_name')
                )
            );
        return redirect()->back()->with('success', 'Mail sent successfully');
    }

    public function joinNewsLetter(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        if (Subscriber::whereEmail($request->post('email'))->count()) {
            return redirect(url(route('homepage') . '/#newsletter'))->with('message', 'You are already subscribed');
        }
        Subscriber::create([
            'email' => $request->post('email')
        ]);

        return redirect(url(route('homepage') . '/#newsletter'))->with('success', 'You have successfully subscribed to our newsletter');
    }

    public function unsubscribeNewsLetter(Request $request)
    {
        $subscriber = Subscriber::whereEmail($request->get('subscriber'))->firstOrFail();
        $subscriber->delete();
        session()->flash('message', 'You have unsubscribed');
        return redirect()->route('homepage');
    }
}
