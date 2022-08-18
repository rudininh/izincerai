<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('nama_pegawai');
            $table->string('nip_pegawai');
            $table->string('tempat_lahir_pegawai');
            $table->string('tanggal_lahir');
            $table->string('pangkat');
            $table->string('jabatan');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('nama_pasangan');
            $table->string('nip_pasangan');
            $table->string('tempat_lahir_pasangan');
            $table->string('pangkat_pasangan');
            $table->string('jabatan_pasangan');
            $table->string('alamat_pasangan');
            $table->string('hp_pasangan');
            
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
