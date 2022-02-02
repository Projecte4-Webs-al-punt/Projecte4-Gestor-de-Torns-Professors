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
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname');
            $table->string('lastname');
            $table->string('role')->default('student');
            $table->string('telefon')->nullable();
        });
        Schema::create('Teachers', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('Available');
            $table->foreignId('user_id')
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::create('Students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::create('Doubts', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('Pending');
            $table->string('matter')->default('Not Matter');
            $table->string('message')->nullable();
            $table->foreignId('student_id')
            ->constrained('Students');
            $table->timestamp('date_opening')->useCurrent();
            $table->foreignId('teacher_id')
            ->constrained('Teachers');
            $table->timestamp('date_resolution')->nullable();
        });
        //acronym of Class Group 
        Schema::create('ClassGroups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('grade');
        });
        //acronym of Class Group Teacher
        Schema::create('Teacher_ClassGroup', function (Blueprint $table) {
            $table->foreignId('classGroup_id')
            ->constrained('ClassGroups')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('teacher_id')
            ->constrained('Teachers');
            $table->string('tutor')->nullable();
            $table->unique(['classGroup_id','teacher_id']);
        });
        //acronym of Class Group Student
        Schema::create('Student_ClassGroup', function (Blueprint $table) {
            $table->foreignId('classGroup_id')
            ->constrained('ClassGroups')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('student_id')
            ->constrained('Students');
            $table->string('tutorship')->nullable();
            $table->string('delegate')->nullable();
            $table->unique(['classGroup_id','student_id']);
        });
        //Acronym of Subject
        Schema::create('Subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('grade');
        });
        //Acronym of Subject Teacher
        Schema::create('Teacher_Subject', function (Blueprint $table) {
            $table->foreignId('subject_id')
            ->constrained('Subjects')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('teacher_id')
            ->constrained('Teachers');
            $table->unique(['subject_id','teacher_id']);
        });
        //Acronym Of Subject Student
        Schema::create('Student_Subject', function (Blueprint $table) {
            $table->foreignId('subject_id')
            ->constrained('Subjects')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('student_id')
            ->constrained('Students');
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
        Schema::dropIfExists('Teachers');
        Schema::dropIfExists('Students');
        Schema::dropIfExists('Doubts');
        Schema::dropIfExists('ClassGroups');
        Schema::dropIfExists('Teacher_ClassGroup');
        Schema::dropIfExists('Student_ClassGroup');
        Schema::dropIfExists('Subjects');
        Schema::dropIfExists('Teacher_Subject');
        Schema::dropIfExists('Student_Subject');
    }
}
