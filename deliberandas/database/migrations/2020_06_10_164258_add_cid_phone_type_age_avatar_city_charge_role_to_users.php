<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCidPhoneTypeAgeAvatarCityChargeRoleToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('cid')->unique();
            $table->string('surname')->nullable();
            $table->string('phone')->nullable();
            $table->string('type')->nullable();
            $table->string('age')->nullable(); 
            $table->string('avatar')->nullable();
            $table->string('city')->nullable(); 
            $table->string('charge')->nullable();
            $table->integer('role');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('cid');
            $table->dropColumn('surname');
            $table->dropColumn('phone');
            $table->dropColumn('type');
            $table->dropColumn('age');
            $table->dropColumn('avatar');
            $table->dropColumn('city');
            $table->dropColumn('charge');
            $table->dropColumn('role');
        });
    }
}
