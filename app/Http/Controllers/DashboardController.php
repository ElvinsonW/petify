<?php

namespace App\Http\Controllers;

use App\Models\ArticleRequest;
use Database\Factories\ArticleRequestFactory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        return view("dashboard.indexDashboard",[
            "requests" => ArticleRequest::all()
        ]);
    }
}
