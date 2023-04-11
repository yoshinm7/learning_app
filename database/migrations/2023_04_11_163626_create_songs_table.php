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
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('曲ID');
            $table->bigInteger('singer_id')->nullable()->comment('歌手ID');
            $table->bigInteger('album_id')->nullable()->comment('アルバムID');
            $table->string('song_name')->comment('曲名');
            $table->string('song_image')->nullable()->comment('曲画像');
            $table->time('song_time')->nullable()->comment('曲長');
            $table->integer('song_number')->nullable()->comment('曲順');
            $table->date('release_date')->nullable()->comment('発売日');
            $table->text('comment')->nullable()->comment('コメント');
            $table->boolean('is_bought')->default(false)->comment('購入済みフラグ');
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
        Schema::dropIfExists('songs');
    }
};
