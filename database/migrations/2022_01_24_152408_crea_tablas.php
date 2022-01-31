<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreaTablas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname');
            $table->string('user')->unique();
            $table->string('role')->default('alumne');
            $table->string('telefon')->nullable();
        });
        Schema::create('Teacher', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('Disponible');
            $table->foreignId('users_id')
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::create('Student', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::create('Doubt', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('Pendent');
            $table->string('matter')->default('Sense assumpte');
            $table->string('message');
            $table->timestamp('data_opening')->useCurrent();
            $table->timestamp('data_resolution')->nullable();
            $table->foreignId('student_id')
            ->constrained('Student');
            $table->foreignId('teacher_id')
            ->constrained('Teacher');
        });
        //acronym of Class Group 
        Schema::create('CG', function (Blueprint $table) {
            $table->id('id_classe');
            $table->string('name');
            $table->string('grade');
        });
        //acronym of Class Group Teacher
        Schema::create('CGT', function (Blueprint $table) {
            $table->foreignId('CG_id')
            ->constrained('Teacher')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('teacher_id')
            ->constrained('Teacher');
            $table->string('tutor')->nullable();
            $table->unique(['CG_id','teacher_id']);
        });
        //acronym of Class Group Student
        Schema::create('CGS', function (Blueprint $table) {
            $table->foreignId('CG_id')
            ->constrained('Teacher')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('student_id')
            ->constrained('Student');
            $table->string('tutorship')->nullable();
            $table->string('delegate')->nullable();
            $table->unique(['CG_id','student_id']);
        });
        //Acronym of Subject
        Schema::create('S', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('grade');
        });
        //Acronym of Subject Teacher
        Schema::create('ST', function (Blueprint $table) {
            $table->foreignId('subject_id')
            ->constrained('S')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('teacher_id')
            ->constrained('Teacher');
            $table->unique(['subject_id','teacher_id']);
        });
        //Acronym Of Subject Student
        Schema::create('SS', function (Blueprint $table) {
            $table->foreignId('subject_id')
            ->constrained('S')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('student_id')
            ->constrained('Student');
            $table->string('Presentation')->nullable();
            $table->unique(['subject_id','student_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('Teacher');
        Schema::dropIfExists('Student');
        Schema::dropIfExists('Doubt');
        Schema::dropIfExists('CG');
        Schema::dropIfExists('CGT');
        Schema::dropIfExists('CGS');
        Schema::dropIfExists('S');
        Schema::dropIfExists('ST');
        Schema::dropIfExists('SS');
    }
}
