<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\UniversityCourse;
use Illuminate\View\View;

class FrontendController extends Controller
{

    public function createStudent(): View
    {
        $countries = Country::all();
        return view('pages.frontend.public.student-register', compact('countries'));
    }

    public function createAgent(): View
    {
        $countries = Country::all();
        return view('pages.frontend.public.agent-register', compact('countries'));
    }

    public function createUniversity(): View
    {
        $countries = Country::all();
        return view('pages.frontend.public.university-register', compact('countries'));
    }

    public function getUniversityCourses(): View
    {
        $universityCourses = UniversityCourse::query()->with(['category', 'createdBy', 'university', 'updatedBy'])->get();
        return view('pages.frontend.auth.courses', compact('universityCourses'));
    }
}