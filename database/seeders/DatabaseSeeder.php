<?php

namespace Database\Seeders;

use App\Models\Borrower;
use App\Models\Category;
use App\Models\Department;
use App\Models\Item;
use App\Models\Supplier;
use App\Models\Universities;
use Database\Factories\BorrowerFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->getDepartments();
        $this->getCategories();
        $this->getUniversities();
    }

    public function getCategories()
    {
        $Categoriesjson = file_get_contents(database_path() . '/categories.json');
        $categories = json_decode($Categoriesjson, true)['categories'];

        foreach ($categories as $category) {
            Category::firstOrCreate($category);
        }
    }

    public function getDepartments()
    {
        $DepartmentsJson = file_get_contents(database_path() . '/departments.json');
        $departments = json_decode($DepartmentsJson, true)['departments'];

        foreach ($departments as $department) {
            Department::firstOrCreate($department);
        }
    }
    public function getUniversities()
    {
        $universitiesJson = file_get_contents(database_path() . '/universities.json');
        $universities = json_decode($universitiesJson, true)['universities'];

        foreach ($universities as $university) {
            Universities::firstOrCreate($university);
        }
    }
}
