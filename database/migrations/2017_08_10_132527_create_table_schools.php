<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSchools extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->string('id');
            $table->string('district_id')->nullable();
            $table->string('province_id')->nullable();
            $table->string('city_id')->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('school_type')->nullable();
            $table->string('class_type')->nullable();
            $table->string('full_name')->nullable();
            $table->string('master')->nullable();
            $table->string('accommodation')->nullable();
            $table->string('establishment_year')->nullable();
            $table->string('entrance_way')->nullable();
            $table->string('tel')->nullable();
            $table->string('test_type')->nullable();
            $table->string('addr')->nullable();
            $table->string('special_admissions')->nullable();
            $table->string('website')->nullable();
            $table->text('content')->nullable();
            $table->boolean('is_draft')->default(true);
            $table->integer('view_count')->unsigned()->default(0)->index();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
