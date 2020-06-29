<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'services' => 'الخدمات',
        'add_service' => 'خدمة جديدة ',
        'edit_service' => 'تعديل خدمة',
    ],

    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'title' => 'العنوان',
        'description' => 'وصف الخدمة',
        'service_type_id' => 'القسم الذي يتبع لها',
        'duration' => 'المدة بالأيام'

    ],

    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'title_required' => 'عنوان الخدمة مطلوب',
        'title_max' => 'عنوان الخدمة يجب أن لا يزيد عن 50 حرف',
        'description_required' => 'وصف الخدمة مطلوب',
        'service_type_id_required' => 'القسم التي يتبع لها العمل مطلوبة',
        'duration_required' => 'المدة المحددة لهذه الخدمة مطلوبة',


    ],
    /**
     *
     * success messages
     *
     */
    'success' => [
        'stored' => 'تم حفظ المقال بنجاح',
        'can_delete' => 'يمكن حذف المقال',
        'deleted' => 'تم حذف المقال بنجاح',
        'updated' => 'تم تحديث المقال بنجاح'
    ],
    /**
     *
     * error messages
     *
     */
    'error' => [
        'stored' => 'حدث خلل أثناء حفظ المقال',
        'deleted' => 'حدث خلل أثناء حذف المقال',
        'not_found' => 'المقال غير موجود',
    ],

    /**
     *
     * questions
     *
     */
    'questions' => [
        'do_remove' => 'هل تريد حذف المقال ؟'
    ]


];
