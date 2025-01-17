// database/migrations/2025_01_15_142841_create_owners_table.php

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('owners');
    }
}