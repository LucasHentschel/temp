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
        Schema::create('benutzer', function (Blueprint $table) {
            $table->id();
	    //$table->('ID_Abteilung');
	    $table->string('E-Mail');
	    $table->date('Startdatum');
	    //$table->enum('Benutzerrolle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('benutzer');
    }
};
