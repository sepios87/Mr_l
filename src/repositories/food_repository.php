<?php

session_start();

class FoodRepository
{
    private $pdoRepository;

    public function __construct($pdoRepository)
    {
        $this->pdoRepository = $pdoRepository;
    }

    public function getAll()
    {
        
        $foods = $this->pdoRepository->getAll('food');
        var_dump($foods);

        $foods = array_map(function ($food) {
            return new food($food['id'], $food['name'], $food['ingredients'], $food['isVegetarian'], $food['price']); 
        }, $foods);
        $_SESSION['foods'] = $foods;
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
