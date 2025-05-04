<?php

use App\Auth\Application\Enums\UserRole;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        return;
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default(UserRole::EventOrganiser);
        });
    }
};
