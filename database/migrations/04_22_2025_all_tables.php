<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->char('full_name',150);
            $table->string('roll_no', 25)->unique();
            $table->char('leave_type', 30);
            $table->dateTime('from_date');
            $table->dateTime('to_date');
            $table->text('reason');
            $table->string('attachment', 100);
//            $table->dateTime('created_at')->useCurrent();
            $table->integer('created_by')->nullable();
//            $table->dateTime('updated_at')->useCurrent();
            $table->timestamps();
        });

        Schema::create('grade_i', function (Blueprint $table) {
            $table->id();
            $table->char('full_name',150);
            $table->string('roll_no', 25)->unique();
            $table->char('course_type', 40);
            $table->text('valid_reason');
            $table->string('attachment_i', 100);
//            $table->dateTime('created_at')->useCurrent();
            $table->integer('created_by')->nullable();
//            $table->dateTime('updated_at')->useCurrent();
            $table->timestamps();
        });

        Schema::create('conflicts_student', function (Blueprint $table) {
            $table->id();
            $table->char('first_name',150);
            $table->string('first_roll_no', 25)->unique();
            $table->char('second_name',150);
            $table->string('second_roll_no', 25)->unique();
            $table->text('issue_explain');
            $table->dateTime('date_issue');
//            $table->dateTime('created_at')->useCurrent();
            $table->integer('created_by')->nullable();
//            $table->dateTime('updated_at')->useCurrent();
            $table->timestamps();
        });

        Schema::create('timetable_clash', function (Blueprint $table) {
            $table->id();
            $table->char('full_name',150);
            $table->string('roll_no', 25)->unique();
            $table->char('first_course', 40);
            $table->char('second_course', 40);
            $table->dateTime('clash_date');
            $table->dateTime('clash_time');
            $table->text('description_clash');
//            $table->dateTime('created_at')->useCurrent();
            $table->integer('created_by')->nullable();
//            $table->dateTime('updated_at')->useCurrent();
            $table->timestamps();
        });

        Schema::create('extra_act', function (Blueprint $table) {
            $table->id();
            $table->char('full_name',150);
            $table->string('roll_no', 25)->unique();
            $table->dateTime('act_date');
            $table->dateTime('act_time');
            $table->char('activity_type', 50);
            $table->text('activity_explained');
//            $table->dateTime('created_at')->useCurrent();
            $table->integer('created_by')->nullable();
//            $table->dateTime('updated_at')->useCurrent();
            $table->timestamps();
        });

        Schema::create('scholarship_aid', function (Blueprint $table) {
            $table->id();
            $table->char('full_name',150);
            $table->string('roll_no', 25)->unique();
            $table->char('semester', 40);
            $table->char('cgpa', 40);
            $table->char('monthly_income');
            $table->text('reason_scholarship');
            $table->string('attachment', 100);
//            $table->dateTime('created_at')->useCurrent();
            $table->integer('created_by')->nullable();
//            $table->dateTime('updated_at')->useCurrent();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
