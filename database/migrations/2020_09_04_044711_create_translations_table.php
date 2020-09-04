<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create ( 'translations' , function ( Blueprint $table )
        {
            $table->string ( 'name' );
            $table->unsignedBigInteger ( 'term_id' );
            $table->timestamps ();

            $table->foreign ( 'term_id' )->references ( 'id' )->on ( 'terms' )->onDelete ( 'cascade' )->onUpdate ( 'cascade' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::dropIfExists ( 'translations' );
    }
}
