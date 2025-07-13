<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\link;
use App\Models\View;
class integrated_site_redir extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    private function isSocialBot($request)
    {
        $ua = strtolower($request->userAgent());

        return str_contains($ua, 'facebook') ||
            str_contains($ua, 'twitter') ||
            str_contains($ua, 'whatsapp') ||
            str_contains($ua, 'linkedin') ||
            str_contains($ua, 'discord') ||
            str_contains($ua, 'telegram');
    }

    public function show($code)
    {
        $link = link::where('code', $code)->firstOrFail();
    
        if ($this->isSocialBot(request())) {
            return view('link-preview', [
                'link' => $link

            ]);
        }
        //dd('This is a normal visitor, redirecting to the link...');
    
        // الزائر العادي - نحوله
        return redirect()->route('landing', ['code' => $link->code]);
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
        //
    }
}
