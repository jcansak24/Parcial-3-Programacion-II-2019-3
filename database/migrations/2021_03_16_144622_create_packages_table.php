<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->unsignedBigInteger('internet_services_id');
            $table->unsignedBigInteger('tv_services_id');
            $table->unsignedBigInteger('telephone_services_id');
            $table->foreign('internet_services_id')->references('id')->on('internet_srvices')->onDelete('cascade');
            $table->foreign('tv_services_id')->references('id')->on('tv_services')->onDelete('cascade');
            $table->foreign('telephone_services_id')->references('id')->on('telephone_services')->onDelete('cascade');
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
        Schema::dropIfExists('packages');
    }
}
