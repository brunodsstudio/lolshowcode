<?php

namespace Tests\Feature;

use Illuminate\Database\Seeder;
use Database\Seeders\DDDFixoSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Tests\TestCase;

class DDDFixoTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    

     public function setUp(): void
    {
        parent::setUp();
      
    }
    
   public function test_tb_has_been_seeded()
    {
        $this->assertDatabaseCount('lolcodeshow.DDDFixo',  7);
    }

    public function test_should_get_all_ddds_correctly()
    {
        $response = $this->getJson('api/ddds')->assertStatus(Response::HTTP_OK)->json('data');
        $this->assertDatabaseCount('lolcodeshow.DDDFixo',  7);
    }

    public function test_should_get_a_single_origin_destin_correctly()
    {
        $response = $this->getJson('api/ddds/011/016')->assertStatus(Response::HTTP_OK)->json('data');

        $this->assertEquals(2,$response[0]['id']);
    }

    public function test_should_get_404_error_if_monster_does_not_exists()
    {
        $response = $this->getJson('api/ddds/011/000')->assertStatus(Response::HTTP_NOT_FOUND)->json();
        $this->assertEquals('The DDDs does are relationed.', $response['message']);
    }

}
