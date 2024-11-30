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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('birthday');
            $table->string('website');
            $table->integer('phone');
            $table->string('email');
            $table->string('location');
            $table->string('languages');
            $table->string('interests');
            $table->string('photo');
            $table->string('cv');
            $table->timestamps();
        });
        DB::table('infos')->insert([
            [
                'name' => 'John Doe',
                'position' => 'Developer',
                'birthday' => '1990-01-01',
                'website' => 'https://johndoe.com',
                'phone' => 123456789,
                'email' => 'johndoe@example.com',
                'location' => 'en',
                'languages' => 'English, Spanish',
                'interests' => 'Coding, Reading',
                'photo' => 'photo.jpg',
                'cv'=>'cv.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info');
    }
};
