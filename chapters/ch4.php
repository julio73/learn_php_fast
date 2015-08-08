<?php 
  $title = "Chapter 4";
  include_once 'shared/chapter_head.php';
?>
<body>
<?php include_once 'shared/header.php'; ?>
<h2>Chapter Four – Control Structures</h2>
<pre>
  Introduction
  If statements
    If Statements
    If Else Statements
    If-elseif-else statement
  Switch
  Alternate syntax to control structures
  While
  Do-while
  For
  Foreach
  Break
  Continue
  Return
  Include
  Require
  Require_once
  Include_once
  Conclusion
</pre>

<!-- Exercice 1 -->
<h2 id="exo1">Exercice 1</h2>
<details>
  <summary>Solution | <a href="#" title="Back to top">▲ Top</a></summary>
  <pre>
<?php 

/* Print one of the following line based on the month
It's August, so it's really hot.
Not August, so at least not in the peak of the heat.
*/

if (date('F', time()) === 'August') {
  print "It's August, so it's really hot.";
} else {
  print "Not August, so at least not in the peak of the heat.";
}

 ?>
  </pre>  
</details>

<!-- Exercice 2 -->
<h2 id="exo2">Exercice 2</h2>
<details>
  <summary>Solution | <a href="#" title="Back to top">▲ Top</a></summary>
  <i>Comment: What kind of HTML must be included exactly? I hope I added enough.</i>
  <pre>
<?php 

/* Use while, do-while and two for loops to respectly print:
abc abc abc abc abc abc abc abc abc
xyz xyz xyz xyz xyz xyz xyz xyz xyz
1 2 3 4 5 6 7 8 9
1. Item A
2. Item B
3. Item C
4. Item D
5. Item E
6. Item F
*/
// while
$i = 0;
print "<p>";
while ($i < 9) {
  print "<span>abc</span> ";
  $i++;
}
print "</p>";
// do-while
$i = 0;
print "<p>";
do {
  print "<span>zyz</span> ";
  $i++;
} while ($i < 9);
print "</p>";
// for
print "<p>";
for ($i = 1; $i < 10; $i++) {
  print "<span>".$i."</span> ";
}
print "</p>";
// for
print "<ol>";
for ($i = "A"; $i < "G"; $i++) {
  print "<li>Item ".$i."</li>";
}
print "</ol>"
 ?>
  </pre>  
</details>

<!-- Exercice 3 -->
<h2 id="exo3">Exercice 3</h2>
<details>
  <summary>Solution | <a href="#" title="Back to top">▲ Top</a></summary>
  <pre>
<?php 
// Printing square equations for numbers 1 to 12
for ($i = 1; $i < 13; $i++) {
  print $i." * ".$i." = ".($i**2)."\n";
}
// Thanks $i
unset($i);

?>
  </pre>
</details>
<?php include 'shared/footer.php'; ?>
</body>