<?php

use App\Models\Affiliate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up() : void
    {
        Schema::create('clicks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Affiliate::class)->constrained();
            $table->timestamps();
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('clicks');
    }
};
