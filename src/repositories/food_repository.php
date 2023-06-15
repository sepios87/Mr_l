<?php

class FoodRepository
{
    private $pdoRepository;

    public function __construct($pdoRepository)
    {
        $this->pdoRepository = $pdoRepository;
    }

    public function getAll()
    {
        return $this->pdoRepository->getAll('food');
    }

    public function updateFood($id, $data)
    {
        return $this->pdoRepository->update('food', $id, $data);
    }

    public function deleteFood($id)
    {
        return $this->pdoRepository->delete('food', $id);
    }

    public function createFood($data)
    {
        return $this->pdoRepository->create('food', $data);
    }
}
