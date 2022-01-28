<?php namespace Laravelarticle\MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{

    public function boot()
    {
        
    }

    
    public function register()
    {
        $this->app->make('LaravelArticle\MyPackage\MyPackage');
    }

} 