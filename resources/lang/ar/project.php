<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'projects' => 'الأعمال',
        'add_project' => 'عمل جديد',
        'edit_project' => 'تعديل عمل',
        'show_project' => 'عرض عمل',

    ],

    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'title' => 'العنوان',
        'description' => 'وصف العمل',
        'service_type_id' => 'القسم الذي يتبع لها',
    ],

    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'title_required' => 'عنوان العمل مطلوب',
        'title_max' => 'عنوان العمل يجب أن لا يزيد عن 50 حرف',
        'service_type_id_required' => 'القسم التي يتبع لها العمل مطلوبة',
        'image_required' => 'صورة العمل مطلوبة',

    ],
    /**
     *
     * success messages
     *
     */
    'success' => [
        'stored' => 'تم حفظ العمل بنجاح',
        'can_delete' => 'يمكن حذف العمل',
        'deleted' => 'تم حذف العمل بنجاح',
        'updated' => 'تم تحديث العمل بنجاح'
    ],
    /**
     *
     * error messages
     *
     */
    'error' => [
        'stored' => 'حدث خلل أثناء حفظ العمل',
        'deleted' => 'حدث خلل أثناء حذف العمل',
        'not_found' => 'العمل غير موجود',
    ],

    /**
     *
     * questions
     *
     */
    'questions' => [
        'do_remove' => 'هل تريد حذف العمل ؟'
    ]


];
