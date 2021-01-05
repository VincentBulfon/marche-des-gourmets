<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exhibitor_tags', function (Blueprint $table) {
            $table->foreign('exhibitor_id')->references('id')->on('exhibitors')
            ->onDelete('cascade')
            ->onUpdate('no action');
        });
        Schema::table('exhibitor_tags', function (Blueprint $table) {
            $table->foreign('tag_id')->references('id')->on('tags')
            ->onDelete('cascade')
            ->onUpdate('no action');
        });
        Schema::table('exhibitors', function (Blueprint $table) {
            $table->foreign('region_id')->references('id')->on('regions')
                ->onDelete('cascade')
                ->onUpdate('no action');
        });
        Schema::table('tickets', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers')
           ->onDelete('cascade')
           ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_keys');
    }
}
