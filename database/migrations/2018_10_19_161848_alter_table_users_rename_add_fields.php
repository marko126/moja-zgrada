<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AlterTableUsersRenameAddFields extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('username', 'name');
            $table->string('first_name')->nullable()->change();
            $table->string('last_name')->nullable()->change();
            $table->dropColumn('lastlogin');
            $table->dateTime('last_login');
            $table->dropColumn('lastchange');
            $table->dropColumn('created');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
