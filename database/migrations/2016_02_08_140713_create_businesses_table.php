<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 50);     //The name of the business
            $table->string('contact', 50);  //The name of our contact at the business
            $table->string('email', 50)->nullable();    //Email address of the contact

            //Address fields
            $table->string('line_1', 50);               
            $table->string('line_2', 50)->nullable();
            $table->string('line_3', 50)->nullable();
            $table->string('city', 50);
            $table->string('state', 50);
            $table->smallInteger('postcode');   //4 digits

            $table->softDeletes();

            $table->timestamps();
        });

        //Add our default data we will use for testing
        \App\Business::create(['name' => 'SallySally', 'contact' => 'Sally Test',
                'email' => 'sally@example.com', 'line_1' => '1 Test St', 'city' => 'Perth',
                'state' => 'Western Australia', 'postcode' => 6000]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('businesses');
    }
}
