<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('name', 255)->after('id');
            $table->string('number', 255)->after('name');
            $table->string('class', 255)->after('number');
            $table->string('sin', 255)->after('class');
            $table->string('birth', 255)->after('sin');
            $table->string('address', 255)->after('birth');
            $table->string('hobby', 255)->after('address');
            $table->string('slug', 255)->after('hobby');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('name', 255);
            $table->dropColumn('number', 255);
            $table->dropColumn('class', 255);
            $table->dropColumn('sin', 255);
            $table->dropColumn('birth', 255);
            $table->dropColumn('address', 255);
            $table->dropColumn('hobby', 255);
            $table->dropColumn('slug', 255);
        });
    }
};
