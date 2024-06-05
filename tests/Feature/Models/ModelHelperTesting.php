<?php

namespace Tests\Feature\Models;

use Illuminate\Database\Eloquent\Model;

trait ModelHelperTesting
{

    public function test_insert_data(): void
    {
        $model = $this->model();
        $table = $model->getTable();
        $data = $model::factory()->create()->toArray();

        $this->assertDatabaseHas($table, $data);
    }

    abstract protected function model() : Model;

}
