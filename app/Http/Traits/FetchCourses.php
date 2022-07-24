<?php

namespace App\Http\Traits;

use App\Models\Course;

trait FetchCourses
{
    public function fetchCourses($order = 'ASC')
    {
        return Course::orderBy('name', $order)
            ->select('id', 'name')->get();
    }
}
