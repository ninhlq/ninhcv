<?php
namespace App\Repositories\Contracts ;

interface ResumeRepositoryInterface extends BaseRepositoryInterface
{
    //ví dụ: lấy 5 sản phầm đầu tiên
    public function getAllResume();
}
