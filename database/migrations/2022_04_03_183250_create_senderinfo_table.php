<?php

use App\Models\items;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateSenderinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senderinfo', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained('users');
            $table->foreignIdFor(items::class)->constrained('items');
            // $table->foreignIdFor(items::class)->constrained('items');
            $table->string('name',100);
            $table->string('company_name',100);
            $table->string('city',100);
            $table->string('street',100);
            $table->string('email',100);
            $table->string('phone_number',100);
      
            $table->string('quantity');
            $table->string('weight');
            $table->string('shiping_price');
            $table->enum('status', ['esewa', 'khalti',]);
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
        Schema::dropIfExists('senderinfo');
    }
}
