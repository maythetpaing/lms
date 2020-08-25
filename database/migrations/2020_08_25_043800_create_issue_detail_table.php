<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssueDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue_detail', function (Blueprint $table) {
             $table->id();
             $table->unsignedBigInteger('member_id');
              $table->unsignedBigInteger('book_id');
              $table->date('issue_date');
              $table->date('due_date');
              $table->integer('status');
              $table->integer('fee');

            $table->timestamps();
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issue_detail');
    }
}
