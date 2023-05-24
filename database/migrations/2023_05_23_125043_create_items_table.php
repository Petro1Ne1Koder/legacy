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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->string('item_name');
            $table->string('item_decs');
        });
        DB::table('items')->insert([
            [
                'category_id' => '1',
                'item_name' => 'Петро',
                'item_decs' => 'Петро це фермер, який любить працювати',
            ],
            [
                'category_id' => '1',
                'item_name' => 'Іван',
                'item_decs' => 'Іван це інший персонаж',
            ],
            [
                'category_id' => '2',
                'item_name' => 'Лицарі',
                'item_decs' => 'Лицарі це орден захисників',
            ],
            [
                'category_id' => '3',
                'item_name' => 'Меч',
                'item_decs' => 'Меч стандартне спорядження лицарів',
            ],
            [
                'category_id' => '3',
                'item_name' => 'Меч',
                'item_decs' => 'Меч стандартне спорядження лицарів',
            ],
            [
                'category_id' => '4',
                'item_name' => 'лор чатина 1',
                'item_decs' => '1',
            ],
            [
                'category_id' => '4',
                'item_name' => 'лор чатина 2',
                'item_decs' => '2',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
