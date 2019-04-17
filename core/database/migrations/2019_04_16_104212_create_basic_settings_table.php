<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_settings', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('websiteTitle');
            $table->string('colorCode');
            $table->string('currencyText');

            $table->string('currencySymbol');
            $table->integer('registration');
            $table->integer('EmailVerification');

            $table->integer('SMSVerification');
            $table->integer('EmailNotification');
            $table->integer('SMSNotification');

            $table->text('sms_api');
            $table->string('email_sent_form');
            $table->text('email_template');


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
        Schema::dropIfExists('basic_settings');
    }
}
