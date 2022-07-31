<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquaries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class,"caller_id")->constrained('users');
            $table->foreignIdFor(User::class,"lead_id")->constrained('users');
            // $table->foreignIdFor(User::class,"for_id")->constrained('users');
            $table->text("call_breif")->nullable();
            $table->string("call_status")->nullable();
            $table->string("devlivery_status")->nullable();
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
        Schema::dropIfExists('enquaries');
    }
};
