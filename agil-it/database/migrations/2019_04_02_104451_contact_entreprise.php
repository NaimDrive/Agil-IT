<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactEntreprise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_entreprise', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomNaissance');
            $table->string('nom');
            $table->string('prenom');
            $table->string('dateNaissance');
            $table->string('mailPro');
            $table->string('mailPerso');
            $table->string('telephone');
            $table->string('civilite');
            $table->string('nationalite');
            $table->string('statusEntreprise');
            $table->string('categEmployeur');
            $table->string('idPersContact');
            $table->integer('idEntreprise');
            $table->string('typeContrat');
            $table->string('dateDebutContrat');
            $table->string('dateFinContrat');
            $table->boolean('valider');
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
        Schema::dropIfExists('contact_entreprise');
    }
}
