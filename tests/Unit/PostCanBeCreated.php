<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\TestCase;

class PostCanBeCreated extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testCreatePost()
    {
        $params = [
            'description' => 'Test description',
            'name' => 'Test name'
        ];
        Http::post('/',$params);

        $savedPost = \App\Post::first();


        $this->assertEquals($params['description'],$savedPost->description);
        $this->assertEquals($params['name'],$savedPost->name);
    }

}
