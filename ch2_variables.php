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

// Adding full name to user
$full_name = "{$user_data['name']['first']} {$user_data['name']['last']}";
$user_data['name']['full_name'] = $full_name;

 ?>