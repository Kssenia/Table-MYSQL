<?php

include "db.php";

$titleCategories = ['php','html5','javacaript','pascal','c++', 'c#', 'ruby', 'java'];
$insertCategories = $db->prepare("INSERT INTO categories(`title`) VALUES(:title)");
  for ($i=0; $i <7 ; $i++) { 
($insertCategories->execute(array("title" =>$titleCategories[rand(0, 7)])));

 }

$titleUsersName = ['Misha','Vasya','Grisha','Masha','Dasha'];
$titleUsersEmails = ['misha@gmail.com','vasya@mail.ru','grisha@yandex.ru','masha@i.ua','dasha@yahoo.com'];
$titleUsersRoles = ['admin','customer'];
$titleUserslLogins = ['misha','vasya','grisha','masha','dasha'];
$insertUsers = $db->prepare("INSERT INTO users(`name`,`role`,`email`,`password`,`login`,`last_activity`) VALUES(:name, :role, :email, :password, :login, :last_activity)");
 
for($i=0; $i<5; $i++){
	if ($i==0) {
	$insertUsers->execute(array(
							"name" =>$titleUsersName[rand(0, 4)],
							"role" =>$titleUsersRoles[0],
							"email" =>$titleUsersEmails[rand(0, 4)],
							"password" => '',
							"login" =>$titleUserslLogins[rand(0, 4)],
							"last_activity" => ''));
 	} else {
 		$insertUsers->execute(array(
							"name" =>$titleUsersName[rand(0, 4)],
							"role" =>$titleUsersRoles[1],
							"email" =>$titleUsersEmails[rand(0, 4)],
							"password" => '',
							"login" =>$titleUserslLogins[rand(0, 4)],
 							"last_activity" => ''));
 	}
}

	$titleProducts = ['Pineapple','Tourist tour','Alphabet book','Austian Opera CD','Toshiba laptop'];
	$descriptionProducts = ['test test test test', 'axst axst axst axst', 'stsd testsd stxc estgfs', 'dqq1st sdazst czxast 123st', 'czxest fdest test teasd'];
	$insertProducts = $db->prepare("INSERT INTO products(`title`,`description`,`price`,`category_id`) VALUES(:title, :description, :price, :category_id)");
		for ($i=0; $i <5 ; $i++) { 
	($insertCategories->execute(array("title" =>$titleCategories[rand(0, 7)])));

	 }



// $insertCategories = $db->prepare("INSERT INTO categories(`title`) VALUES(:title)");
//   for ($i=0; $i <7 ; $i++) { 
// ($insertCategories->execute(array("title" =>$titleCategories[rand(0, 7)])));



// $insertedIds = [];



// function randVal( $valName ) {



// 	/* User Data */

// 	$names = ['Misha','Vasya','Grisha','Masha','Dasha'];

// 	$emails = ['misha@gmail.com','vasya@mail.ru','grisha@yandex.ru','masha@i.ua','dasha@yahoo.com'];

// 	$roles = ['admin','customer'];

// 	$logins = ['misha','vasya','grisha','masha','dasha'];




// 	/* Categories */

// // 	$categories = ['food', 'leasure', 'books', 'music', 'art', 'film', 'tech', 'dances'];
// // $insertCategories = $db->prepare("INSERT INTO categories(`title`) VALUES(:title)");
// //   for ($i=0; $i <7 ; $i++) { 
// //   $insertCategories->execute(array("title" =>$titleCategories[rand(0, 7)]));
// //  };
	

// 	/* Products */

// 	$productTitles = ['Pineapple', 'Tourist tour', 'Alphabet book', 'Austian Opera CD', 'Toshiba laptop'];

// 	$productDescriptions  = ['test test test test', 'axst axst axst axst', 'stsd testsd stxc estgfs', 'dqq1st sdazst czxast 123st', 'czxest fdest test teasd', ];

	
 
// 	/* Orders */

// 	$orderStatuses = ['open','in progress','closed'];

	

// 	/* Reviews */

// 	$reviewTexts = ['Good', 'Bad', 'Normal', 'Awful', 'Great'];

	
// 	$categories = ['food', 'leasure', 'books', 'music', 'art', 'film', 'tech', 'dances'];
// 	$titleCategories = ['php','html5','javacaript','pascal','c++', 'c#', 'ruby', 'java'];
// 	$insertCategories = $db->prepare("INSERT INTO categories(`title`) VALUES(:title)");
//   for ($i=0; $i <7 ; $i++) { 
//   $insertCategories->execute(array("title" =>$titleCategories[rand(0, 7)]));
//  };

// 	if( $valName == 'roles' ) {

// 		return "'".$$valName[rand(0,1)]."'";

// 	}

// 	else if( $valName == 'orderStatuses' ) {

// 		return "'".$$valName[rand(0,2)]."'";

// 	}

// 	else {

// 		return "'".$$valName[rand(0,4)]."'";

// 	}

// }


//$insert = $db->prepare("INSERT INTO users(`name`,`email`,`roles`,`logins`) VALUES(:name, :email, :roles, :logins)");
//$insert->execute(array('name' => 'Misha', 'email' => 'misha@gmail.com', 'roles' =>'admin', 'logins' => 'misha'));


/*function fakeDataInsert( $db, &$insertedIds, $table, $amount ) {

	for( $i=0; $i<$amount; $i++ ) {

		insertRow( $db, $insertedIds, $table);

	}

}



fakeDataInsert( $db, $insertedIds, 'categories', 10 );

fakeDataInsert( $db, $insertedIds, 'products', 500 );

fakeDataInsert( $db, $insertedIds, 'users', 100 );

fakeDataInsert( $db, $insertedIds, 'orders', 300 );

fakeDataInsert( $db, $insertedIds, 'reviews', 200 );*/

