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
        Schema::create('project_service', function (Blueprint $table) {
            $table->unsignedBigInteger("project_id");
            $table->foreign("project_id")->references("id")->on("projects");
            $table->unsignedBigInteger("service_id");
            $table->foreign("service_id")->references("id")->on("services");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_service');
    }
};
