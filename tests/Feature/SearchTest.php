<?php

namespace Tests\Feature;

use App\Ad;
use App\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchTest extends TestCase
{
    use RefreshDatabase;


    public function test_search_ads_by_query()
    {
        factory(Ad::class)->create(['title' => 'MacBook air']);
        factory(Ad::class)->create(['title' => 'MacBookPro']);
        factory(Ad::class)->create(['title' => 'mac mini']);
        factory(Ad::class)->create(['title' => 'Iphone']);
        factory(Ad::class)->create(['title' => 'Ipad']);

        $this->get('/api/search?q=mac')
            ->assertJsonCount(3, 'data');

        $this->get('/api/search?q=ip')
            ->assertJsonCount(2, 'data');
    }
}
