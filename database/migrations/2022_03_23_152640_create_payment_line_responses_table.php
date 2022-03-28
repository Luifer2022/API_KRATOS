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
        Schema::create('payment_line_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_id')->constrained('payments');
            $table->foreignId('payment_line_request_id')->constrained('payment_line_requests');
            $table->string('name',75);
            $table->string('last_name',75);
            $table->string('dni',45);
            $table->string('account_type',45);
            $table->string('account_number',45); //hash
            $table->string('bank',45);
            $table->string('payment_linecol',45);
            $table->string('run',45);
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
        Schema::dropIfExists('payment_line_responses');
    }
};
