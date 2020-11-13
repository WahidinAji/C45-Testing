<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('gender', ['P', 'L']);
            $table->string('nilai_ipa');
            $table->string('nilai_ips');
            $table->string('usbn_ipa');
            $table->string('usbn_ips');
            $table->string('rekomendasi');
            $table->string('minat');
            $table->string('status_kelas')->nullable();
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
        Schema::dropIfExists('siswas');
    }
}
