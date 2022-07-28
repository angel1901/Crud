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
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category');
        });
        DB::table("categories")
            ->insert(
                [
                    'id' => 1,
                    "category" => "Cliente"
                ],
            );
        DB::table("categories")
            ->insert(
                [
                    'id' => 2,
                    "category" => "Proveedor"
                ],
            );
        DB::table("categories")
            ->insert(
                [
                    'id' => 3,
                    "category" => "Funcionario"
                ],
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
