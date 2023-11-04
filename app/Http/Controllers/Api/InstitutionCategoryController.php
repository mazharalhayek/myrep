<?php

namespace App\Http\Controllers\Api;

use App\Models\InstitutionCategory;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;//here we imported the ApiResponse trait just for code modularity.

class InstitutionCategoryController extends Controller
{
    use ApiResponse;//included the class name so we can use the functions defined in it(successResponse & errorResponse).

    //-------show all existing Categories--------//
    public function index()
    {
        //get all categories info...
        $categories = InstitutionCategory::get();

        //in this condition we are checking if the categories table is empty or not.
        if($categories->isNotEmpty())
        {
            return $this->successResponse($categories,'Data fetched successfully',200);
        }

        return $this->errorResponse('there is no data in the table',401);
    }


    public function store(Request $request)
    {
        //
    }


    public function show(InstitutionCategory $institutionCategory)
    {
        //
    }


    public function update(Request $request, InstitutionCategory $institutionCategory)
    {
        //
    }


    public function destroy(InstitutionCategory $institutionCategory)
    {
        //
    }
}
