<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'client_reviews' => 'آراء العملاء',
        'add_client_review' => 'رأي جديد',
        'edit_client_review' => 'تعديل رأي',
        'show_client_review' => 'عرض رأي',
    ],

    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'name' => 'اسم العميل',
        'review' => 'رأي العميل',
    ],

    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'name_required' => 'اسم العميل مطلوب',
        'name_max' => 'اسم العميل يجب أن لا يزيد عن 50 حرف',
        'review_required' => 'رأي العميل مطلوب',
        'image_required' => 'صورة العميل مطلوبة',

    ],
    /**
     *
     * success messages
     *
     */
    'success' => [
        'stored' => 'تم حفظ الرأي بنجاح',
        'can_delete' => 'يمكن حذف الرأي',
        'deleted' => 'تم حذف الرأي بنجاح',
        'updated' => 'تم تحديث الرأي بنجاح'
    ],
    /**
     *
     * error messages
     *
     */
    'error' => [
        'stored' => 'حدث خلل أثناء حفظ الرأي',
        'deleted' => 'حدث خلل أثناء حذف الرأي',
        'not_found' => 'الرأي غير موجود',
    ],

    /**
     *
     * questions
     *
     */
    'questions' => [
        'do_remove' => 'هل تريد حذف الرأي ؟'
    ]


];
