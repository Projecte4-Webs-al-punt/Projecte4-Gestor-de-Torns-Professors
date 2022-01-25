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
        Schema::create('Usuari', function (Blueprint $table) {
            $table->id('codi');
            $table->string('usuari')->unique();
            $table->string('contrasenya')->unique();
            $table->string('rol')->default('alumne');
            $table->string('nom');
            $table->string('cognoms');
            $table->string('email')->unique();
            $table->timestamp('email_verificat')->nullable();
            $table->string('telefon')->nullable();
            $table->timestamps();
        });
        Schema::create('Professor', function (Blueprint $table) {
            $table->id('codi_prof');
            $table->string('estat')->default('Disponible');
            $table->unsignedBigInteger('codi');
            $table->foreign('codi')
            ->references('codi')
            ->on('Usuari')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::create('Alumne', function (Blueprint $table) {
            $table->id('codi_alumn');
            $table->unsignedBigInteger('codi');
            $table->foreign('codi')
            ->references('codi')
            ->on('Usuari')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::create('Dubte', function (Blueprint $table) {
            $table->id('id_dubte');
            $table->string('estat')->default('Pendent');
            $table->string('assumpte')->default('Sense assumpte');
            $table->string('missatge');
            $table->timestamp('data_obertura')->useCurrent();
            $table->timestamp('data_resolucio')->nullable();
            $table->unsignedBigInteger('codi_alumn');
            $table->foreign('codi_alumn')
            ->references('codi_alumn')
            ->on('Alumne');
            $table->unsignedBigInteger('codi_prof');
            $table->foreign('codi_prof')
            ->references('codi_prof')
            ->on('Professor');
        });
        Schema::create('Grupclasse', function (Blueprint $table) {
            $table->id('id_classe');
            $table->string('nom');
            $table->string('curs');
        });
        Schema::create('Grupclasse_prof', function (Blueprint $table) {
            $table->unsignedBigInteger('id_classe');
            $table->foreign('id_classe')
            ->references('id_classe')
            ->on('Grupclasse')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('codi_prof');
            $table->foreign('codi_prof')
            ->references('codi_prof')
            ->on('Professor');
            $table->string('tutor')->nullable();
            $table->unique(['id_classe','codi_prof']);
        });
        Schema::create('Grupclasse_alumn', function (Blueprint $table) {
            $table->unsignedBigInteger('id_classe');
            $table->foreign('id_classe')
            ->references('id_classe')
            ->on('Grupclasse')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('codi_alumn');
            $table->foreign('codi_alumn')
            ->references('codi_alumn')
            ->on('Alumne');
            $table->string('tutoria')->nullable();
            $table->string('delegat')->nullable();
            $table->unique(['id_classe','codi_alumn']);
        });
        Schema::create('Assignatura', function (Blueprint $table) {
            $table->id('id_assign');
            $table->string('nom');
            $table->string('curs');
        });
        Schema::create('Assignatura_prof', function (Blueprint $table) {
            $table->unsignedBigInteger('id_assign');
            $table->foreign('id_assign')
            ->references('id_assign')
            ->on('Assignatura')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('codi_prof');
            $table->foreign('codi_prof')
            ->references('codi_prof')
            ->on('Professor');

            $table->unique(['id_assign','codi_prof']);
        });
        Schema::create('Assignatura_alumn', function (Blueprint $table) {
            $table->unsignedBigInteger('id_assign');
            $table->foreign('id_assign')
            ->references('id_assign')
            ->on('Assignatura')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('codi_alumn');
            $table->foreign('codi_alumn')
            ->references('codi_alumn')
            ->on('Alumne');
            $table->string('presentacio')->nullable();
            $table->unique(['id_assign','codi_alumn']);
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
        Schema::dropIfExists('Usuari');
        Schema::dropIfExists('Professor');
        Schema::dropIfExists('Alumne');
        Schema::dropIfExists('Dubte');
        Schema::dropIfExists('Grupclasse');
        Schema::dropIfExists('Grupclasse_prof');
        Schema::dropIfExists('Grupclasse_alumn');
        Schema::dropIfExists('Assignatura');
        Schema::dropIfExists('Assignatura_prof');
        Schema::dropIfExists('Assignatura_alumn');
    }
}
