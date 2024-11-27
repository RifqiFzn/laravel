<?php

use App\Models\setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>'_site_name',
            'label'=>'Judul Situs',
            'value'=>'Website Portfolio',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_location',
            'label'=>'Alamat',
            'value'=>'Jakarta, Indonesia',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_instagram',
            'label'=>'Instgram',
            'value'=>'https://www.instagram.com/mhdrifqifzn/',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_linkedin',
            'label'=>'Linkedin',
            'value'=>'https://www.linkedin.com/in/muhammadrifqifauzan/',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_github',
            'label'=>'Github',
            'value'=>'https://github.com/RifqiFzn',
            'type'=>'text',
        ]);
        
        setting::create([
            'key'=>'_site_description',
            'label'=>'Site Description',
            'value'=>'Website using laravel and Filament',
            'type'=>'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
