<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'order_steps' => 'Steps to order project',
        'add_order_step' => 'Add Step',
        'edit_order_step' => 'Edit Step',
        'create_order_step' => 'Create Step',
        'show_order_step' => 'Show Step',
    ],

    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'title' => 'title',
        'description' => 'description',
        'number' => 'Order',
    ],

    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'title_required' => 'step title required',
        'title_max' => 'step title should not be over 50 letter',
        'description_required' => 'step description is required',


    ],
    /**
     *
     * success messages
     *
     */
    'success' => [
        'stored' => 'step stored successfully',
        'can_delete' => 'step can deleted',
        'deleted' => 'step deleted successfully',
        'updated' => 'step edited successfully'
    ],
    /**
     *
     * error messages
     *
     */
    'error' => [
        'stored' => 'sth went error while storing the step',
        'deleted' => 'sth went error while deleting the step',
        'not_found' => 'step does not exist',
    ],

    /**
     *
     * questions
     *
     */
    'questions' => [
        'do_remove' => 'are u sure u whant to remove the step??'
    ]


];
