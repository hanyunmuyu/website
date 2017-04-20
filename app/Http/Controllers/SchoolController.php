<?php

namespace App\Http\Controllers;

use App\Repositories\v1\SchoolRepository;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    private $schoolRepository;

    public function __construct(SchoolRepository $schoolRepository)
    {
        $this->schoolRepository = $schoolRepository;
    }

    //
    public function index()
    {
        $schoolList = $this->schoolRepository->getSchoolList();
        var_dump($schoolList);
        return view('school.index');
    }
}
