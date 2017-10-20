<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnderProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('under__projects', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->boolean('is_ftp');
            $table->string('emplacement');
            $table->string('ftp_host');
            $table->string('ftp_user');
            $table->string('ftp_pwd');
            $table->string('ftp_mode');
            $table->integer('project_id')->unsigned();;
            $table->foreign('project_id')->references('id')->on('projects')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('under_project_role', function (Blueprint $table) {
            $table->integer('role_id')->unsigned();
            $table->integer('under_project_id')->unsigned();

            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('under_project_id')->references('id')->on('under__projects')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['role_id', 'under_project_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('under__projects');
        Schema::drop('under_project_role');
    }
}
