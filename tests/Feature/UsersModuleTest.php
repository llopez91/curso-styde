<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
    * Prueba para cargar a los usuarios al visitar la url /usuarios
    * @test
    */
    function carga_los_usuarios()
    {
        $this->get("/usuarios")
            ->assertStatus(200)
            ->assertSee("Usuarios");
    }

    /**
    * prueba para cargar el detalle de un usuario
    * @return void
    */
    function muestra_detalle_de_usuario()
    {
        $this->get("/usuario/5")
            ->assertStatus(200)
            ->assertSee("Mostrando detalle del usuario 5");
    }

}
