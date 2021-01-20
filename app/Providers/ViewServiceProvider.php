<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\ProfileComposer;
use Illuminate\Support\Facades\View;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $menu = [
        //     "Dashboard" => [
        //         'url' => route('homepage'),
        //         'text' => 'Dashboard',
        //         'hasChild' => false
        //     ],
        //     "Danh mục"=> [
                
        //     ]
        // ];
        View::composer('cate.index', function ($view) {
            $view->with('composerVariable', "PT15211-WEB-PHP3");
        });
    }
}
