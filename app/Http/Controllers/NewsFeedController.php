<?php

namespace App\Http\Controllers;

use App\Models\NewsFeed;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;//here we imported the ApiResponse trait just for code modularity.

class NewsFeedController extends Controller
{
    use ApiResponse;//included the class name so we can use the functions defined in it(successResponse & errorResponse).

    public function index()
    {
         //get all news info...
         $newsFeed = NewsFeed::get();

         //in this condition we are checking if the newsfeed table is empty or not.
         if($newsFeed->isNotEmpty())
         {
             return $this->successResponse($newsFeed,'Data fetched successfully',200);
         }

         return $this->errorResponse('there is no data in the table',401);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(NewsFeed $newsFeed)
    {
        //
    }

    public function update(Request $request, NewsFeed $newsFeed)
    {
        //
    }

    public function destroy(NewsFeed $newsFeed)
    {
        //
    }
}
