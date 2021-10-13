<?php

namespace Tests\Feature\Models;

use App\Models\Feature;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class FeatureTest extends TestCase
{
    // use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInsertData()
    {
        for($i=0; $i<50; $i++){
            $data = Feature::factory()->make()->toArray();
            
            Feature::create($data);

            $this->assertDatabaseHas('features', $data);
        }
    }
}
