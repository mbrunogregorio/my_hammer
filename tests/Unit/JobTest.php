<?php

namespace Tests\Unit;

use App\Category;
use App\Job;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testClass()
    {
        $object = new Job();
        $this->assertTrue(!is_null($object));
    }

    public function testInsertion()
    {
        $object = new Category;
        $object->id = 1;
        $object->name = 'Test Category';
        $object->save();

        $object = new Job;
        $object->id = 1;
        $object->category_id = 1;
        $object->name = 'Test Job';
        $object->zipcode = 99998;
        $object->execute_at = Carbon::now();
        $object->save();

        $this->assertDatabaseHas('jobs', [
            'name' => 'Test Job'
        ]);
    }

    public function testUpdate()
    {
        $object = Job::find(1);
        $object->name = 'Test Update';
        $object->save();

        $this->assertDatabaseHas('jobs', [
            'name' => 'Test Update'
        ]);
    }

    public function testDelete()
    {
        $object = Job::find(1);
        $object->delete();

        $object = Category::find(1);
        $object->delete();

        $this->assertDatabaseMissing('jobs', [
            'id' => 1
        ]);
    }
}
