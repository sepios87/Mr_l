<?php 

class Food {
    private $id;
    private $name;
    private $ingredients;
    private $isVegetarian;

    public function __construct($id, $name, $ingredients, $isVegetarian) {
        $this->id = $id;
        $this->name = $name;
        $this->ingredients = $ingredients;
        $this->isVegetarian = $isVegetarian;
    }

    public function getName() {
        return $this->name;
    }

    public function getIsVegetarian() {
        return $this->isVegetarian;
    }

    public function getIngredients() {
        return explode(',', $this->ingredients);
    }

    public function __toString() {
        return $this->id . ' ' . $this->name . ' ' . $this->isVegetarian . ' ' . $this->ingredients;
    }
}