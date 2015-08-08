<?php
  $title = "Chapter 2";
  include_once 'shared/chapter_head.php';
?>
<body>
<?php include_once 'shared/header.php'; ?>
<h2>Chapter Two – Variables</h2>
<pre>
  Introduction to Variables
    Basics
    Rules
  Variable Types and Typecasting
    Boolean
    Number
    String
    Array
    Objects
    NULL
  Conclusion
</pre>
<!-- Exercice 1 -->
<h2 id="exo1">Exercice 1</h2>
<details>
  <summary>Solution | <a href="#" title="Back to top">▲ Top</a></summary>
  <pre>
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
$user_data['admin'] = (bool) $user_data['admin'];
$user_data['user_id'] = (int) $user_data['user_id'];

// Adding email field
$user_data['email'] = "john.doe@example.com";

var_dump($user_data);

?>
  </pre>
</details>

<!-- Exercice 2 -->
<h2 id="exo2">Exercice 2</h2>
<details>
  <summary>Solution | <a href="#" title="Back to top">▲ Top</a></summary>
  <pre>
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
          '0 carbs',
          '10 sugars',
          '0 proteins',
          '0 fat'
        ),
    );
  $menu['breakfast'][] = array(
      'name'            => 'Bacon & eggs',
      'ingredients'     => array('pork', 'eggs'),
      'nutrition_table' => array(
          '0 carbs',
          '5 sugars',
          '10 proteins',
          '10 fat'
        ),
    );
  $menu['breakfast'][] = array(
      'name'            => 'Orange',
      'ingredients'     => array('orange'),
      'nutrition_table' => array(
          '0 carbs',
          '10 sugars',
          '0 proteins',
          '0 fat'
        ),
    );
  $menu['breakfast'][] = array(
      'name'            => 'PBJ',
      'ingredients'     => array('peanut butter', 'jelly', 'bread'),
      'nutrition_table' => array(
          '5 carbs',
          '10 sugars',
          '5 proteins',
          '2 fat'
        ),
    );

var_dump($menu);
 ?>
  </pre>
</details>

<!-- Exercice 3 -->
<h2 id="exo3">Exercice 3</h2>
<details>
  <summary>Solution | <a href="#" title="Back to top">▲ Top</a></summary>
    <i>Incomplete: Printing array using singular item selection is tedious</i>
    <br/>
    <i>Revisited in <a href="ch5.php" title="CH5" target="_blank">CH5</a>.</i>
  <pre>
<?php 

// User meal selection
$breakfast = $menu['breakfast'];
$selected = $breakfast[0];

// Delivery message
$message = "You picked: {$selected['name']}.
This meal is made from:
  {$selected['ingredients'][0]} & {$selected['ingredients'][1]}.
The nutritional information for this meal is:
  {$selected['nutrition_table'][0]},
  {$selected['nutrition_table'][1]},
  {$selected['nutrition_table'][2]}, 
  {$selected['nutrition_table'][3]}";

var_dump($message);

 ?>
  </pre>
  
</details>
<?php include 'shared/footer.php'; ?>
</body>