<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personen', function (Blueprint $table) {
		$table->id();
		$table->string('name');
		$table->date('geburtsdatum');
		$table->string('email_privat');
		$table->string('strasse');
		$table->string('hausnummer');
		$table->string('plz');
		$table->string('ort');
		$table->integer('telefon');
		//todo: fk id_benutzer
            	$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personen');
    }
};
