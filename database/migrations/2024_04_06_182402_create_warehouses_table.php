<?php

use App\Models\Warehouse;
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
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->index();
            $table->string('code', 25)->index();
            $table->string('street_address', 200)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('zip', 20)->nullable();
            $table->timestamps();
        });

        Warehouse::factory()->create([
           'name' => 'Allendale Warehouse',
            'code' => 'AV-Alle-01',
            'street_address' => '6058 Burnside Court Unit 50',
            'city' => 'Mississauga',
            'state' => 'Ontario',
            'zip' => 'P5T 2T5'
        ]);

        Warehouse::factory()->create([
            'name' => 'Monks Warehouse',
            'code' => 'AV-MONK-02',
            'street_address' => '2880 Broadway',
            'city' => 'New York',
            'state' => 'New York',
            'zip' => '10025'
        ]);

        Warehouse::factory()->create([
            'name' => 'Mulligatwany Warehouse',
            'code' => 'AV-MULL-05',
            'street_address' => '259 West 55th Steet',
            'city' => 'New York',
            'state' => 'NY',
            'zip' => '10019'
        ]);

        Warehouse::factory()->create([
            'name' => 'Rogers Roasters Warehouse',
            'code' => 'AV-RROA-03',
            'street_address' => '129 W. 81 Street',
            'city' => 'New York',
            'state' => 'NY',
            'zip' => '10024'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouses');
    }
};
