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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("client_id");
            $table->foreign("client_id")->references("id")->on("clients");
            $table->string("title");
            $table->string("slug")->unique();
            $table->text("description");
            $table->string("thumbnail_url");
            $table->string("project_url");
            $table->dateTime("start_date");
            $table->dateTime("end_date");
            $table->enum("status", ["draft", "published"])->default("draft");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
