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
        Schema::table('folder_permissions', function (Blueprint $table) {
            $table->unsignedBigInteger('main_folder_id')->nullable()->after('folder_id');
            $table->unsignedBigInteger('sub_folder_id')->nullable()->after('main_folder_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('folder_permissions', function (Blueprint $table) {
            //
        });
    }
};