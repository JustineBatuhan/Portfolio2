<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Message;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        $projects = Project::orderBy('featured', 'desc')->orderBy('sort_order')->get();
        $skills = Skill::orderBy('sort_order')->get()->groupBy('category');
        return view('portfolio.home', compact('projects', 'skills'));
    }

    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:100',
            'subject' => 'required|string|max:200',
            'body'    => 'required|string|max:2000',
        ]);

        Message::create($validated);

        return redirect()->route('home')->with('success', 'Your message has been sent! I will get back to you soon.');
    }
}
