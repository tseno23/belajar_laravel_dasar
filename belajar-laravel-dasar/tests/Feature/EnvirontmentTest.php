<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class EnvirontmentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetEnv()
    {
       $YOUTUBE = env("YOUTUBE");
    
       self::assertEquals("programmer zaman now",$YOUTUBE);
    }

    public function testDeafaultEnv(){
        $author = env("AUTHOR", "SENO");

        self::assertEquals("SENO", $author);
    }


}
