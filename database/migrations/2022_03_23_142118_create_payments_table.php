<?php

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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('agreement_id');
            $table->integer('agreement_line_id');
            $table->integer('customer_id');
            $table->integer('member_id');
            $table->double('amount',26,2); //total_ttc
            $table->integer('payment_method_id');
            $table->date('due_date');
            $table->string('email',100)->nullable();
            $table->integer('phone')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->integer('user_update_id')->nullable();
            $table->softDeletes('delete_at',0);
            $table->foreignId('payment_status_id')->constrained('payment_status');
            $table->integer('payment_status_response_id')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
