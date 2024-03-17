<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $tabela){
            $tabela->id();
            $tabela->char('cpf', 14) ->unique();
            $tabela->char('password', 20);
            $tabela->timestamps();
        }
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
 
    }
};
