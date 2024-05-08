<?php namespace NielsVanDenDries\TripRegistration\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesTripregistrationTrip extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_tripregistration_trip', function($table)
        {
            $table->bigInteger('mileage')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_tripregistration_trip', function($table)
        {
            $table->smallInteger('mileage')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
