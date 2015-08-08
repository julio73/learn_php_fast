<?php 
$title = "Chapter 3";
include_once 'shared/banner.php';
?>
<h2>Chapter Three – Logical, Math and other Expressions and Operations</h2>
<pre>
  Introduction to Expressions and Operators
    Expressions
    Operators
  Conclusion
</pre>
<!-- Exercice 1 -->
<h2>Exercice 1</h2>
<details>
  <summary>Solution</summary>
  <pre>
<?php 

/*
Reproducing the following scenario with a variable:
Value is now 8.
Add 2. Value is now 10.
Subtract 4. Value is now 6.
Multiply by 5. Value is now 30.
Divide by 3. Value is now 10.
Increment value by one. Value is now 11.
Decrement value by one. Value is now 10.
*/
$num = 8;
print "Value is now $num.\n";
$num += 2;
print "Add 2. Value is now $num.\n";
$num -= 4;
print "Subtract 4. Value is now $num.\n";
$num *= 5;
print "Multiply by 5. Value is now $num.\n";
$num /= 3;
print "Divide by 3. Value is now $num.\n";
$num++;
print "Increment value by one. Value is now $num.\n";
$num--;
print "Decrement value by one. Value is now $num.\n";

 ?>
  </pre>  
</details>

<!-- Exercice 2 -->
<h2>Exercice 2</h2>
<details>
  <summary>Solution</summary>
  <pre>
<?php 

$around ="around";
echo 'What goes '.$around.' comes '.$around.'.';

 ?>
  </pre>
</details>

<!-- Exercice 3 -->
<h2>Exercice 3</h2>
<details open>
  <summary>Solution</summary>
  <i>Comment: Well, the <b>echo</b> commands still contains 
  something else like <b>.\n</b> or HTML line breaks.<br>
  And how am I supposed to guess the <b>gettype</b> function? ('O_o)</i>
  <pre>
<?php 

$whatsit = "get da mf typ";
echo "Value is ".gettype($whatsit).".\n";
$whatsit = 2.2;
echo "Value is ".gettype($whatsit).".\n";
$whatsit = false;
echo "Value is ".gettype($whatsit).".\n";
$whatsit = 1;
echo "Value is ".gettype($whatsit).".\n";
unset($whatsit); // with style!
echo "Value is ".gettype($whatsit).".\n";

 ?>
  </pre>
</details>