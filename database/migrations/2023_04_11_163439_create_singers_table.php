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
        Schema::create('singers', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('歌手ID');
            $table->string('singer_name')->comment('歌手名');
            $table->string('singer_image')->nullable()->comment('歌手画像');
            $table->time('all_song_time')->nullable()->comment('全曲長');
            $table->text('comment')->nullable()->comment('コメント');
            $table->string('created_user')->comment('登録者');
            $table->timestamp('created_at')->useCurrent()->comment('登録日時');
            $table->string('updated_user')->comment('更新者');
            $table->timestamp('updated_at')->useCurrent()->comment('更新日時');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('singers');
    }
};
