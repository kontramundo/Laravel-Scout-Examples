<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MeiliSearch\Client;

class ScoutServiceProvider extends ServiceProvider
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
        $client = new Client(env('MEILISEARCH_HOST'));
        $client->index('users_index')->updateSettings([
            'filterableAttributes' => [
                'role'
            ],
            'typoTolerance' => [
                'minWordSizeForTypos' => [
                    'oneTypo' => 2,
                    'twoTypos' => 5
                ]
            ],
            'pagination' => [
                'maxTotalHits' => 100000
            ],
        ]);
    }
}
