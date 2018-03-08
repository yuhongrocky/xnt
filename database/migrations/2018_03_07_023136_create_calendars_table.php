<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->char('id');
            $table->string('code')->nullable()->comment('编码');
            $table->char('parent_id')->nullable()->comment('父级ID');
            $table->char('school_id')->nullable()->comment('学校ID');
            $table->string('icon')->nullable()->comment('图标');
            $table->integer('sort')->nullable()->comment('排序');
            $table->integer('is_enabled')->comment('是否启用， 0 启用 1 不启用');
            $table->softDeletes('is_deleted')->comment('软删除');
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
        Schema::dropIfExists('calendars');
    }
}
