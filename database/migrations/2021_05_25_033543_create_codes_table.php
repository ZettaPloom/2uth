<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('folder_id'); // The folder where resides the OTP code
            $table->foreign('folder_id')->references('id')->on('folders');
            $table->string('type',4); // The OTP type (TOTP or HOTP)
            $table->string('label',20); // The tag (aplication) of the OTP code (e.g. Google)
            $table->string('user',100); // The user which is mean to be used with the OTP code (e.g. user@domain.com)
            $table->string('issuer',20); // The issuer of the OTP code (e.g. Google)
            $table->string('algorithm',6); // The algorithm used to generate the TOTP code (e.g SHA1)
            $table->integer('digits'); // The number of digits of the TOTP code (e.g 30)
            $table->integer('counter'); // The initial counter value of the HOTP code (e.g 0)
            $table->integer('period'); // The period —in seconds— of the generated TOTP (e.g 30s)
            $table->string('secret',32); // The key used to generate the OTP code (e.g HXDMVJECJJWSRB3HWIZR4IFUGFTMXBOZ)
            $table->timestamps();
            // Refer to https://github.com/google/google-authenticator/wiki/Key-Uri-Format for more information
            // Testing https://stefansundin.github.io/2fa-qr/ and https://totp.danhersam.com/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codes');
    }
}
