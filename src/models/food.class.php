<?php 

class Food {
    private $id;
    private $name;
    private $ingredients;
    private $isVegetarian;
    private $price; 

    public function __construct($id, $name, $ingredients, $isVegetarian, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->ingredients = $ingredients;
        $this->isVegetarian = $isVegetarian;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getIsVegetarian() {
        return $this->isVegetarian;
    }
    
    public function setIsVegetarian($isVegetarian) {
        $this->isVegetarian = $isVegetarian;
    }

    public function getIngredients() {
        return explode(',', $this->ingredients);
    }

    public function setIngredients($ingredients) {
        $this->ingredients = $ingredients;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = (float) $price;
    }

    public function __toString() {
        return $this->id . ' ' . $this->name . ' ' . $this->isVegetarian . ' ' . $this->ingredients;
    }
    
    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'ingredients' => $this->ingredients,
            'isVegetarian' => $this->isVegetarian
        ];
    }
}