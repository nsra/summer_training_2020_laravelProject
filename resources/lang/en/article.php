<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'articles' => 'Articles',
        'add_article' => 'Add Article',
        'edit_article' => 'Edit Article',
        'show_article' => 'Show Article',
    ],
    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'title' => 'Title',
        'description' => 'Description',
        'admin_id' => 'Admin',
    ],
    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'title_required' => 'article tiltle is required',
        'title_max' => 'article max shouldn\'t be over 50 letter',
        'description_required' => 'article\'s description is required',
        'article_image_required' => 'article\'s image is required',
        'article_image_image' => 'atatched file should be an image',

    ],
    /**
     *
     * success messages
     *
     */
    'success' => [
        'stored' => 'article saved successfully',
        'deleted' => 'article deleted successfully',
        'updated' => 'article has been updated successfully'
    ],
    /**
     *
     * error messages
     *
     */
    'error' => [
        'stored' => 'something went wrong while saving article',
        'deleted' => 'Something went wrong while deleting article',
        'not_found' => 'article is not found',
    ],

    /**
     *
     * questions
     *
     */
    'questions' => [
        'do_remove' => 'Do you want to remove article?'
    ]
];
