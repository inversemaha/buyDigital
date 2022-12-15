<?php

namespace Database\Seeders;

use App\Models\AdminRole;
use App\Models\Applicant;
use App\Models\BlogCategory;
use App\Models\Department;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\JobApply;
use App\Models\JobPost;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => "Respone Employee3 ",
            'email_address' => "employee3@gmail.com",
            'phone_number' => "01707079186",
            'password' => Hash::make('123456'),
        ]);


        /* Admin Seeder*/
        AdminRole::create([
            'name' => "Motiur Rahaman",
            'email' => "memotiur@gmail.com",
            'phone' => "01303106024",
            'password' => Hash::make('123456'),
            'is_admin' => true,
        ]);
        AdminRole::create([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'phone' => "0171784996",
            'password' => Hash::make('123456'),
            'is_admin' => true,
        ]);


        JobPost::create([
            'title' => "Title",
            'short_details' => getDummydetails(),
            'details' => getDummyNews(),
            'featured_image' => "/uploads/career/1.png",
            'last_apply_date' => "2022/12/12",
            'is_published' => "1",
        ]);
        JobPost::create([
            'title' => "Title",
            'short_details' => getDummydetails(),
            'details' => getDummyNews(),
            'featured_image' => "/uploads/career/1.png",
            'last_apply_date' => "2022/12/11",
            'is_published' => "1",
        ]);
        JobPost::create([
            'title' => "Title",
            'short_details' => getDummydetails(),
            'details' => getDummyNews(),
            'featured_image' => "/uploads/career/1.png",
            'last_apply_date' => "2022/12/10",
            'is_published' => "1",
        ]);
        JobPost::create([
            'title' => "Title",
            'short_details' => getDummydetails(),
            'details' => getDummyNews(),
            'featured_image' => "/uploads/career/1.png",
            'last_apply_date' => "2022/12/9",
            'is_published' => "1",
        ]);
        JobPost::create([
            'title' => "Title",
            'short_details' => getDummydetails(),
            'details' => getDummyNews(),
            'featured_image' => "/uploads/career/1.png",
            'last_apply_date' => "2022/12/8",
            'is_published' => "1",
        ]);
        JobPost::create([
            'title' => "Title",
            'short_details' => getDummydetails(),
            'details' => getDummyNews(),
            'featured_image' => "/uploads/career/1.png",
            'last_apply_date' => "2022/12/7",
            'is_published' => "1",
        ]);
        JobPost::create([
            'title' => "Title",
            'short_details' => getDummydetails(),
            'details' => getDummyNews(),
            'featured_image' => "/uploads/career/1.png",
            'last_apply_date' => "2022/12/5",
            'is_published' => "1",
        ]);
        JobPost::create([
            'title' => "Title",
            'short_details' => getDummydetails(),
            'details' => getDummyNews(),
            'featured_image' => "/uploads/career/1.png",
            'last_apply_date' => "2022/12/5",
            'is_published' => "1",
        ]);
        JobPost::create([
            'title' => "Title",
            'short_details' => getDummydetails(),
            'details' => getDummyNews(),
            'featured_image' => "/uploads/career/1.png",
            'last_apply_date' => "2022/12/4",
            'is_published' => "1",
        ]);
        JobPost::create([
            'title' => "Title",
            'short_details' => getDummydetails(),
            'details' => getDummyNews(),
            'featured_image' => "/uploads/career/1.png",
            'last_apply_date' => "2022/12/3",
            'is_published' => "1",
        ]);
        JobPost::create([
            'title' => "Title",
            'short_details' => getDummydetails(),
            'details' => getDummyNews(),
            'featured_image' => "/uploads/career/1.png",
            'last_apply_date' => "2022/12/2",
            'is_published' => "1",
        ]);
        JobPost::create([
            'title' => "Title",
            'short_details' => getDummydetails(),
            'details' => getDummyNews(),
            'featured_image' => "/uploads/career/1.png",
            'last_apply_date' => "2022/12/1",
            'is_published' => "1",
        ]);

        Applicant::create([
            'name' => "Badhon",
            'phone' => "01236547893",
            'email' => "examplte@gmail.com",
            'password' => Hash::make('123456'),
        ]);

        Applicant::create([
            'name' => "Motiur",
            'phone' => "01236547891",
            'email' => "examplte2@gmail.com",
            'password' => Hash::make('123456'),
        ]);

        Applicant::create([
            'name' => "Maha",
            'phone' => "01236547894",
            'email' => "examplte2@gmail.com",
            'password' => Hash::make('123456'),
        ]);

        Applicant::create([
            'name' => "Saiful",
            'phone' => "01236547898",
            'email' => "examplte3@gmail.com",
            'password' => Hash::make('123456'),
        ]);

        JobApply::create([
            'job_id' => "1",
            'applicant_id' => "1",
            'cv' => "",
            'status' => "0",
        ]);

        JobApply::create([
            'job_id' => "2",
            'applicant_id' => "1",
            'cv' => "",
            'status' => "0",
        ]);

        JobApply::create([
            'job_id' => "3",
            'applicant_id' => "1",
            'cv' => "",
            'status' => "0",
        ]);

        JobApply::create([
            'job_id' => "4",
            'applicant_id' => "1",
            'cv' => "",
            'status' => "0",
        ]);

        JobApply::create([
            'job_id' => "5",
            'applicant_id' => "2",
            'cv' => "",
            'status' => "0",
        ]);

        JobApply::create([
            'job_id' => "6",
            'applicant_id' => "2",
            'cv' => "",
            'status' => "0",
        ]);

        JobApply::create([
            'job_id' => "7",
            'applicant_id' => "2",
            'cv' => "",
            'status' => "0",
        ]);

        JobApply::create([
            'job_id' => "8",
            'applicant_id' => "2",
            'cv' => "",
            'status' => "0",
        ]);

        JobApply::create([
            'job_id' => "9",
            'applicant_id' => "2",
            'cv' => "",
            'status' => "0",
        ]);

        JobApply::create([
            'job_id' => "10",
            'applicant_id' => "3",
            'cv' => "",
            'status' => "0",
        ]);

        JobApply::create([
            'job_id' => "11",
            'applicant_id' => "3",
            'cv' => "",
            'status' => "0",
        ]);

        JobApply::create([
            'job_id' => "12",
            'applicant_id' => "2",
            'cv' => "",
            'status' => "0",
        ]);

        JobApply::create([
            'job_id' => "12",
            'applicant_id' => "1",
            'cv' => "",
            'status' => "0",
        ]);

        JobApply::create([
            'job_id' => "10",
            'applicant_id' => "2",
            'cv' => "",
            'status' => "0",
        ]);

        JobApply::create([
            'job_id' => "9",
            'applicant_id' => "1",
            'cv' => "",
            'status' => "0",
        ]);


    }


}
