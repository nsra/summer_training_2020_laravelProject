<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'admins' => 'Admins',
        'add_admin' => 'New admin',
        'edit_admin' => 'Edit Admin',
        'show_admin' => 'Show Admin',

    ],

    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'name' => 'الاسم',
        'email' => 'البريد الإلكتروني',
        'password' => 'كلمة المرور',
    ],

    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'name_required' => 'Admin name required',
        'name_max' => 'Name must not be over 50',
        'email_required' => 'email required',

        'image_required' => 'Admin image required',
    ],
    /**
     *
     * success messages
     *
     */
    'success' => [
        'stored' => 'Admin saved',
        'can_delete' => 'Admin can be delete',
        'deleted' => 'Admin deleted',
        'updated' => 'admin edited',
        'admin_login' => 'Y R Login as admin successfuly',

    ],
    /**
     *
     * error messages
     *
     */
    'error' => [
        'stored' => 'error happend while storing admin',
        'deleted' => 'error happend while deleting admin',
        'not_found' => 'Admin does not exist',
    ],

    /**
     *
     * questions
     *
     */
    'questions' => [
        'do_remove' => 'Are u sure u whant 2 delete admin ?'
    ]


];
