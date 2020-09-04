<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create ( 'terms' , function ( Blueprint $table )
        {
            $table->id ();
            $table->string ( 'name' );
            $table->unsignedBigInteger ( 'dictionary_id' );
            $table->timestamps ();

            $table->foreign ( 'dictionary_id' )
                  ->references ( 'id' )
                  ->on ( 'dictionaries' )
                  ->onDelete ( 'cascade' )
                  ->onUpdate ( 'cascade' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::dropIfExists ( 'terms' );
    }
}
