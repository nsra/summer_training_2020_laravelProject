<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'teams' => 'Working Team',
        'add_team' => 'New Member',
        'edit_team' => 'Edit Member',
        'show_team' => 'Show Member',

    ],

    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'name' => 'member name',
        'bio' => 'about member',
    ],

    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'name_required' => 'member name is required',
        'name_max' => 'Member name max shouldn\'t be over 50 letter',
        'image_required' => 'member image required',

    ],
    /**
     *
     * success messages
     *
     */
    'success' => [
        'stored' => 'member has been stord successfuly',
        'can_delete' => 'member can delete',
        'deleted' => 'member has been deleted successfuly',
        'updated' => 'member has been edited successfuly'
    ],
    /**
     *
     * error messages
     *
     */
    'error' => [
        'stored' => 'something went rong while storing the member',
        'deleted' => 'something went rong while deleting the member',
        'not_found' => 'member does not exist',
    ],

    /**
     *
     * questions
     *
     */
    'questions' => [
        'do_remove' => 'are u sure u want 2 delete the member??'
    ]


];
