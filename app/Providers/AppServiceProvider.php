<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Place;
use App\Models\DestinationDetail;
use App\Models\Offer;
use App\DatesPackage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $places = Place::all();
            $destinationdetails = DestinationDetail::all();
            $offers = Offer::all();

            // Retrieve DatesPackage records associated with each DestinationDetail
            $datesPackages = DestinationDetail::with('datesPackages')->get();

            $view->with([
                'places' => $places,
                'datesPackages' => $datesPackages,
                'destinationdetails' => $destinationdetails,
                'offers' => $offers
            ]);
        });
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
