<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'order_steps' => 'كيف تطلب مشروعك',
        'add_order_step' => 'إضافة خطوة ',
        'edit_order_step' => 'تعديل خطوة',
        'create_order_step' => 'إضافة خطوة',

        'show_order_step' => 'عرض خطوة',
    ],

    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'title' => 'العنوان',
        'description' => 'الوصف',
        'number' => 'الترتيب'
    ],

    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'title_required' => 'عنوان الخطوة مطلوب',
        'title_max' => 'عنوان الخطوة يجب أن لا يزيد عن 50 حرف',
        'description_required' => 'وصف الخطوة مطلوب',
        'company_feature_image_required' => 'صورة الخطوة مطلوبة',


    ],
    /**
     *
     * success messages
     *
     */
    'success' => [
        'stored' => 'تم حفظ الخطوة بنجاح',
        'can_delete' => 'يمكن حذف الخطوة',
        'deleted' => 'تم حذف الخطوة بنجاح',
        'updated' => 'تم تحديث الخطوة بنجاح'
    ],
    /**
     *
     * error messages
     *
     */
    'error' => [
        'stored' => 'حدث خلل أثناء حفظ الخطوة',
        'deleted' => 'حدث خلل أثناء حذف الخطوة',
        'not_found' => 'الخطوة غير موجود',
    ],

    /**
     *
     * questions
     *
     */
    'questions' => [
        'do_remove' => 'هل تريد حذف الخطوة ؟'
    ]


];
