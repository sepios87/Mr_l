<?php

include_once '../core/config.php';
include_once '../repositories/pdo_repository.php';
include_once '../models/food.class.php';
include_once '../repositories/food_repository.php';
$food_repository = new FoodRepository(PdoRepository::getInstance());

enum FoodAction: string
{
    case Get = 'get';
    case Update = 'update';
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
$redirect = ''; 
if (isset($_GET['redirect'])) {
    $redirect = $_GET['redirect'];
}

switch ($action) {
    case FoodAction::Get->value:
        $food = $food_repository->getAll();
        header('Location: ' . BASE_URL );
        break;
    case FoodAction::Update->value:
        if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['ingredients']) && isset($_POST['price']) && isset($_POST['vegetarian']) ) {
            $foods = $_SESSION['foods'];
            
            foreach ($foods as $food) {
                if($food->getId() == $_POST['id']){
                    $food->setName($_POST['name']);
                    $food->setIngredients($_POST['ingredients']);
                    $food->setPrice($_POST['price']);
                    $food->setVegetarian($_POST['vegetarian']);

                    $values = $food->toArray();
                }
            }
            $food_repository->updateFood($values, isset($_POST['id']));

            header('Location: ' . BASE_URL . '/manage-food');
            
        }else if (isset($_POST['name']) && isset($_POST['ingredients']) && isset($_POST['price']) && isset($_POST['vegetarian']) ) {
            $foods = $_SESSION['foods'];

            $values = [
                'name' => $_POST['name'],
                'ingredients' => $_POST['ingredients'],
                'isVegetarian' => $_POST['vegetarian'],
            ]; 

            $id = $food_repository->createFood($values);
            var_dump($id);
            // array_push($foods, new Food(0, $_POST['name'], $_POST['ingredients'], $_POST['price'], $_POST['vegetarian']));

        }

        break;
    default:
        break;
}
