<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'client_reviews' => 'Client Reviews',
        'add_client_review' => 'New Review',
        'edit_cliet_review' => 'Edit Review',
    ],

    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'name' => 'Client Name',
        'view' => 'Client Review',
    ],

    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'name_required' => 'Client name required',
        'name_max' => 'Client name max shouldn\'t be over 50 letter',
        'view_required' => 'Client Review required',
        'image_required' => 'Client Image required',

    ],
    /**
     *
     * success messages
     *
     */
    'success' => [
        'stored' => 'the review has been saved successfully',
        'can_delete' => 'review can deleted',
        'deleted' => 'revie has been deleted successfully',
        'updated' => 'review has been edited successfully'
    ],
    /**
     *
     * error messages
     *
     */
    'error' => [
        'stored' => 'something went wrong while storing the review',
        'deleted' => 'something went wrong while editing the review',
        'not_found' => 'the review is not exist',
    ],

    /**
     *
     * questions
     *
     */
    'questions' => [
        'do_remove' => 'are u shore u whant 2 delete the review??'
    ]


];
