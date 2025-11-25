<?php

namespace App\Controllers;

use App\Core\Auth;
use App\Models\CourseModel;
use App\Models\ContentModel;
use App\Controllers\BaseController;

class AdminController extends BaseController
{
    private CourseModel $courseModel;

    public function __construct()
    {
        if (!Auth::isAdmin()) {
            header('Location: ' . BASE_URL . '/login');
            exit;
        }
        $this->courseModel = new CourseModel();
    }

}