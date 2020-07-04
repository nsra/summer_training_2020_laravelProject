<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'service_types' => 'Parts',
        'add_service_type' => 'New Part',
        'edit_service_type' => 'Edit Part',
        'show_service_type' => 'Show Part',

    ],

    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'name' => 'Part name',
        'about_service' => 'part description',
    ],

    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'name_required' => 'Part title Required',
        'name_max' => 'Part title max shouldn\'t be over 50 letter',
        'image_required' => 'Image part required',

    ],
    /**
     *
     * success messages
     *
     */
    'success' => [
        'stored' => 'Part has been stored successfuly',
        'can_delete' => 'part can be delete',
        'deleted' => 'part has been deleted successfuly',
        'updated' => 'part has been updated successfuly'
    ],
    /**
     *
     * error messages
     *
     */
    'error' => [
        'stored' => 'something went rong while storing the part',
        'deleted' => 'something went rong while deleting the part',
        'not_found' => 'the part is not exist',
    ],

    /**
     *
     * questions
     *
     */
    'questions' => [
        'do_remove' => 'are u sure u want 2 delete this part??'
    ]


];
