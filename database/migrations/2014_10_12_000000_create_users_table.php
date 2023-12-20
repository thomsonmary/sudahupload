<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }


    // public function up()
    // {
    //     Schema::table('role_user', function (Blueprint $table) {
    //         $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
    //         $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  *
    //  * @return void
    //  */
    // public function down()
    // {
    //   Schema::table('role_user', function (Blueprint $table) {
    //         $table->dropForeign('role_user_user_id_foreign');
    //         $table->dropForeign('role_user_role_id_foreign');
    //   });

    // }

};
