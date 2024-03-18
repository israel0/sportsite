<?php

use App\Models\User;
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
            $table->uuid("id");
            $table->string('name');
            $table->integer("userType")->default(1);
            $table->string('email')->unique();
            $table->bigInteger("phoneNumber");
            $table->string("career");
            $table->string("proof_of_payment")->nullable();
            $table->string("status")->default(1);
            $table->string("age")->nullable()->enum(["male" , "female"]);
            $table->string("current_team")->nullable();
            $table->string("previous_team")->nullable();
            $table->string("videolink")->default("youtube.com/url");
            $table->string("description")->nullable();
            $table->timestamp("date_of_birth")->nullable();
            $table->string("nationality")->nullable();
            $table->integer("isVisible")->default(0);
            $table->string('image')->nullable("default.png");
            $table->string("height")->nullable();
            $table->integer("onboardState")->default(1);
            $table->string("weight")->nullable();
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
};
