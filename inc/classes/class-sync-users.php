<?php

namespace BOILERPLATE\Inc;

use BOILERPLATE\Inc\Traits\Program_Logs;
use BOILERPLATE\Inc\Traits\Singleton;

class Sync_Users {

    use Singleton;
    use Program_Logs;

    public function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'admin_init', [ $this, 'get_users' ] );
    }

    public function get_users() {
        // Fetch 5 users
        $users = get_users( [
            'number' => 1,
            'fields' => 'all', // Fetch all fields
        ] );

        $users_with_meta = [];

        foreach ( $users as $user ) {
            $user_meta         = get_user_meta( $user->ID ); // Get all meta for the user
            $users_with_meta[] = [
                'ID'       => $user->ID,
                'username' => $user->user_login,
                'email'    => $user->user_email,
                'meta'     => $user_meta,
            ];
        }

        // Log the user data with meta
        $this->put_program_logs( 'Users with meta: ' . json_encode( $users_with_meta ) );
    }

}
