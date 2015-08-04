<!-- Exercice 1 -->
<h1>Exercice 1</h1>
<details open>
<?php 
$user_data = array(
    'username'  => 'test_user',
    'name'      => array(
      'first'   => 'John',
      'last'    => 'Doe',
    ),
    'admin'     => 0,
    'user_id'   => '42',
  );

// Adding full name to user
$full_name = "{$user_data['name']['first']} {$user_data['name']['last']}";
$user_data['name']['full_name'] = $full_name;

// Casting admin to boolean then user id to integer
$user_data['admin'] = (boolean)$user_data['admin'];
$user_data['user_id'] = (integer)$user_data['user_id'];

// Adding email field
$user_data['email'] = "john.doe@example.com";

var_dump($user_data);

 ?>
 
<h1>Exercice 2</h1>
<?php 

// Creating menu for restaurant with multidimensional array
// Menu has 3 subcategories
// Each subcategory includes 4 meals/foods
// Each food must have a list of ingredients and a list of nutritional information
$menu = array(
  'breakfast' => array(), 
  'lunch'     => array(),
  'dinner'    => array(),
);
// Sample meals for breakfast
$menu['breakfast'] = array();
  $menu['breakfast'][] = array(
      'name'            => 'Coffee',
      'ingredients'     => array('sugar', 'coffee'),
      'nutrition_table' => array(
          'carbs'   => 0,
          'sugars'  => 10,
          'protein' => 0,
          'fat'     => 0,
        ),
    );
  $menu['breakfast'][] = array(
      'name'            => 'Bacon & eggs',
      'ingredients'     => array('pork', 'eggs'),
      'nutrition_table' => array(
          'carbs'   => 0,
          'sugars'  => 5,
          'protein' => 10,
          'fat'     => 10,
        ),
    );
  $menu['breakfast'][] = array(
      'name'            => 'Orange',
      'ingredients'     => array('orange'),
      'nutrition_table' => array(
          'carbs'   => 0,
          'sugars'  => 10,
          'protein' => 0,
          'fat'     => 0,
        ),
    );
  $menu['breakfast'][] = array(
      'name'            => 'PBJ',
      'ingredients'     => array('peanut butter', 'jelly', 'bread'),
      'nutrition_table' => array(
          'carbs'   => 5,
          'sugars'  => 10,
          'protein' => 5,
          'fat'     => 2,
        ),
    );

var_dump($menu);
 ?>