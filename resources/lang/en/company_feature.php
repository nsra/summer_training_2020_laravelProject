<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'company_features' => 'Company Features',
        'add_feature' => 'New Feature ',
        'edit_feature' => 'Edit Feature',
        'show_feature' => 'Show Feature',

    ],

    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'title' => 'title',
        'description' => 'feature description',

    ],

    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'title_required' => 'feature title required',
        'title_max' => 'title must be less than 100 character',
        'description_required' => 'feature description required',
        'company_feature_image_required' => 'image feature required',


    ],
    /**
     *
     * success messages
     *
     */
    'success' => [
        'stored' => 'feature saved successfully',
        'can_delete' => 'feature can be deleted',
        'deleted' => 'feature deleted successfully',
        'updated' => 'feature updater successfully'
    ],
    /**
     *
     * error messages
     *
     */
    'error' => [
        'stored' => 'sth went rong while storing feature',
        'deleted' => 'sth went rong while deleting feature',
        'not_found' => 'feature does not exist',
    ],

    /**
     *
     * questions
     *
     */
    'questions' => [
        'do_remove' => 'are u sure u want 2 delete the feature??'
    ]


];
