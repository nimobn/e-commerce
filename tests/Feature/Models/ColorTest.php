<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Color;

class ColorTest extends TestCase
{
    // use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInsertData()
    {
        $color = Color::factory()->make()->toArray();
        Color::create($color);
        $this->assertDatabaseHas('colors', $color);
    }
}
