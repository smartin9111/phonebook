<?php

declare(strict_types=1);

namespace null\Phonebook\App\Repositories;

use App\Models\Phonebook;
use IPhonebookRepository;

class PhonebookRepository implements IPhonebookRepository
{
    protected $model;

    public function __construct(Phonebook $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return Phonebook::all();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $record = $this->model->findOrFail($id);
        $record->update($data);
        return $record;
    }

    public function delete($id)
    {
        $record = $this->model->findOrFail($id);
        $record->delete();
        return $record;
    }
}