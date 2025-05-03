<?php

use App\Auth\Infrastructure\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('name');
            $table->text('description');
            $table->date('date');
            $table->time('start_at');
            $table->time('end_at');

            $table->foreignIdFor(User::class);

            $table->softDeletes();
            $table->timestamps();
        });
    }
};
