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
        //
        Schema::create("articles", function (Blueprint $table) {
            $table->id();
            $table->string("titre")->unique();
            $table->text("description");
            $table->date("date_publication");
            $table->boolean("isdeleted")->default(false);
            $table->foreignId("categorie")->constrained('categories');
            $table->foreignId('auteur')->constrained('auteurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
