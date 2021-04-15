<?php

namespace App\Http\Controllers;

use App\Events\NewsCreated;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\News;
use App\Models\Partner;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Team;
use App\Models\User;

class DashboardController extends Controller
{
    //

    public function index()
    {
        return view('admin.dashboard');
    }

    public function team()
    {
        return view('admin.team');
    }

    public function updateTeamOrder(Request $request)
    {
        foreach ($request->order as $position => $id) {
            $team = Team::find($id);
            $team->position = $position;
            $team->save();
        }
        return 'Ok';
    }

    public function sortPartners(Request $request)
    {
        foreach ($request->order as $position => $id) {
            $partner = Partner::find($id);
            $partner->position = $position;
            $partner->save();
        }
        return 'Ok';
    }

    public function sortProjects(Request $request)
    {
        foreach ($request->order as $position => $id) {
            $project = Project::find($id);
            $project->position = $position;
            $project->save();
        }
        return "ok";
    }

    public function sortGalleries(Request $request)
    {
        foreach ($request->order as $position => $id) {
            $gallery = Gallery::find($id);
            $gallery->position = $position;
            $gallery->save();
        }
        return "ok";
    }

    public function sortImages(Request $request)
    {
        foreach ($request->order as $position => $id) {
            $project = Image::where(['id' => $id, 'gallery_id' => request()->gallery_id])->firstOrFail();
            $project->position = $position;
            $project->save();
        }
        return "ok";
    }

    public function deleteTeam(Request $request)
    {
        $team = Team::findOrFail($request->id);
        $team->delete();
        return redirect()->back()->with('message', 'Deleted Successfully');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function editTeam()
    {
        return view('admin.team-edit');
    }

    public function partners()
    {
        return view('admin.partners.list');
    }

    public function editPartner()
    {
        return view('admin.partners.edit');
    }

    public function deletePartner($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();
        return redirect()->back()->with('message', 'Deleted Successfully');
    }

    public function projects()
    {
        return view('admin.projects.list');
    }

    public function editProject()
    {
        return view('admin.projects.edit');
    }

    public function deleteProject($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->back()->with('message', 'Deleted Successfully');
    }

    public function galleries()
    {
        return view('admin.galleries.list');
    }

    public function editGallery()
    {
        return view('admin.galleries.edit');
    }

    public function deleteGallery($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return redirect()->back()->with('message', 'Deleted Successfully');
    }

    public function editImage()
    {
        return view('admin.images.edit');
    }

    public function deleteImage($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();
        return redirect()->back()->with('message', 'Deleted Successfully');
    }

    public function news()
    {
        $news = News::latest()->get();
        return view('admin.news.list', [
            'news' => $news,
        ]);
    }

    public function createNews()
    {
        return view('admin.news.create');
    }

    public function storeNews(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image',
            'body' => 'required|min:20',
        ]);
        $news = auth()->user()->news()->create([
            'title' => $request->post('title'),
            'image_url' => basename($request->file('image')->store('public/uploads')),
            'body' => $request->post('body')
        ]);
        NewsCreated::dispatch($news);
        session()->flash('success', 'News created successfully');
        return redirect()->route('admin-news');
    }

    public function editNews($id)
    {
        $post = News::findOrFail($id);
        return view('admin.news.edit', [
            'post' => $post
        ]);
    }

    public function updateNews(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
            'body' => 'required|min:20',
        ]);

        $post = News::find($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        if ($request->hasFile('image')) {
            $post->image_url = basename($request->file('image')->store('public/uploads'));
        }
        $post->save();
        return redirect()->back()->with('success', 'Updated Successfully');
    }

    public function deleteNews($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->back()->with('message', 'Deleted Successfully');
    }

    public function changePasswordForm()
    {
        return view('admin.change-password');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'password',
            'password' => 'required|string|min:6|max:50|confirmed',
        ]);
        $user = User::find(auth()->id());
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->back()->with('message', 'Password changed successfully');
    }
}
