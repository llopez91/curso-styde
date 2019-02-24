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
            ->assertSee("Listado de usuarios")
            ->assertSee("Luis")
            ->assertSee("Thomas");
    }

    /**
     * Prueba para cargar mensaje de default si no hay usaurios /usuarios?empty
     * @test
     */
    function carga_los_mensaje_default_si_no_hay_usuarios()
    {
        $this->get("/usuarios?empty")
            ->assertStatus(200)
            ->assertSee("No hay usuarios registrados.");
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
