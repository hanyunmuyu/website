<?php
/**
 * Created by PhpStorm.
 * User: hanyun
 * Date: 17-4-18
 * Time: 下午4:53
 */

namespace App\Repositories\v1;


use App\Models\SchoolModel;

class SchoolRepository
{
    public function getSchoolList($limit=15)
    {
        return SchoolModel::where('status', 1)->paginate($limit);
    }
}