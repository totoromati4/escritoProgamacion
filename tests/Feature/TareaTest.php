<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Tareas;
use App\Http\Controllers\tareaController;

class TareaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function test_CrearUnatareaTest(){
        $response = $this->post('/api/tarea',[
            'titulo' => 'hola',
            "contenido" => "queso",
            "estado" => "ayuda",
            "autor" => "yo"
        ]);
        $response->assertStatus(201);
        $response->assertJsonFragment([
            "titulo"=>"hola"
        ]);
    
    }
    public function test_ModificarUnaTareaTest(){
        $response = $this->put('api/tarea/1',[
            "titulo" => "hola2",
            "contenido" => "queso",
            "estado" => "ayuda",
            "autor" => "yo"
        ]);
        $response->assertStatus(200);
        $response->assertJsonFragment([
            "titulo"=>"hola2"
        ]);
    }

    public function test_MostrarTodosLasTareaTest(){
        $response = $this->get('api/tareas');
        $response->assertStatus(200);
    }
    public function test_BuscarUnaTareaTest(){
        $response = $this->get('api/tarea/1');
        $response = $this->assertStatus(200);
        $response->assertJsonFragment([
            "titulo"=>"hola2"
        ]);
    }

    public function test_EliminaUnaTarea(){
        $response = $this->delete('api/tarea/1');
        $response->assertStatus(200);
    }
}