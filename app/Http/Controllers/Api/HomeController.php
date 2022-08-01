<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddResource;
use App\Http\Resources\TagResource;
use App\Models\Add;

class HomeController extends Controller
{
   
    public function advertiserAdds($id)
    {
        try {
            $data = Add::where('user_id',$id)->get();

            return responseSuccess([
                'data' =>  AddResource::collection($data),
            ], __('app.data_returned_successfully'));
        } catch (\Exception $e) {
            return responseFail($e->getMessage());
        }
    }
    public function filterByCategory($id)
    {
        try {
            $data = Add::where('category_id',$id)->get();

            return responseSuccess([
                'data' =>  AddResource::collection($data),
            ], __('app.data_returned_successfully'));
        } catch (\Exception $e) {
            return responseFail($e->getMessage());
        }
    }
    public function filterByTag($id)
    {
        try {
            $data = Add::whereHas('tags', function ($q) use ($id) {
                $q->where('id', $id);
            })->get();

            return responseSuccess([
                'data' =>  AddResource::collection($data),
            ], __('app.data_returned_successfully'));
        } catch (\Exception $e) {
            return responseFail($e->getMessage());
        }
    }

}
