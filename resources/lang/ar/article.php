<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'articles' => 'المقالات',
        'add_article' => 'مقال جديد',
        'edit_article' => 'تعديل مقال',
        'show_article' => 'عرض مقال',
    ],

    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'title' => 'العنوان',
        'description' => 'نص المقال',
        'admin_id' => 'المدير',
    ],

    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'title_required' => 'عنوان المقال مطلوب',
        'title_max' => 'عنوان المقال جب أن لا يزيد عن 50 حرف',
        'description_required' => 'وصف المقال مطلوب',
        'article_image_required' => 'صورة المقال مطلوبة',
        'article_image_image' => 'الملف المرفق يجب أن يكون صورة',


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
