<?php

use App\Models\book;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('author',32);
            $table->string('title',150);
            $table->integer('pieces');
            $table->timestamps();
        });
        book::create([
            'author'=>"Stephen King",
            'title'=> 'Holly',
            'pieces'=>30,
        ]);
        book::create([
            'author'=>"Stephen King",
            'title'=> 'Billy Summers',
            'pieces'=>41,
        ]);
        book::create([
            'author'=>"Stephen King",
            'title'=> 'Carrie',
            'pieces'=>22,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
