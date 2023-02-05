<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_registers', function (Blueprint $table) {
            $table->id();
            $table->string('studentName', 100);
            $table->string('studentNameLetter1', 10);
            $table->string('studentNameLetter2', 10);
            $table->string('studentNameLetter3', 10);
            $table->string('studentNameLetter4', 10);
            $table->string('studentNameLetter5', 10);
            $table->string('studentNameLetter6', 10);
            $table->string('studentNameLetter7', 10);
            $table->string('studentNameLetter8', 10);
            $table->string('studentNameLetter9', 10);
            $table->string('studentNameLetter10', 10);
            $table->string('studentNameLetter11', 10);
            $table->string('studentNameLetter12', 10);
            $table->string('studentNameLetter13', 10);
            $table->string('studentNameLetter14', 10);
            $table->string('studentNameLetter15', 10);

            $table->string('studentFatherName', 100);
            $table->string('studentFatherNameLetter1', 10);
            $table->string('studentFatherNameLetter2', 10);
            $table->string('studentFatherNameLetter3', 10);
            $table->string('studentFatherNameLetter4', 10);
            $table->string('studentFatherNameLetter5', 10);
            $table->string('studentFatherNameLetter6', 10);
            $table->string('studentFatherNameLetter7', 10);
            $table->string('studentFatherNameLetter8', 10);
            $table->string('studentFatherNameLetter9', 10);
            $table->string('studentFatherNameLetter10', 10);
            $table->string('studentFatherNameLetter11', 10);
            $table->string('studentFatherNameLetter12', 10);
            $table->string('studentFatherNameLetter13', 10);
            $table->string('studentFatherNameLetter14', 10);
            $table->string('studentFatherNameLetter15', 10);

            $table->string('studentLastName', 100);
            $table->string('studentLastNameLetter1', 10);
            $table->string('studentLastNameLetter2', 10);
            $table->string('studentLastNameLetter3', 10);
            $table->string('studentLastNameLetter4', 10);
            $table->string('studentLastNameLetter5', 10);
            $table->string('studentLastNameLetter6', 10);
            $table->string('studentLastNameLetter7', 10);
            $table->string('studentLastNameLetter8', 10);
            $table->string('studentLastNameLetter9', 10);
            $table->string('studentLastNameLetter10', 10);
            $table->string('studentLastNameLetter11', 10);
            $table->string('studentLastNameLetter12', 10);
            $table->string('studentLastNameLetter13', 10);
            $table->string('studentLastNameLetter14', 10);
            $table->string('studentLastNameLetter15', 10);

            $table->string('studentGrandFatherName', 100);
            $table->string('studentGrandFatherNameLetter1', 10);
            $table->string('studentGrandFatherNameLetter2', 10);
            $table->string('studentGrandFatherNameLetter3', 10);
            $table->string('studentGrandFatherNameLetter4', 10);
            $table->string('studentGrandFatherNameLetter5', 10);
            $table->string('studentGrandFatherNameLetter6', 10);
            $table->string('studentGrandFatherNameLetter7', 10);
            $table->string('studentGrandFatherNameLetter8', 10);
            $table->string('studentGrandFatherNameLetter9', 10);
            $table->string('studentGrandFatherNameLetter10', 10);
            $table->string('studentGrandFatherNameLetter11', 10);
            $table->string('studentGrandFatherNameLetter12', 10);
            $table->string('studentGrandFatherNameLetter13', 10);
            $table->string('studentGrandFatherNameLetter14', 10);
            $table->string('studentGrandFatherNameLetter15', 10);

            $table->string('DoB', 50);

            $table->string('studentGender', 10);
            $table->string('examLang', 20);
            $table->string('examType', 20);

            $table->string('relativeName', 50);
            $table->string('relativeType', 50);
            $table->string('relativeJob', 50);
            $table->string('relativePhone', 20);

            $table->string('studentProvince', 100);
            $table->string('studentDistrict', 100);
            $table->string('studentVillage', 100);

            $table->string('studentTazkiraNo', 50);
            $table->string('studentPassport', 50);

            $table->string('studentSchool', 100);
            $table->string('schoolGraduateYear', 10);

            $table->string('studentPhone', 20);
            $table->string('studentEmail', 50);

            $table->string('faculty', 50);

            $table->string('certificate', 100);

            $table->string('certificate1', 100);
            $table->string('certificate2', 100);
            $table->string('certificate3', 100);
            $table->string('certificate4', 100);




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
        Schema::dropIfExists('online_registers');
    }
}
