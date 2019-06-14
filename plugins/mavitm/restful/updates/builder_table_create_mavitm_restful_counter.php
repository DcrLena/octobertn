<?php namespace Mavitm\Restful\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMavitmRestfulCounter extends Migration
{
    public function up()
    {
        Schema::create('mavitm_restful_counter', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('api_id')->nullable()->unsigned();
            $table->string('id_address',250)->nullable();
            $table->text('request_body')->nullable();
            $table->smallInteger('total_row')->nullable();
            $table->smallInteger('head_code')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mavitm_restful_counter');
    }
}
