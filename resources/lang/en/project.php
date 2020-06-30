<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'projects' => 'Projects',
        'add_project' => 'New Project',
        'edit_project' => 'Edit Project',
        'show_project' => 'Show Project',

    ],

    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'title' => 'Project Title',
        'description' => 'Project Description',
        'service_type_id' => 'Service type',
    ],

    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'title_required' => 'Project Title required',
        'title_max' => 'Project Title max shouldn\'t be over 50 letter',
        'service_type_id_required' => 'service_type that this project related to; is required',
        'image_required' => 'Project image required',

    ],
    /**
     *
     * success messages
     *
     */
    'success' => [
        'stored' => 'project stored successfully',
        'can_delete' => 'project can delete',
        'deleted' => 'project has been deleted successfully',
        'updated' => 'project has been edited successfully'
    ],
    /**
     *
     * error messages
     *
     */
    'error' => [
        'stored' => 'something went rong while saving the project',
        'deleted' => 'something went rong while deleting the project',
        'not_found' => 'the project not found',
    ],

    /**
     *
     * questions
     *
     */
    'questions' => [
        'do_remove' => 'are u sure u want to delete the project?'
    ]


];
