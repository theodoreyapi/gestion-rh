<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\ProjectManager;
use App\Models\ProjectTag;
use App\Models\ProjectTeamLeader;
use App\Models\ProjectTeamMember;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        $projects = DB::table('projects')
            ->leftJoin('clients', 'projects.client_id', '=', 'clients.id_client')
            ->leftJoin('project_managers', 'projects.id_project', '=', 'project_managers.project_id')
            ->leftJoin('users as managers', 'project_managers.manager_id', '=', 'managers.id')
            ->leftJoin('project_team_leaders', 'projects.id_project', '=', 'project_team_leaders.project_id')
            ->leftJoin('users as leaders', 'project_team_leaders.leader_id', '=', 'leaders.id')
            ->leftJoin('project_team_members', 'projects.id_project', '=', 'project_team_members.project_id')
            ->leftJoin('users as members', 'project_team_members.member_id', '=', 'members.id')
            ->leftJoin('project_tags', 'projects.id_project', '=', 'project_tags.project_id')
            ->select(
                'projects.id_project',
                'projects.project_code',
                'projects.name as project_name',
                'projects.start_date',
                'projects.end_date',
                'projects.priority',
                'projects.project_value',
                'projects.price_type',
                'projects.description',
                'projects.status',
                'clients.name as client_name',
                'clients.company as client_company',
                DB::raw('GROUP_CONCAT(DISTINCT managers.name SEPARATOR ", ") as manager_names'),
                DB::raw('GROUP_CONCAT(DISTINCT leaders.name SEPARATOR ", ") as leader_names'),
                DB::raw('GROUP_CONCAT(DISTINCT members.name SEPARATOR ", ") as member_names'),
                DB::raw('GROUP_CONCAT(DISTINCT project_tags.tag SEPARATOR ", ") as tags')
            )
            ->groupBy(
                'projects.id_project',
                'projects.project_code',
                'projects.name',
                'projects.start_date',
                'projects.end_date',
                'projects.priority',
                'projects.project_value',
                'projects.price_type',
                'projects.description',
                'projects.status',
                'clients.name',
                'clients.company'
            )
            ->orderBy('projects.id_project', 'desc')
            ->get();

        $users = User::all();

        return view('project.projects', compact('projects', 'clients', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ✅ Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'client_id' => 'nullable|exists:clients,id_client',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'priority' => 'nullable|in:High,Medium,Low',
            'project_value' => 'nullable|numeric',
            'price_type' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:Active,Inactive',
            'logo' => 'nullable|image|max:4096',
            'file' => 'nullable|file|max:10240',
        ]);

        $validated['start_date'] = Carbon::createFromFormat('d-m-Y', $validated['start_date'])->format('Y-m-d');
        $validated['end_date']   = Carbon::createFromFormat('d-m-Y', $validated['end_date'])->format('Y-m-d');

        // ✅ Génération d’un code unique de projet
        $validated['project_code'] = 'PRO-' . str_pad(Project::count() + 1, 4, '0', STR_PAD_LEFT);

        // ✅ Gestion du logo
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('projects/logos', 'public');
        }

        // ✅ Gestion du fichier joint
        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('projects/files', 'public');
        }

        // ✅ Création du projet
        $project = Project::create($validated);

        // ✅ Enregistrement des membres de l’équipe
        if ($request->filled('team_members')) {
            foreach ($request->team_members as $member_id) {
                ProjectTeamMember::create([
                    'project_id' => $project->id_project,
                    'member_id' => $member_id,
                ]);
            }
        }

        // ✅ Enregistrement des leaders
        if ($request->filled('team_leaders')) {
            foreach ($request->team_leaders as $leader_id) {
                ProjectTeamLeader::create([
                    'project_id' => $project->id_project,
                    'leader_id' => $leader_id,
                ]);
            }
        }

        // ✅ Enregistrement des managers
        if ($request->filled('managers')) {
            foreach ($request->managers as $manager_id) {
                ProjectManager::create([
                    'project_id' => $project->id_project,
                    'manager_id' => $manager_id,
                ]);
            }
        }

        // ✅ Enregistrement des tags
        if ($request->filled('tags')) {
            foreach ($request->tags as $tag) {
                ProjectTag::create([
                    'project_id' => $project->id_project,
                    'tag' => $tag,
                ]);
            }
        }

        return redirect()->back()->with('succes', 'Projet enregistré avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $clients = Client::all();
        $project = DB::table('projects')
            ->leftJoin('clients', 'projects.client_id', '=', 'clients.id_client')
            ->leftJoin('project_managers', 'projects.id_project', '=', 'project_managers.project_id')
            ->leftJoin('users as managers', 'project_managers.manager_id', '=', 'managers.id')
            ->leftJoin('project_team_leaders', 'projects.id_project', '=', 'project_team_leaders.project_id')
            ->leftJoin('users as leaders', 'project_team_leaders.leader_id', '=', 'leaders.id')
            ->leftJoin('project_team_members', 'projects.id_project', '=', 'project_team_members.project_id')
            ->leftJoin('users as members', 'project_team_members.member_id', '=', 'members.id')
            ->leftJoin('project_tags', 'projects.id_project', '=', 'project_tags.project_id')
            ->select(
                'projects.id_project',
                'projects.project_code',
                'projects.name as project_name',
                'projects.start_date',
                'projects.end_date',
                'projects.priority',
                'projects.project_value',
                'projects.price_type',
                'projects.description',
                'projects.status',
                'projects.created_at',
                'clients.name as client_name',
                'clients.company as client_company',
                DB::raw('GROUP_CONCAT(DISTINCT managers.name) as manager_names'),
                DB::raw('GROUP_CONCAT(DISTINCT leaders.name) as leader_names'),
                DB::raw('GROUP_CONCAT(DISTINCT members.name) as member_names'),
                DB::raw('GROUP_CONCAT(DISTINCT project_tags.tag) as tags')
            )
            ->where('projects.id_project', $id)
            ->groupBy(
                'projects.id_project',
                'projects.project_code',
                'projects.name',
                'projects.start_date',
                'projects.end_date',
                'projects.priority',
                'projects.project_value',
                'projects.price_type',
                'projects.description',
                'projects.status',
                'projects.created_at',
                'clients.name',
                'clients.company'
            )
            ->first();
        $users = User::all();

        return view('project.project-details', compact('project', 'clients', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::findOrFail($id)->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
