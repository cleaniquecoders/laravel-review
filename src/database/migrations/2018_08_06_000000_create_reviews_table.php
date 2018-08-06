<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->hashslug();
            $table->user();
            $table->name();
            $table->description();

            /*
             * Approval
             */
            $table->is('approved');
            $table->at('approved');

            /*
             * Rejection
             */
            $table->is('rejected');
            $table->at('rejected');
            $table->unsignedInteger('rejected_count')->default(0);
            
            $table->standardTime();
        });

        Schema::create('review_reviewers', function (Blueprint $table) {
            $table->increments('id');
            $table->hashslug();
            $table->belongsTo('reviews');
            $table->addAcceptance('reviewed', config('reviewer.table_names.reviewed_by'));

            /*
             * Approval
             */
            $table->is('approved');
            $table->at('approved');

            /*
             * Rejection
             */
            $table->is('rejected');
            $table->at('rejected');
            $table->unsignedInteger('rejected_count')->default(0);

            $table->standardTime();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('review_reviewers');
        Schema::dropIfExists('reviews');
    }
}
