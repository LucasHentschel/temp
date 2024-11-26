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
        Schema::create('arbeitsvertraege', function (Blueprint $table) {
		$table->id();
		$table->string('dokument_url');
		$table->decimal('bruttogehalt_stunde', 8, 2); //max. 8 Stellen, 2 NKS
		$table->integer('wochenstunden');
		/*$table->foreignId('person_id')
			->constrained('personen')
			->onDelete('cascade'); */ // löscht vertrag, wenn Person gelöscht wird
            	$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arbeitsvertraege');
    }
};
