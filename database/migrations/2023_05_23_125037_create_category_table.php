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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');

        });
        DB::table('categories')->insert([
            [
                'category_name' => 'Персонажі',
            ],
            [
                'category_name' => 'Фракції',
            ],
            [
                'category_name' => 'Предмети',
            ],
            [
                'category_name' => 'Різне',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};
