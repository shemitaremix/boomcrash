<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test post
     */
    public function test_post()
    {
        $response = $this->get('/post');

        $response->assertStatus(200);

     
    }

    /**
     * A basic feature test example.
     *
     * @test 
     */
    public function test_posts()
    {
        $response = $this->get('/posts/6');

        $response->assertStatus(200);

     
    }

    /**
     * A basic feature test example.
     *
     * @test blog
     */
    public function test_blog()
    {
        $response = $this->get('/blog');

        $response->assertStatus(200);

     
    }

    /**
     * A basic feature test example.
     *
     * @test contacto
     */
    public function test_contacto()
    {
        $response = $this->get('/contacto');

        $response->assertStatus(200);

     
    }
}
