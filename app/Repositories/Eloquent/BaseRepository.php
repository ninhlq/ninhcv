<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\BaseRepositoryInterface;

abstract class BaseRepository implements BaseRepositoryInterface
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;
    /**
     * EloquentRepository constructor.
     */
    public function __construct()
    {
        $this->setModel();
    }
    /**
     * get model
     * @return string
     */
    abstract public function getModel();
    /**
     * Set model
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }
    /**
     * Get All
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->model->orderBy('id', 'desc')->get();
    }
    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $result = $this->model->find($id);
        return $result;
    }

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create(array $input)
    {
        return $this->model->create($input);
    }
    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return bool|mixed
     */
    public function update(array $input, $id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($input);
            return $result;
        }
        return false;
    }
    /**
     * Delete
     *
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $result = $this->find($id);

        if ($result) {
            $result->delete();
            return true;
        }

        return false;
    }

    public function save()
    {
        return $this->save();
    }
}
