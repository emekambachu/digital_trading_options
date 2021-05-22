<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class GithubDeploymentController extends Controller
{
    public function deploy($passWord)
    {
        if ($passWord !== "Xeddtech_1990") {
            return App::abort(403);
        }
        $commands = array(
            'echo $PWD',
            'whoami',
            'git reset --hard HEAD',
            'git pull',
            'git status',
            'git submodule sync',
            'git submodule update',
            'git submodule status',
        );
        // Run the commands for output
        $output = '';
        foreach($commands AS $command){
            // Run it
            $tmp = exec($command);
            // Output
            $output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
            $output .= htmlentities(trim($tmp)) . "\n";
        }
        return $output;
    }
}
