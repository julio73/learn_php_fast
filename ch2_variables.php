<h1>Exercice 1</h1>
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

$full_name = "{$user_data['name']['first']} {$user_data['name']['last']}";
echo "Full name: ".$full_name

 ?>