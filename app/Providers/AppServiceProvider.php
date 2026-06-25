<?php

namespace App\Providers;

use App\Models\Client;
use App\Models\CompanyStat;
use App\Models\Partner;
use App\Models\PortfolioCategory;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('partials.company-stats', function ($view) {
            $view->with(
                'companyStats',
                Schema::hasTable('company_stats')
                    ? CompanyStat::published()->get()
                    : collect()
            );
        });

        View::composer([
            'pages.home.partials.services',
            'pages.services.partials.services-grid',
        ], function ($view) {
            $view->with(
                'services',
                Schema::hasTable('services')
                    ? Service::published()->get()
                    : collect()
            );
        });

        View::composer('pages.home.partials.partners', function ($view) {
            $view->with(
                'partners',
                Schema::hasTable('partners')
                    ? Partner::published()->get()
                    : collect()
            );
        });

        View::composer('pages.home.partials.clients', function ($view) {
            $view->with(
                'clients',
                Schema::hasTable('clients')
                    ? Client::published()->get()
                    : collect()
            );
        });

        View::composer('pages.home.partials.portfolio', function ($view) {
            $view->with(
                'projects',
                Schema::hasTable('projects')
                    ? Project::published()->where('is_featured', true)->limit(3)->get()
                    : collect()
            );
        });

        View::composer('pages.portfolio.partials.projects', function ($view) {
            $view->with([
                'categories' => Schema::hasTable('portfolio_categories')
                    ? PortfolioCategory::published()->get()
                    : collect(),
                'projects' => Schema::hasTable('projects')
                    ? Project::published()->with('category')->get()
                    : collect(),
            ]);
        });
    }
}
