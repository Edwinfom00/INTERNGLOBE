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
        Schema::create('interns', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("company_id");
            $table->string("title");
            $table->string("slug");
            $table->longText("description");
            $table->integer("category_id");
            $table->string("position");
            $table->string("address");
            $table->string("gender");
            $table->string("type");
            $table->integer("status");
            $table->date("last_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interns');
    }
};
