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
    case Delete = 'delete';
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
        header('Location: ' . BASE_URL . '/' . $redirect );
        break;
    case FoodAction::Update->value:
        if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['ingredients']) && isset($_POST['price']) ) {
            // Mise à jour d'un plat
            $foods = $_SESSION['foods'];
            
            foreach ($foods as $food) {
                if($food->getId() == $_POST['id']){
                    $food->setName($_POST['name']);
                    $food->setIngredients($_POST['ingredients']);
                    $food->setPrice(floatval($_POST['price']));
                    if(isset($_POST['vegetarian'])){
                        $food->setIsVegetarian(1);
                    }else{
                        $food->setIsVegetarian(0);
                    }
                    $values = $food->toArray();
                }
            }

            $food_repository->updateFood($_POST['id'], $values);

            header('Location: ' . BASE_URL . '/manage-food');
            
        } else if (isset($_POST['name']) && isset($_POST['ingredients']) && isset($_POST['price'])) {
            // Création d'un nouveau plat
            $foods = $_SESSION['foods'];

            $vegetarian = 0;
            if(isset($_POST['vegetarian'])){
                $vegetarian = 1;
            }

            $price = floatval($_POST['price']);

            $values = [
                'name' => $_POST['name'],
                'ingredients' => $_POST['ingredients'],
                'price' => $price,
                'isVegetarian' => $vegetarian,
            ]; 

            $id = $food_repository->createFood($values);
            array_push($foods, new Food($id, $_POST['name'], $_POST['ingredients'], $price, $vegetarian));
            $_SESSION['foods'] = $foods;
            header('Location: ' . BASE_URL . '/manage-food');
        }

        break;
        
    case FoodAction::Delete->value:
        if (isset($_GET['id'])) {
            $foods = $_SESSION['foods'];
            $id = $_GET['id'];
            $food_repository->deleteFood($id);
            foreach ($foods as $key => $food) {
                if($food->getId() == $id){
                    unset($foods[$key]);
                }
            }
            $_SESSION['foods'] = $foods;
            header('Location: ' . BASE_URL . '/manage-food');
        }
        break;
    default:
        break;
}
