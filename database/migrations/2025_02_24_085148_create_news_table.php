<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // Автоматический инкрементный идентификатор
            $table->string('title'); // Заголовок новости
            $table->text('content'); // Содержимое новости
            $table->timestamps(); // Поля created_at и updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('news'); // Удаление таблицы при откате миграции
    }
}
