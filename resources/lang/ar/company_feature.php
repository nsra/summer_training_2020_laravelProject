<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'company_features' => 'مميزات الشركة',
        'add_feature' => 'ميزة جديدة ',
        'edit_feature' => 'تعديل ميزة',
        'show_feature' => 'عرض ميزة',

    ],

    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'title' => 'العنوان',
        'description' => 'وصف الميزة',

    ],

    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'title_required' => 'عنوان الميزة مطلوب',
        'title_max' => 'عنوان الميزة يجب أن لا يزيد عن 50 حرف',
        'description_required' => 'وصف الميزة مطلوب',
        'company_feature_image_required' => 'صورة الميزة مطلوبة',


    ],
    /**
     *
     * success messages
     *
     */
    'success' => [
        'stored' => 'تم حفظ الميزة بنجاح',
        'can_delete' => 'يمكن حذف الميزة',
        'deleted' => 'تم حذف الميزة بنجاح',
        'updated' => 'تم تحديث الميزة بنجاح'
    ],
    /**
     *
     * error messages
     *
     */
    'error' => [
        'stored' => 'حدث خلل أثناء حفظ الميزة',
        'deleted' => 'حدث خلل أثناء حذف الميزة',
        'not_found' => 'الميزة غير موجود',
    ],

    /**
     *
     * questions
     *
     */
    'questions' => [
        'do_remove' => 'هل تريد حذف الميزة ؟'
    ]


];
