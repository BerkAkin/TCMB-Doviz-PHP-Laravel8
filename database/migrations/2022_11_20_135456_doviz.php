<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Doviz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dolars', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });

        Schema::create('Euros', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('Sterlins', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('IsvicFranks', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('Rubles', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('Yuans', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('Yens', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('KanadaDolars', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('Manats', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('GuneyKoreWons', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('BulgarLevas', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('NorvecKrons', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('IsvecKrons', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('KuveytDinars', function (Blueprint $table) {
            $table->id();
            $table->string('alis');
            $table->string('satis');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        Schema::create('SuudiRiyals', function (Blueprint $table) {
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
        Schema::dropIfExists('Dolars');
        Schema::dropIfExists('Euros');
        Schema::dropIfExists('Sterlins');
        Schema::dropIfExists('IsvicFranks');
        Schema::dropIfExists('Rubles');
        Schema::dropIfExists('Yuans');
        Schema::dropIfExists('Yens');
        Schema::dropIfExists('KanadaDolars');
        Schema::dropIfExists('Manats');
        Schema::dropIfExists('GuneyKoreWons');
        Schema::dropIfExists('BulgarLevas');
        Schema::dropIfExists('NorvecKrons');
        Schema::dropIfExists('IsvecKrons');
        Schema::dropIfExists('KuvetDinars');
        Schema::dropIfExists('SuudiRiyals');
    }
}
