<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw("'1994-11-11 00:00:00' ON UPDATE CURRENT_TIMESTAMP()"));
            $table->tinyInteger('role_id')->nullable()->default(3);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('full_name');
            $table->string('student_id', 20)->unique()->nullable();
            $table->string('phone', 10)->nullable();
            $table->date('birthday')->nullable()->default('1994-11-11');
            $table->tinyInteger('gender')->nullable();
            $table->string('class', 20)->nullable();
            $table->string('department')->nullable();
            $table->string('faculty')->nullable();
            $table->text('about_me')->nullable();
            $table->string('profile_picture_path')->nullable();
            $table->boolean('is_active')->default(1);
            $table->boolean('is_email_confirmed')->default(0);
            // $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
