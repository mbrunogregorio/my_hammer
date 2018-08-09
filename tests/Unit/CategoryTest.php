<?php

namespace Tests\Unit;

use App\Category;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testClass()
    {
        $object = new Category();
        $this->assertTrue(!is_null($object));
    }

    public function testInsertion()
    {
        $object = new Category;
        $object->id = 1;
        $object->name = 'Test Category';
        $object->save();

        $this->assertDatabaseHas('categories', [
            'name' => 'Test Category'
        ]);
    }

    public function testUpdate()
    {
        $object = Category::find(1);
        $object->name = 'Test Update';
        $object->save();

        $this->assertDatabaseHas('categories', [
            'name' => 'Test Update'
        ]);
    }

    public function testDelete()
    {
        $object = Category::find(1);
        $object->delete();

        $this->assertDatabaseMissing('categories', [
            'id' => 1
        ]);
    }
}
