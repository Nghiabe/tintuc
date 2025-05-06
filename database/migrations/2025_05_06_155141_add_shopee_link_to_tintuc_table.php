<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShopeeLinkToTintucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('tintuc', function (Blueprint $table) {
        $table->string('shopee_link')->nullable()->after('NoiDung'); // thêm sau cột NoiDung
    });
}

public function down()
{
    Schema::table('tintuc', function (Blueprint $table) {
        $table->dropColumn('shopee_link');
    });
}

}
