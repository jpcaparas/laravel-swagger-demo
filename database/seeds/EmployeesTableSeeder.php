<?php

use Illuminate\Database\Seeder;

use App\Models\Employee;

class EmployeesTableSeeder extends ApiSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class, self::NUMBER_OF_RECORDS)->create();
    }
}
