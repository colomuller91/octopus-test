<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class PostCanBeCreatedTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $params = [
            'description' => 'Test description',
            'name' => 'Test name'
        ];
        Http::post('api',$params);

        $savedPost = \App\Post::first();


        $this->assertEquals($params['description'],$savedPost->description);
        $this->assertEquals($params['name'],$savedPost->name);
    }
}
