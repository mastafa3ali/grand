<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\TagRepo;
use App\Http\Requests\Api\TagRequest;
use App\Http\Requests\BulkDeleteRequest;
use App\Http\Resources\TagResource;
use App\Http\Resources\SearchResource;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TagController extends Controller
{
    protected $repo;

    public function __construct(TagRepo $repo)
    {
        $this->repo = $repo;
    }

    public function index(Request $request)
    {
        try {
            $input = $this->repo->inputs($request->all());
            $model = new Tag();
            $columns = Schema::getColumnListing($model->getTable());

            if (count($input["columns"]) < 1 || (count($input["columns"]) != count($input["column_values"])) || (count($input["columns"]) != count($input["operand"]))) {
                $wheres = [];
            } else {
                $wheres = $this->repo->whereOptions($input, $columns);
            }
            $data = $this->repo->Paginate($input, $wheres);
            return responseSuccess([
                'data' => $input["resource"] == "all" ? TagResource::collection($data) : SearchResource::collection($data),
                'meta' => [
                    'total' => $data->count(),
                    'currentPage' => $input["offset"],
                    'lastPage' => $input["paginate"] != "false" ? $data->lastPage() : 1,
                ],
            ], __('app.data_returned_successfully'));
        } catch (\Exception $e) {
            return responseFail($e->getMessage());
        }
    }

    public function get($id)
    {
        try {
            $data = $this->repo->findOrFail($id);

            return responseSuccess([
                'data' => new TagResource($data),
            ], __('app.data_returned_successfully'));
        } catch (\Exception $e) {
            return responseFail($e->getMessage());
        }
    }

    public function store(TagRequest $request)
    {
        try {
            $input = [
                'title' => $request->title,
                'add_id' => $request->add_id,
            ];
            $data = $this->repo->create($input);
            if ($data) {
                return responseSuccess(new TagResource($data));
            } else {
                return responseFail(__('app.some_thing_error'));
            }
        } catch (\Exception $e) {
            return responseFail(__('app.some_thing_error'));
        }
    }


    public function update($id, TagRequest $request)
    {
        try {
            $item = $this->repo->findOrFail($id);
            $input = [
                'title' => $request->title,
                'add_id' => $request->add_id,
            ];
            $data = $this->repo->update($input, $item);

            if ($data) {
                return responseSuccess(new TagResource($item->refresh()), __('app.data_Updated_successfully'));
            } else {
                return responseFail(__('app.some_thing_error'));
            }
        } catch (\Exception $e) {
            return responseFail($e->getMessage());
        }
    }

    public function bulkDelete(BulkDeleteRequest $request)
    {

        DB::beginTransaction();
        try {

            $data = $this->repo->bulkDelete($request->ids);
            if ($data) {

                DB::commit();
                return responseSuccess([], __('app.data_deleted_successfully'));
            } else {
                return responseFail(__('app.some_thing_error'));
            }
        } catch (\Exception $e) {
            DB::rollback();
            return responseFail(__('app.some_thing_error'));
        }
    }

    public function bulkRestore(BulkDeleteRequest $request)
    {
        try {
            $data = $this->repo->bulkRestore($request->ids);
            if ($data) {
                return responseSuccess([], __('app.data_restored_successfully'));
            } else {
                return responseFail(__('app.some_thing_error'));
            }
        } catch (\Exception $e) {
            return responseFail(__('app.some_thing_error'));
        }
    }
}
