<title>Chapter 5</title>
<a href=".." title="Home">Home</a>
<h2>Chapter Five – Functions</h2>
<pre>
  Introduction
  User Defined Functions
    Function Arguments
    Return values
    Variable Scope
  Pre-defined functions
    Echo, Print, exit, die
    String functions
  Conclusion
</pre>

<!-- Exercice 1 -->
<h2>Exercice 1</h2>
<details>
  <summary>Solution</summary>
  <i>Comment: The following revisit to CH2.Exos was much needed.<br>
  Now I have to learn how to use include and share across files</i>
  <pre>
<?php 

// Copied from CH2
$ch2_menu = array(
  'breakfast' => array(), 
  'lunch'     => array(),
  'dinner'    => array(),
);
// Sample meals for breakfast
$ch2_menu['breakfast'] = array();
  $ch2_menu['breakfast'][] = array(
      'name'            => 'Coffee',
      'ingredients'     => array('sugar', 'coffee'),
      'nutrition_table' => array(
          '0 carbs',
          '10 sugars',
          '0 proteins',
          '0 fat'
        ),
    );
  $ch2_menu['breakfast'][] = array(
      'name'            => 'Bacon & eggs',
      'ingredients'     => array('pork', 'eggs'),
      'nutrition_table' => array(
          '0 carbs',
          '5 sugars',
          '10 proteins',
          '10 fat'
        ),
    );
  $ch2_menu['breakfast'][] = array(
      'name'            => 'Orange',
      'ingredients'     => array('orange'),
      'nutrition_table' => array(
          '0 carbs',
          '10 sugars',
          '0 proteins',
          '0 fat'
        ),
    );
  $ch2_menu['breakfast'][] = array(
      'name'            => 'PBJ',
      'ingredients'     => array('peanut butter', 'jelly', 'bread'),
      'nutrition_table' => array(
          '5 carbs',
          '10 sugars',
          '5 proteins',
          '2 fat'
        ),
    );

// Function revisiting CH2
// Returns a delivery message for the meal selected
function deliveryMessage($menu, $category_name, $meal_selection) {
  $meal = $menu[$category_name][$meal_selection];
  $msg_meal_name = $meal['name'];
  $msg_ingredients = implode(', ', $meal['ingredients']);
  $msg_nutrition = implode(', ', $meal['nutrition_table']);
  $message = "<p>
    You picked: <b>{$msg_meal_name}</b>.<br>
    This meal is made from: {$msg_ingredients}.<br>
    The nutritional information for this meal is: {$msg_nutrition}.
  </p>";
  return $message;
}

print deliveryMessage($ch2_menu, 'breakfast', 0); // coffee

 ?>
  </pre>
</details>

<!-- Exercice 2 -->
<h2>Exercice 2</h2>
<details>
  <summary>Solution</summary>
  <i>Side note: Lots of inconsistencies in this book and not enough review!</i>
  <pre>
<?php 

function areaRect($height, $width) {
  $area = $height * $width;
  $message = "A rectangle of length {$height} and {$width} has an area of {$area}.";
  return $message;
}

echo areaRect(3,4);

?>
</pre>
</details>