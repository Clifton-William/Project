<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->string('jenis')->nullable();
        });
    }

    public function down(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nama', 'alamat', 'telepon', 'jenis']);
        });
    }
};
