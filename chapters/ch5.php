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
  <i>Side note: Lots of inconsistencies in this book and not enough review!<br>
  I take it back, it covers interesting content in a very bad way.</i>
  <pre>
<?php 

// Ouputs the area of rectangle with the given height and width
function areaRect($height, $width) {
  $area = $height * $width;
  $message = "A rectangle of height {$height} and width {$width} has an area of {$area}.";
  return $message;
}

?>
</pre>
<form action="<?php $_PHP_SELF ?>" method="POST" accept-charset="utf-8" 
  style="padding: 5px; background-color: #efefef;">
  <p>
    <label>Height:<br>
      <input type="number" name="height" required>
    </label>
  </p>
  <p>
    <label>Width:<br>
      <input type="number" name="width" required>
    </label>
  </p>
  <button type="submit">Calculate Area</button>
  <p>
  <b>Result: </b>
    <?php 
      if (!is_null($_POST["height"]) && !is_null($_POST["width"])) {
        $h = $_POST["height"];
        $w = (int) $_POST["width"];
        echo areaRect($h, $w);
      }
    ?>
  </p>
</form> 
</details>

<!-- Exercice 3 -->
<h2>Exercice 3</h2>
<details>
  <summary>Solution</summary>
  <i>Comment: There has to be an easier way to do this month thing.<br>
  Terrible learning curve from content. What does it mean by "once again"?<br>
  When was I supposed to have used php forms so far?</i>
  <pre>
<?php 

// Calendar months and their number of days
$months = [
  "january" => 31, 
  "february" => "28 days, if leap year 29",
  "march" => 31,
  "april" => 30,
  "may" => 31,
  "june" => 30,
  "july" => 31,
  "august" => 31,
  "september" => 30,
  "october" => 31,
  "november" => 30,
  "december" => 31,
];
// Option maker for months select tag
function optionMaker($key, $value) {
  global $called;
  return "<option value=\"{$value}\">".ucwords($key)."</option>";
}

?>
</pre>
<form action="<?php $_PHP_SELF ?>" method="POST" accept-charset="utf-8"
  style="padding: 5px; background-color: #efefef;">
  <p>
    <label for="month">Please choose a month.</label>
    <select id="month" name="month">
      <?php 
        foreach ($months as $key => $value) {
          print optionMaker($key, $key);
        }
        unset($key, $value);
      ?>
    </select>
  </p>
  <button type="submit">Submit</button>
  <p>
    <b>Result: </b>
    <?php 
      if (!is_null($_POST["month"])) {
        $month = $_POST["month"];
        echo "The month of ".ucfirst($month)." has ".$months[$month]." days.";
      }
    ?>
  </p>
</form>
</details>