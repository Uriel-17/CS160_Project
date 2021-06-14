<?php
require_once('../db/dbhelper.php');

// get address by user id
// for our first web version, each user will only have 1 address.
// so it is a single result
function getAddressByUserId($userId) {
	$sql = 'CALL GetAddressByUserId('.$userId.')';
	return executeSingleResult($sql);
}

// create a new address link to user by user id
// zipcode is INT
function createAddress($streetAddress, $secondAdress, $city, $state, $zipcode, $country, $userId) {
	$sql = 'CALL CreateAddress("'.$streetAddress.'", "'.$secondAdress.'", "'.$city.'", '.$state.', '.$zipcode.', "'.$country.'", '.$userId.')';
	execute($sql);
}

// update an address by its id
// address id can be gathered by getAddressByUserId since each user will only have one address for our first web version.
function updateAddress($id, $streetAddress, $secondAdress, $city, $state, $zipcode, $country) {
	$sql = 'CALL UpdateAddress('.$id.', "'.$streetAddress.'", "'.$secondAdress.'", "'.$city.'", "'.$state.'", '.$zipcode.', "'.$country.'")';
	execute($sql);
}

// delete an address by its id.
function deleteAddress($id) {
	$sql = 'CALL DeleteAddress('.$id.')';
	execute($sql);
}
