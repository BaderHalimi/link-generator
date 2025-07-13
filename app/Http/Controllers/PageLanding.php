<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\link;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
class PageLanding extends Controller
{
    public function index($code)
    {
        $link = link::where('code', $code)->firstOrFail();

        if ((int)link_landing_page($link->id) === 0) {
            //dd(link_landing_page($link->id));
            return redirect()->away($link->url);

        }
        return view('page1',compact('link'));
    }
     public function go2($code)
    {
         $link = link::where('code', $code)->firstOrFail();
         if ((int)link_landing_page($link->id) === 1) {
            return redirect()->away($link->url);

        }
        //dd(link_landing_page($link->id));
         $data = [
            'code' => $code,
            'step' => 2,
            'expires_at' => now()->addMinutes(5),
            'csrf_token' => csrf_token(),
        ];
        $encrypted = Crypt::encryptString(json_encode($data));
        
        return redirect()->route('landing.page2', ['data' => $encrypted]);
    }

    public function page2( $data)
    {


            //$token = $request->query('token');
        
            try {
                $decrypted = Crypt::decryptString($data);
                //dd($decrypted);
                $data = json_decode($decrypted, true);
        
                // تحقق من الكود
                $code = $data['code'] ?? null;
                $link = link::where('code', $code)->firstOrFail();

                $step = $data['step'] ?? null;
                $expires_at = $data['expires_at'] ?? null;
                if (!$code || $step != 2) {
                    abort(403, 'Invalid step.');
                }
        
                if (Carbon::parse($expires_at)->isPast()) {
                    abort(403, 'Link expired.');
                }
                //dd($expires_at);

        
        
                return view('page2', compact('link'));
        
            } catch (\Exception $e) {
                abort(403, 'Invalid or corrupted link.');
            }
        
        
        return view('page2');
    }

    public function page3($data)
    {
        $link = link::where('code', $code)->firstOrFail();

        return view('page1');
    }
}
