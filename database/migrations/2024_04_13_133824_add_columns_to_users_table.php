<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')
                ->after('name')
                ->nullable();
            $table->date('birthday')
                ->after('surname')
                ->nullable();
            $table->unsignedSmallInteger('gender')
                ->after('birthday')
                ->nullable();
            $table->string('address')
                ->after('gender')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('age');
            $table->dropColumn('gender');
            $table->dropColumn('address');
        });
    }
};
