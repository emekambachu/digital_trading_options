<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;

class GithubDeploymentController extends Controller
{
    public function run($passWord)
    {
        if($passWord !== "_@na_2020_restricted") {
            return App::abort(403);
        }
        $cmd = 'cd ../ && git stash && git pull';
        ob_start();
        exec($cmd . " 2>&1", $output, $status);
        $result = ob_get_clean();
        dump($output);
        dump($result);
        //clear all cache and config
        Artisan::call('route:clear');
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
    }
}
