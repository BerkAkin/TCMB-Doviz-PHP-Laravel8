<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kripto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitcoins', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('etherums', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('etherumclassics', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('litecoins', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('dogecoins', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('tethers', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('trons', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('dashs', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitcoins');
        Schema::dropIfExists('etherums');
        Schema::dropIfExists('etherumclassics');
        Schema::dropIfExists('litecoins');
        Schema::dropIfExists('dogecoins');
        Schema::dropIfExists('tethers');
        Schema::dropIfExists('trons');
        Schema::dropIfExists('dashs');
    }
}
