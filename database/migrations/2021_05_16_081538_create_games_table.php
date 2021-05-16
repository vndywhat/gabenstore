<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('about')->nullable();
            $table->enum('platform', ['PC']);
            $table->jsonb('trailers')->nullable();
            $table->jsonb('system_requirements')->nullable();
            $table->unsignedBigInteger('activation_service_id')->nullable();
//            $table->bigInteger('activation_service_id')->nullable();
            $table->foreign('activation_service_id')->references('id')
                ->on('activation_services')
                ->nullOnDelete();
            $table->integer('price');
            $table->integer('discount')->nullable();

            $table->timestamp('released_at')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropForeign('games_activation_service_id_foreign');
        });
        Schema::dropIfExists('games');
    }
}
