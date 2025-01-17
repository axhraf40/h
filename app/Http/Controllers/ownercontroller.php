<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::all();
        return view('owners.index', compact('owners'));
    }

    public function create()
    {
        return view('owners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:owners',
        ]);

        Owner::create($request->all());
        return redirect()->route('owners.index')->with('success', 'Owner added successfully!');
    }

    public function show(Owner $owner)
    {
        return view('owners.show', compact('owner'));
    } }

    