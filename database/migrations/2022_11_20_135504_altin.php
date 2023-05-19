<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Altin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Grams', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('Ceyreks', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('Yarims', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('Tams', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('Cumhuriyets', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('Atas', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('Ondorts', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('OnSekizAltins', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('YirmiIkiBileziks', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('onss', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('Gumuss', function (Blueprint $table) {
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
        Schema::dropIfExists('Grams');
        Schema::dropIfExists('Ceyreks');
        Schema::dropIfExists('Yarims');
        Schema::dropIfExists('Tams');
        Schema::dropIfExists('Cumhuriyets');
        Schema::dropIfExists('Atas');
        Schema::dropIfExists('Ondorts');
        Schema::dropIfExists('OnSekizAltins');
        Schema::dropIfExists('YirmiIkiBileziks');
        Schema::dropIfExists('onss');
        Schema::dropIfExists('Gumuss');
    }
}
