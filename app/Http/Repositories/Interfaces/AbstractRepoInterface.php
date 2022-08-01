<?php

namespace App\Http\Repositories\Interfaces;

interface AbstractRepoInterface
{
    public function findOrFail($id);
    public function bulkDelete(Array $ids);
    public function getAll();
    public function findWhere($column,$value);
    public function getAllOrderBy($column,$sort);
    public function findWhereIn($column,Array $values);
    public function getWhereOperand($column,$operand,$value);
    public function findWhereFirst($column,$value);
    public function create(Array $data);
    public function update(Array $data,$model);
    public function bulkRestore(Array $ids);
    public function Inputs(Array $data);
    public function Paginate(Array $input,Array $wheres);

}
