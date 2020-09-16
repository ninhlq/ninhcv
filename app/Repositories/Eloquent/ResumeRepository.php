<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ResumeRepositoryInterface;
use App\Resume;

class ResumeRepository extends BaseRepository implements ResumeRepositoryInterface
{
    protected $model;
    public function getModel()
    {
        return Resume::class;
    }

    public function getAllResume()
    {
        return Resume::all();
    }
}
