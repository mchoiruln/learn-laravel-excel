<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExcelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
    	$res = $this->json('GET', 'excel/create');
    	if($res->exception) dd($res->exception);
        $res->assertOk();
    }
}
