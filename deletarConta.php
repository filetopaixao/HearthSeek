<?php
	require_once("../../../../wp-load.php");
	$loggedUser =  wp_get_current_user();

	delete_user_meta( $loggedUser->ID , 'date_registered_hearthseek');
    delete_user_meta( $loggedUser->ID , 'battletag');
    delete_user_meta( $loggedUser->ID , 'location');
    delete_user_meta( $loggedUser->ID , 'lat');
    delete_user_meta( $loggedUser->ID , 'lng');
    delete_user_meta( $loggedUser->ID , 'ranking');
    delete_user_meta( $loggedUser->ID , 'heroes');
    delete_user_meta( $loggedUser->ID , 'user-facebook');
    delete_user_meta( $loggedUser->ID , 'user-twitch');
    delete_user_meta( $loggedUser->ID , 'user-discord');
    delete_user_meta( $loggedUser->ID , 'age');
    delete_user_meta( $loggedUser->ID , 'gender');

    header("Location: http://www.marduktv.com.br/hearthseek/");
?>