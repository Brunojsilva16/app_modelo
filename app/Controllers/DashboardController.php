<?php

namespace App\Controllers;

use App\Core\Auth;
use App\Models\UserModel;
use App\Models\CourseModel;
use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        if (!Auth::isLogged()) {
            header('Location: ' . BASE_URL . '/login');
            exit;
        }

        $userId = Auth::userId();
        $userPlan = Auth::userPlan();

        $userModel = new UserModel();
        $courseModel = new CourseModel();

        $user = $userModel->findById($userId);

    }
}
