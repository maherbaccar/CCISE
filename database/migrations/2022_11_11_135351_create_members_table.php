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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string("n_patente");
            $table->string("raison_social");
            $table->string("responsable");
            $table->enum('fonction', ['PDG', 'Gérant', 'Propriétaire']);
            $table->string("tel");
            $table->string("fax");
            $table->string("email");
            $table->string("site_web");
            $table->string("adresse");
            $table->string("secteur");
            $table->string("sous_secteur");
            $table->string("pdts");
            $table->string("n_carte_adhérent");
            $table->string('photo', 300);
            $table->enum('pack', ['Silver', 'Gold', 'Diamond']);
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
        Schema::dropIfExists('members');
    }
};
