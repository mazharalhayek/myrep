<?php

namespace App\Http\Controllers;

use App\Models\BreakingNews;
use Illuminate\Http\Request;
use App\Http\Requests\BreakingNewsRequest;
use App\Traits\ApiResponse;//here we imported the ApiResponse trait just for code modularity.

class BreakingNewsController extends Controller
{
    use ApiResponse;//included the class name so we can use the functions defined in it(successResponse & errorResponse).

    public function index()
    {
          //get all breaking news info...
          $breaknews = BreakingNews::get();

          //in this condition we are checking if the breakingnews table is empty or not.
          if($breaknews->isNotEmpty())
          {
              return $this->successResponse($breaknews,'Data fetched successfully',200);
          }

          return $this->errorResponse('there is no data in the table',401);
    }


    public function store(BreakingNewsRequest $request)
    {
        //
    }


    public function show(BreakingNewsRequest $breakingNews)
    {
        //
    }


    public function update(BreakingNewsRequest $request,$id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
