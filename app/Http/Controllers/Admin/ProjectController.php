<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * Admin Project Controller - Basit CRUD
 */
class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(20);
        return view('admin.projects.index', compact('projects'));
    }

    public function create() { return view('admin.projects.create'); }
    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'location' => 'nullable|max:255',
            'capacity' => 'nullable|max:255',
            'category' => 'required|in:ges,res,biyokutle,danismanlik',
        ]);
        $validated['slug'] = Str::slug($validated['title']);
        Project::create($validated);
        return redirect()->route('admin.projects.index')->with('success', 'Proje oluşturuldu.');
    }
    public function edit(Project $project) { return view('admin.projects.edit', compact('project')); }
    public function update(Request $request, Project $project) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'location' => 'nullable|max:255',
            'capacity' => 'nullable|max:255',
            'category' => 'required|in:ges,res,biyokutle,danismanlik',
        ]);
        $validated['slug'] = Str::slug($validated['title']);
        $project->update($validated);
        return redirect()->route('admin.projects.index')->with('success', 'Proje güncellendi.');
    }
    public function destroy(Project $project) {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Proje silindi.');
    }
    public function show(Project $project) { return redirect()->route('admin.projects.edit', $project); }
}
