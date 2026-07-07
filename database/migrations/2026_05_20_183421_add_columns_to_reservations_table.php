<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {

            $table->string('nom');
            $table->string('email');
            $table->string('telephone');
            $table->string('service');
            $table->date('date');
            $table->time('heure');
            $table->text('message')->nullable();

        });
    }

    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {

            $table->dropColumn([
                'nom',
                'email',
                'telephone',
                'service',
                'date',
                'heure',
                'message'
            ]);

        });
    }
};