<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserModule extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    //prueba numero 1, revisar que funcione correctamente la url /usuarios y de ser asi que muestre un estatus 200
    function test_si_carga_url_usuarios_nuevo(){

        $this->get('/usr/nuevo');
        //si esto carga correctamente muestra el estatus 200
        ->assertStatus(200);
        //si esta correcta la prueba se debe mostrar el texto 
        //"Creando nuevo usuario", ya que es el que esta en el url /usr/nuevo
        ->assertSee("Creando nuevo usuario");

    }
}
