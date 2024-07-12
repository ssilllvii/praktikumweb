<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ExperienceController extends BaseController
{
    public function index()
    {
        return view('experience');
    }
}
?>