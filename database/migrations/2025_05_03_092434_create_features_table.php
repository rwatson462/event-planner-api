<?php

use App\Features\Infrastructure\Models\Feature;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->boolean('enabled')->default(false);

            $table->timestamps();
        });

        $this->createDefaultFeatures();
    }

    private function createDefaultFeatures(): void
    {
        // default state for new features is DISABLED
        Feature::query()->create([
            'name' => 'sign-up',
        ]);

        Feature::query()->create([
            'name' => 'profile',
        ]);

        Feature::query()->create([
            'name' => 'events',
        ]);
    }
};
