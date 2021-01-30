<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HealthOfficersReferal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_officers_referals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('officer_name');
            $table->string('role')->default('officer');
            $table->string('district_name')->nullable();
            $table->string('promoted')->default("no");
            $table->string('award')->default('0');
            $table->string('monthly_salary')->default('0');
            $table->integer('hospital_id')->default(0);
            $table->string("contact");
            $table->string('hospital_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('health_officers_referals');
    }
}
