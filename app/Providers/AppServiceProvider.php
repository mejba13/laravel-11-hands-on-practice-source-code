<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Nette\Utils\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventsLazyLoading();

//        \Illuminate\Support\Facades\Gate::define('edit-job', function (User $user, Job $job) {
//            return $job->employer->user->is($user);
//        });

    }
}
