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
            $table->id('id_project')->primary();
            $table->string('project_code')->unique()->nullable();
            $table->string('name');
            $table->unsignedBigInteger('client_id')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->enum('priority', ['High', 'Medium', 'Low'])->nullable();
            $table->decimal('project_value', 15, 2)->nullable();
            $table->string('price_type')->nullable();
            $table->text('description')->nullable();
            $table->string('logo')->nullable();
            $table->string('file')->nullable();
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->foreign('client_id')->references('id_client')->on('clients')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign(['client_id']);
            $table->dropColumn('client_id');
        });
    }
};
