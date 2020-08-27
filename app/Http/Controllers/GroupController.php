<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class GroupController extends Controller
{
    /**
     * Display the daily dozen groups, etc.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $groups = Group::all()->groupBy('category');

        return view('welcome')->with('groups', $groups);
    }

    /**
     * Display a specific group.
     *
     * @return Application|Factory|View
     */
    public function show(Group $group)
    {
        return view('groups.show')->with('group', $group);
    }
}
