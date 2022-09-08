<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('fathers_name');
            $table->string('e_name'); //e = emargency
            $table->string('e_address'); //e = emargency
            $table->string('e_relation'); //e = emargency
            $table->string('e_phone'); //e = emargency
            $table->string('maritial_status');
            $table->string('address');
            $table->string('date_of_b');
            $table->string('phone');
            $table->string('nid');
            $table->string('education');
            $table->string('job_title');
            $table->string('job_location');
            $table->string('religious');   
            $table->string('country');
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
        Schema::dropIfExists('tenants');
    }
}
