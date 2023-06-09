<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosage_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('unit', ['ml', 'g', 'mg', 'capsule', 'tablet', 'piece','puff']);
            $table->enum('type', ['Tablets and Capsules', 'Liquids', 'Creams and Ointments', 'Injectables','Inhalation','Others']);
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
        Schema::dropIfExists('dosage_forms');
    }
};
