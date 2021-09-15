<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedeemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redeems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('mr_mrs');
            $table->string('dr');
            $table->string('prof');
            $table->string('nationality');
            $table->string('passport');
            $table->string('affiliation');
            $table->string('mobile_no');
            $table->string('email')->unique();
            $table->string('type_of_attendance');
            $table->string('type_of_contribution_submitted');
            $table->string('title_of_the_contribution');

            $table->string('conference_fee'); 
            $table->string('conference_dinner');
            $table->string('total_amount');
            $table->string('money_order_issued_on');
            $table->string('money_order_issued_to');

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
        Schema::dropIfExists('redeems');
    }
}
