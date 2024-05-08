<?php namespace NielsVanDenDries\TripRegistration\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesTripregistrationTrip extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_tripregistration_trip', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->date('date')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->smallInteger('mileage')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_tripregistration_trip');
    }
}
