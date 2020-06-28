<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'services' => 'Services',
        'add_service' => 'New Service ',
        'edit_service' => 'Edit Service',
    ],

    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'title' => 'title',
        'description' => 'service description',
        'duration' => 'days duration',
        'service_type_id' => 'service part',

    ],

    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'title_required' => 'service title required',
        'title_max' => 'service title max shouldn\'t be over 50 letter',
        'description_required' => 'service description required',
        'service_type_id_required' => 'service part requered',
        'duration_required' => 'service duration required',

    ],
    /**
     *
     * success messages
     *
     */
    'success' => [
        'stored' => 'service has been stored successfully',
        'can_delete' => 'service can delete',
        'deleted' => 'service has been deleted successfuly',
        'updated' => 'service has been edited successfully'
    ],
    /**
     *
     * error messages
     *
     */
    'error' => [
        'stored' => 'something went rong while storing the service',
        'deleted' => 'something went error while deleting the service',
        'not_found' => 'service doesnot exist',
    ],

    /**
     *
     * questions
     *
     */
    'questions' => [
        'do_remove' => 'are u shure u want to delete this service'
    ]


];
