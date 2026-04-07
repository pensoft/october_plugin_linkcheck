<?php namespace Pensoft\LinkCheck\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBrokenLinksTable extends Migration
{

    public function up(): void
    {
        Schema::create('bombozama_linkcheck_broken_links', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('plugin');
            $table->string('model');
            $table->integer('model_id')->nullable();
            $table->string('field')->nullable();
            $table->integer('status');
            $table->string('url');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bombozama_linkcheck_broken_links');
    }

}