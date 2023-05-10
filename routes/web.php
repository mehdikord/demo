<?php

use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Agent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/', function () {

        $ip=request()->ip();



        try {
            $get = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
            $info = $get;

        }catch (Exception $exception){

            $info = null;

        }

        $agent = new Agent();
        $device = $agent->device();
        $platform = $agent->platform();
        $browser = $agent->browser();
        $version = $agent->version($browser);
        $version_platform = $agent->version($platform);
        \App\Models\User::create([
            'ip' => $ip,
            'platform' => $platform."--".$version_platform,
            'device' => $device,
            'browser' => $browser,
            'browser_version' => $version,
            'info' => json_encode($info),
        ]);
        if (!empty($info['geoplugin_countryName']) && $info['geoplugin_countryName'] != "Iran"){
            return view('vpn');
        }else{
            return view('vpn');
        }


})->where('any','(.*)');
    Route::get('/post', function () {

        $ip=request()->ip();



        try {
            $get = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
            $info = $get;

        }catch (Exception $exception){

            $info = null;

        }

        $agent = new Agent();
        $device = $agent->device();
        $platform = $agent->platform();
        $browser = $agent->browser();
        $version = $agent->version($browser);
        $version_platform = $agent->version($platform);
        \App\Models\User::create([
            'ip' => $ip,
            'platform' => $platform."--".$version_platform,
            'device' => $device,
            'browser' => $browser,
            'browser_version' => $version,
            'info' => json_encode($info),
        ]);
        if (!empty($info['geoplugin_countryName']) && $info['geoplugin_countryName'] != "Iran"){
            return view('vpn');
        }else{
            return view('vpn');
        }


})->where('any','(.*)');
    Route::get('/post/{any}', function () {

        $ip=request()->ip();



        try {
            $get = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
            $info = $get;

        }catch (Exception $exception){

            $info = null;

        }

        $agent = new Agent();
        $device = $agent->device();
        $platform = $agent->platform();
        $browser = $agent->browser();
        $version = $agent->version($browser);
        $version_platform = $agent->version($platform);
        \App\Models\User::create([
            'ip' => $ip,
            'platform' => $platform."--".$version_platform,
            'device' => $device,
            'browser' => $browser,
            'browser_version' => $version,
            'info' => json_encode($info),
        ]);
        if (!empty($info['geoplugin_countryName']) && $info['geoplugin_countryName'] != "Iran"){
            return view('vpn');
        }else{
            return view('vpn');
        }


})->where('any','(.*)');

