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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('news_name');
            $table->string('news_img');
            $table->string('news_desc1');
            $table->string('news_desc2');
            $table->string('news_date');
        });
        DB::table('news')->insert([
            [
                'news_name' => 'Ми відкрились!',
                'news_img' => '/images/new1.png',
                'news_desc1' => 'Наш сервер запустив роботу та відкрити для всіх бажаючих його відвідати.',
                'news_desc2' => 'Наш сервер запустив роботу та відкрити для всіх бажаючих його відвідати.',
                'news_date' => '23 березня 2023',
            ],
            [
                'news_name' => 'Розіграш!',
                'news_img' => '/images/new2.png',
                'news_desc1' => 'Чарівні котейки, власниками яких незабаром зможете стати і ви!',
                'news_desc2' => 'Чарівні котейки, власниками яких незабаром зможете стати і ви!',
                'news_date' => '23 березня 2023',
            ],
            [
                'news_name' => 'Лор Сервера',
                'news_img' => '/images/new3.png',
                'news_desc1' => 'Представляємо вашій увазі обидві частини статті, присвяченої лору сервера...',
                'news_desc2' => 'Представляємо вашій увазі обидві частини статті, присвяченої лору сервера Realms of Sorcery! Обов`язково ознайомтеся з нею, щоб мати уявлення про події, що передували вашим пригодам! Ви їх можете знайти у нашому кодексі.',
                'news_date' => '23 березня 2023',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
