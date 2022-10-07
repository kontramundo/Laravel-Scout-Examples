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
            'sortableAttributes' => [
                'name',
            ]
        ]);

        $client->index('users_index')->updateTypoTolerance([
            'minWordSizeForTypos' => [
                'oneTypo' => 2,
                'twoTypos' => 5
            ]
        ]);
    }
}
