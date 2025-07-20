<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schat;
use App\Models\message;

class Schats extends Controller
{

    public function index()
    {
        $schats = Schat::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('support.tickets', compact('schats'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('support.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:5000',
        ]);

        $schat = Schat::create([
            'user_id' => auth()->id(),
            'additional_data' => [
                'title' => $request->title,
                'description' => $request->description,
                'status' => 'open',
            ],

        ]);

        return redirect()->route('support.index')
            ->with('success', 'Support ticket created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $schat = Schat::findorFail($id);
        return view('support.view', compact('schat'));
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
        $schat = Schat::findOrFail($id);

        // Delete all messages associated with this schat
        message::where('schats_id', $schat->id)->delete();

        // Delete the schat itself
        $schat->delete();

        return redirect()->route('support.index')
            ->with('success', 'Support ticket deleted successfully.');
    }
}
