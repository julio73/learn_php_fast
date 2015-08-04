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

// Casting admin to boolean then user id to integer
$user_data['admin'] = (boolean)$user_data['admin'];
$user_data['user_id'] = (integer)$user_data['user_id'];

// Adding email field
$user_data['email'] = "john.doe@example.com";

var_dump($user_data);

 ?>
 
<h1>Exercice 2</h1>
<?php 


 ?>