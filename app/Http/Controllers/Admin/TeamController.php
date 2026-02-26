<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::orderBy('order', 'asc')->paginate(10);
        return view('admin.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(StoreTeamRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'teams');
        $teams =  Team::create($input);
        return redirect()->route('teams.index')->with('message', 'Created Successfully');
    }


    public function show(Team $team)
    {
        //
    }

    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }

    public function update(UpdateTeamRequest $request, Team $team)
    {
        $old_image = $team->image;
        $input = $request->all();
        $image = fileUpload($request, 'image', 'teams');

        if ($image) {
            removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }

        $team->update($input);

        return redirect()->route('teams.index')
            ->with('message', 'Update Successfully');
    }
    public function destroy(Team $team)
    {
        removeFile($team->image);
        $team->delete();
        return redirect()->route('teams.index')->with('message', 'Delete Successfully');
    }
}
