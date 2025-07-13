<?php
use App\Models\View;
use App\Models\link;

if (!function_exists('set_view')) {
    function set_view($link_id, $user_id){
            $view = new View();
            $view->link_id = $link_id;
            $view->ip_address = request()->header('CF-Connecting-IP') ?? request()->ip();
            $view->user_id = $user_id;
            $view->user_agent = request()->userAgent();
            $view->additional_data= [
                "country" => request()->header('CF-IPCountry') ?? 'Unknown',
            ];
            $view->save();
    }
}

if (!function_exists('get_views')) {
    function get_views($link_id){
            $views = View::where('link_id', $link_id)
                ->orderBy('created_at', 'desc')
                ->get();
            return $views->count();
    }
}

if (!function_exists('link_landing_page')) {
    function link_landing_page($link_id){
            $link = link::where('id', $link_id)
                ->first();
            $pages = $link->additional_data['level_ads'] ?? 1;
            return $pages;
    }
}
