<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class create_arbitrary_attributes_table extends Migration
{
    public function up()
    {
        Schema::create('arbitrary_attributes', function (Blueprint $table): void {
            $table->id();
            $table->morphs('model');
            $table->string('key')->index();
            $table->text('value')->nullable();
            $table->timestamps();

            $table->unique(['model_id', 'model_type', 'key']);
        });
    }
}
