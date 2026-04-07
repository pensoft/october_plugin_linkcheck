<?php namespace Pensoft\LinkCheck\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UpdateBrokenLinksTable extends Migration
{

    public function up(): void
    {
        Schema::table('bombozama_linkcheck_broken_links', function(Blueprint $table)
        {
            $table->text('context')->nullable();
            $table->text('url')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('bombozama_linkcheck_broken_links', function(Blueprint $table)
        {
            $table->dropColumn('context');
            $table->string('url', 255)->nullable()->change();
        });
    }

}