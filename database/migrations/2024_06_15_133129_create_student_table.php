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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            //our columns!
            //Note that we use only php code! not sql query to communicate!
            
            //a varchar column
            $table->string('name');

            //Method chaining
            $table->string('email')->unique();

            //Nullable - present or not its fine!
            $table->string('phone')->nullable();

            $table->text('address');
            //enum column
            $table->enum('gender',['Male','Female','Other']);

            $table->string('department');
            //set default value
            $table->boolean('parttime')->default(0);
            $table->date('joined_date');

            //This is default one!
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
