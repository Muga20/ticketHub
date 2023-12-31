<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('country');
            $table->string('postalCode');
            $table->string('ticketSerial');
            $table->string('numberOfTickets');
            $table->timestamp('order_date')->useCurrent();
            $table->foreignId('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->decimal('total_amount', 10, 2);
            $table->string('status');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
