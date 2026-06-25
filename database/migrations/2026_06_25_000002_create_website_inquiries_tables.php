<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('phone', 30);
            $table->string('email', 150);
            $table->string('service', 50);
            $table->string('budget', 100)->nullable();
            $table->text('message');
            $table->string('status', 30)->default('new')->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();
        });

        Schema::create('quote_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('phone', 30);
            $table->string('email', 150);
            $table->string('company', 150)->nullable();
            $table->string('project_type', 50);
            $table->string('budget', 50);
            $table->text('details');
            $table->string('status', 30)->default('new')->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quote_requests');
        Schema::dropIfExists('contact_messages');
    }
};
