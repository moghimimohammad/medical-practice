<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Field;
use App\Models\Practice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Empty_;

class PracticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields = Field::factory()->count(15)->create();
        collect(range(0,19))
        ->each(function () use ($fields) {
            Practice::factory()
            ->has(Employee::factory()->count(rand(8, 10)))
            ->hasAttached($fields->random(3))
            ->create();
        });
    }
}
