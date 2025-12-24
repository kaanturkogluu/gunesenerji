<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

/**
 * Projeler Controller
 */
class ProjectController extends Controller
{
    /**
     * Projeler listesi
     */
    public function index(Request $request)
    {
        $query = Project::query()->latest();
        
        // Kategori filtresi
        if ($request->has('category') && $request->category != 'all') {
            $query->where('category', $request->category);
        }
        
        $projects = $query->paginate(12);
        
        return view('projects.index', compact('projects'));
    }

    /**
     * Proje detay
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        $relatedProjects = Project::where('category', $project->category)
                                  ->where('id', '!=', $project->id)
                                  ->latest()
                                  ->take(3)
                                  ->get();
        
        return view('projects.show', compact('project', 'relatedProjects'));
    }
}
