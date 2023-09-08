<?php

namespace Tests\Feature;

use App\Models\City;
use App\Models\Province;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RajaOngkirTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_search_provinces_by_id()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $province = Province::factory()->create();
        $response = $this->get('/api/search/provinces?id=' . $province->province_id);
        $response->assertStatus(200)->assertJson([
            'province_id' => $province->province_id,
            'province' => $province->province,
        ]);
    }

    public function it_can_search_cities_by_id()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $city = City::factory()->create();
        $response = $this->get('/api/search/cities?id=' . $city->city_id);

        $response->assertStatus(200)->assertJson([
            'city_id' => $city->city_id,
            'city_name' => $city->city_name,
        ]);
    }
}

