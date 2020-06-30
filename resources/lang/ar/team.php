<?php


return [

    /**
     *
     * titles translations
     *
     */
    'titles' => [
        'teams' => 'فريق العمل',
        'add_team' => 'موظف جديد',
        'edit_team' => 'تعديل موظف',
    ],

    /**
     *
     * fields translations
     *
     */
    'fields' => [
        'name' => 'اسم الموظف',
        'bio' => 'عن الموظف',
    ],

    /**
     *
     * validation translations
     *
     */
    'validations' => [
        'name_required' => 'اسم الموظف مطلوب',
        'name_max' => 'اسم الموظف يجب أن لا يزيد عن 50 حرف',
        'image_required' => 'صورة الموظف مطلوبة',
        'show_team' => 'عرض موظف',


    ],
    /**
     *
     * success messages
     *
     */
    'success' => [
        'stored' => 'تم حفظ لموظف بنجاح',
        'can_delete' => 'يمكن حذف الموظف',
        'deleted' => 'تم حذف الموظف بنجاح',
        'updated' => 'تم تحديث الموظف بنجاح'
    ],
    /**
     *
     * error messages
     *
     */
    'error' => [
        'stored' => 'حدث خلل أثناء حفظ الموظف',
        'deleted' => 'حدث خلل أثناء حذف الموظف',
        'not_found' => 'الموظف غير موجود',
    ],

    /**
     *
     * questions
     *
     */
    'questions' => [
        'do_remove' => 'هل تريد حذف الموظف ؟'
    ]


];
