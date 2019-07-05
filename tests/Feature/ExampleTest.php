<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Course;
use App\Lab;
use App\Assignment;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;


    // Course Tests


    /** @test */
    public function a_course_can_be_created()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/courses', [
            'name' => 'Project Management',
            'major' => 'Software Engineering',
            'year' => '1999',
            'semester' => 'Winter',
            'section' => '1',
            'status' => 'ongoing',
        ]);

        $this->assertCount(1, Course::all());
        $response->assertRedirect('/courses');

        return $response;
    }

    /** @test */
    public function a_name_is_required()
    {
        $response = $this->post('/courses', [
            'name' => '',
            'major' => 'Software Engineering',
            'year' => '1999',
            'semester' => 'Winter',
            'section' => '1',
            'status' => 'ongoing',
        ]);

        $response->assertSessionHasErrors('name');
    }

    /** @test */
    public function a_major_is_required()
    {
        $response = $this->post('/courses', [
            'name' => 'Project Management',
            'major' => '',
            'year' => '1999',
            'semester' => 'Winter',
            'section' => '1',
            'status' => 'ongoing',
        ]);

        $response->assertSessionHasErrors('major');
    }

    /** @test */
    public function a_year_is_required()
    {
        $response = $this->post('/courses', [
            'name' => 'Project Management',
            'major' => 'Software Engineering',
            'year' => '',
            'semester' => 'Winter',
            'section' => '1',
            'status' => 'ongoing',
        ]);

        $response->assertSessionHasErrors('year');
    }

    /** @test */
    public function a_semester_is_required()
    {
        $response = $this->post('/courses', [
            'name' => 'Project Management',
            'major' => 'Software Engineering',
            'year' => '1999',
            'semester' => '',
            'section' => '1',
            'status' => 'ongoing',
        ]);

        $response->assertSessionHasErrors('semester');
    }

    /** @test */
    public function a_section_is_required()
    {
        $response = $this->post('/courses', [
            'name' => 'Project Management',
            'major' => 'Software Engineering',
            'year' => '1999',
            'semester' => 'Winter',
            'section' => '',
            'status' => 'ongoing',
        ]);

        $response->assertSessionHasErrors('section');
    }

    /** @test */
    public function a_status_is_required()
    {
        $response = $this->post('/courses', [
            'name' => 'Project Management',
            'major' => 'Software Engineering',
            'year' => '1999',
            'semester' => 'Winter',
            'section' => '1',
            'status' => '',
        ]);

        $response->assertSessionHasErrors('status');
    }

    /** @test */
    public function a_course_can_be_updated()
    {
        $this->withoutExceptionHandling();

        $this->post('/courses', [
            'name' => 'Project Management',
            'major' => 'Software Engineering',
            'year' => '1999',
            'semester' => 'Winter',
            'section' => '1',
            'status' => 'ongoing',
        ]);

        $course = Course::first();

        $response = $this->patch('/courses/' . $course->id, [
            'name' => 'New name',
            'major' => 'New major',
            'year' => 'New year',
            'semester' => 'New semester',
            'section' => 'New section',
            'status' => 'New status',
        ]);

        $this->assertEquals('New name', Course::first()->name);
        $this->assertEquals('New major', Course::first()->major);
        $this->assertEquals('New year', Course::first()->year);
        $this->assertEquals('New semester', Course::first()->semester);
        $this->assertEquals('New section', Course::first()->section);
        $this->assertEquals('New status', Course::first()->status);

        $response->assertRedirect('/courses/' . $course->id);
    }

    /** @test */
    public function a_course_can_be_deleted()
    {
        $this->withExceptionHandling();

        $this->post('/courses', [
            'name' => 'Project management',
            'major' => 'Software Engineering',
            'year' => '1999',
            'semester' => 'Winter',
            'section' => '1',
            'status' => 'ongoing',
        ]);

        $course = Course::first();
        $this->assertCount(1, Course::all());

        $response = $this->delete('/courses/' . $course->id);

        $this->assertCount(0, Course::all());
        $response->assertRedirect('/courses');
    }


    // Lab Tests


    /** @test */
    public function a_lab_can_be_created()
    {
        $this->post('/courses', [
            'name' => 'Project management',
            'major' => 'Software Engineering',
            'year' => '1999',
            'semester' => 'Winter',
            'section' => '1',
            'status' => 'ongoing',
        ]);

        $course = Course::first();

        $response = $this->post('/courses/' . $course->id . '/labs', [
            'title' => 'Requirements Document',
            'max_members' => '1',
            'deadline' => '22-06-2018',
            'status' => 'open',
            'course_id' => $course->id,
        ]);

        $this->assertCount(1, Lab::all());
        $response->assertRedirect('/courses/' . $course->id . '/labs');
    }

    /** @test */
    public function a_title_is_required()
    {
        $this->post('/courses', [
            'name' => 'Project management',
            'major' => 'Software Engineering',
            'year' => '1999',
            'semester' => 'Winter',
            'section' => '1',
            'status' => 'ongoing',
        ]);

        $course = Course::first();

        $response = $this->post('/courses/' . $course->id . '/labs', [
            'title' => '',
            'max_members' => '1',
            'deadline' => '22-06-2018',
            'status' => 'open',
            'course_id' => $course->id,
        ]);

        $response->assertSessionHasErrors('title');
    }

    /** @test */
    public function a_max_members_is_required()
    {
        $this->post('/courses', [
            'name' => 'Project management',
            'major' => 'Software Engineering',
            'year' => '1999',
            'semester' => 'Winter',
            'section' => '1',
            'status' => 'ongoing',
        ]);

        $course = Course::first();

        $response = $this->post('/courses/' . $course->id . '/labs', [
            'title' => 'Requirements Document',
            'max_members' => '',
            'deadline' => '22-06-2018',
            'status' => 'open',
            'course_id' => $course->id,
        ]);

        $response->assertSessionHasErrors('max_members');
    }

    /** @test */
    public function a_deadline_is_required()
    {
        $this->post('/courses', [
            'name' => 'Project management',
            'major' => 'Software Engineering',
            'year' => '1999',
            'semester' => 'Winter',
            'section' => '1',
            'status' => 'ongoing',
        ]);

        $course = Course::first();

        $response = $this->post('/courses/' . $course->id . '/labs', [
            'title' => 'Requirements Document',
            'max_members' => '1',
            'deadline' => '',
            'status' => 'open',
            'course_id' => $course->id,
        ]);

        $response->assertSessionHasErrors('deadline');
    }

    /** @test */
    public function a_lab_can_be_updated()
    {
        $this->withoutExceptionHandling();

        $this->post('/courses', [
            'name' => 'Project management',
            'major' => 'Software Engineering',
            'year' => '1999',
            'semester' => 'Winter',
            'section' => '1',
            'status' => 'ongoing',
        ]);

        $course = Course::first();

        $this->post('/courses/' . $course->id . '/labs', [
            'title' => 'Requirements Document',
            'max_members' => '1',
            'deadline' => '22-06-2018',
        ]);

        $lab = Lab::first();

        $response = $this->patch('/courses/' . $course->id . '/labs/' . $lab->id, [
            'title' => 'New title',
            'max_members' => 'New max_members',
            'deadline' => 'New deadline',
            // 'status' => 'New status',
        ]);

        $this->assertEquals('New title', Lab::first()->title);
        $this->assertEquals('New max_members', Lab::first()->max_members);
        $this->assertEquals('New deadline', Lab::first()->deadline);
        // $this->assertEquals('New status', Lab::first()->status);

        $response->assertRedirect('/courses/' . $course->id . '/labs/' . $lab->id);
    }

    /** @test */
    public function a_lab_can_be_deleted()
    {
        $this->post('/courses', [
            'name' => 'Project management',
            'major' => 'Software Engineering',
            'year' => '1999',
            'semester' => 'Winter',
            'section' => '1',
            'status' => 'ongoing',
        ]);

        $course = Course::first();
        $this->assertCount(1, Course::all());

        $this->post('/courses/' . $course->id . '/labs', [
            'title' => 'Requirements Document',
            'max_members' => '1',
            'deadline' => '22-06-2018',
        ]);

        $lab = Lab::first();
        $this->assertCount(1, Lab::all());

        $response = $this->delete('/courses/' . $course->id . '/labs/' . $lab->id);
        $this->assertCount(0, Lab::all());
        $response->assertRedirect('/courses/' . $course->id . '/labs');
    }


    // Assignment Tests


    /** @test */
    public function an_assignment_can_be_created()
    {
        $this->withoutExceptionHandling();

        $this->post('/courses', [
            'name' => 'Project management',
            'major' => 'Software Engineering',
            'year' => '1999',
            'semester' => 'Winter',
            'section' => '1',
            'status' => 'ongoing',
        ]);

        $course = Course::first();
        $this->assertCount(1, Course::all());

        $this->post('/courses/' . $course->id . '/labs', [
            'title' => 'Requirements Document',
            'max_members' => '1',
            'deadline' => '22-06-2018',
        ]);

        $lab = Lab::first();
        $this->assertCount(1, Lab::all());

        $response = $this->post('/courses/' . $course->id . '/labs/' . $lab->id . '/assignments', [
            'title' => 'assignment8798',
            'source' => 'file.txt',
            'mark' => '10',
            'status' => 'pending',
            'visibility' => 'private',
            'comment' => 'None',
            'user_id' => '1',
        ]);

        $this->assertCount(1, Assignment::all());
        $response->assertRedirect('/courses/' . $course->id . '/labs/' . $lab->id . '/assignments');
    }

}
