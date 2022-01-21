<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer(
            'hello.index', function($view){
                $view->with('view_message', 'composer message!');
            }
        );
    }
}
