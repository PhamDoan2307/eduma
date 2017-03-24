<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $models = array(
            'Post',
            'Subject',
            'PostCategory',
            'Category',
            'Tag',
            'Banner',
            'Enrollment',
            'Instructor'
//            'ProductImage',
//            'Order'
        );
        foreach ($models as $model) {
            $this->app->bind(
                "App\\Repository\\{$model}\\{$model}Interface",
                "App\\Repository\\{$model}\\{$model}Repository"
            );
        }
    }
}
