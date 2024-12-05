<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Tekshiruv Xatolari Til Satrlari
    |--------------------------------------------------------------------------
    |
    | Quyidagi til satrlari validator klassi tomonidan ishlatiladigan xato xabarlarini o\'z ichiga oladi.
    | Ba'zi qoidalar bir nechta versiyalarga ega, masalan, o\'lcham qoidalari. Har bir xabarni shu yerda o\'zgartirishingiz mumkin.
    |
    */

    'accepted'             => ':attribute qabul qilinishi kerak.',
    'active_url'           => ':attribute yaroqli URL emas.',
    'after'                => ':attribute sanasi :date sanasidan keyin bo\'lishi kerak.',
    'after_or_equal'       => ':attribute sanasi :date sanasidan keyin yoki unga teng bo\'lishi kerak.',
    'alpha'                => ':attribute faqat harflardan iborat bo\'lishi mumkin.',
    'alpha_dash'           => ':attribute faqat harflar, raqamlar va chiziqlarni o\'z ichiga olishi mumkin.',
    'alpha_num'            => ':attribute faqat harflar va raqamlardan iborat bo\'lishi mumkin.',
    'array'                => ':attribute massiv bo\'lishi kerak.',
    'before'               => ':attribute sanasi :date sanasidan oldin bo\'lishi kerak.',
    'before_or_equal'      => ':attribute sanasi :date sanasidan oldin yoki unga teng bo\'lishi kerak.',
    'between'              => [
        'numeric' => ':attribute :min va :max orasida bo\'lishi kerak.',
        'file'    => ':attribute :min va :max kilobayt orasida bo\'lishi kerak.',
        'string'  => ':attribute :min va :max belgi orasida bo\'lishi kerak.',
        'array'   => ':attribute :min va :max element orasida bo\'lishi kerak.',
    ],
    'boolean'              => ':attribute maydoni true yoki false bo\'lishi kerak.',
    'confirmed'            => ':attribute tasdiqlash mos kelmaydi.',
    'date'                 => ':attribute yaroqli sana emas.',
    'date_format'          => ':attribute :format formatiga mos kelmaydi.',
    'different'            => ':attribute va :other farqli bo\'lishi kerak.',
    'digits'               => ':attribute :digits raqamdan iborat bo\'lishi kerak.',
    'digits_between'       => ':attribute :min va :max raqam oralig\'ida bo\'lishi kerak.',
    'dimensions'           => ':attribute tasvir o\'lchamlari yaroqsiz.',
    'distinct'             => ':attribute maydonida takroriy qiymat mavjud.',
    'email'                => ':attribute yaroqli elektron pochta manzili bo\'lishi kerak.',
    'exists'               => 'Tanlangan :attribute yaroqsiz.',
    'file'                 => ':attribute fayl bo\'lishi kerak.',
    'filled'               => ':attribute maydoni qiymatga ega bo\'lishi kerak.',
    'image'                => ':attribute tasvir bo\'lishi kerak.',
    'in'                   => 'Tanlangan :attribute yaroqsiz.',
    'in_array'             => ':attribute maydoni :other da mavjud emas.',
    'integer'              => ':attribute butun son bo\'lishi kerak.',
    'ip'                   => ':attribute yaroqli IP manzil bo\'lishi kerak.',
    'ipv4'                 => ':attribute yaroqli IPv4 manzil bo\'lishi kerak.',
    'ipv6'                 => ':attribute yaroqli IPv6 manzil bo\'lishi kerak.',
    'json'                 => ':attribute yaroqli JSON satri bo\'lishi kerak.',
    'max'                  => [
        'numeric' => ':attribute :max dan katta bo\'lmasligi kerak.',
        'file'    => ':attribute :max kilobaytdan katta bo\'lmasligi kerak.',
        'string'  => ':attribute :max belgidan katta bo\'lmasligi kerak.',
        'array'   => ':attribute :max elementdan ko\'p bo\'lmasligi kerak.',
    ],
    'mimes'                => ':attribute :values turidagi fayl bo\'lishi kerak.',
    'mimetypes'            => ':attribute :values turidagi fayl bo\'lishi kerak.',
    'min'                  => [
        'numeric' => ':attribute kamida :min bo\'lishi kerak.',
        'file'    => ':attribute kamida :min kilobayt bo\'lishi kerak.',
        'string'  => ':attribute kamida :min belgi bo\'lishi kerak.',
        'array'   => ':attribute kamida :min elementga ega bo\'lishi kerak.',
    ],
    'not_in'               => 'Tanlangan :attribute yaroqsiz.',
    'numeric'              => ':attribute raqam bo\'lishi kerak.',
    'present'              => ':attribute maydoni mavjud bo\'lishi kerak.',
    'regex'                => ':attribute formati noto\'g\'ri.',
    'required'             => ':attribute maydoni talab qilinadi.',
    'required_if'          => ':attribute maydoni :other :value bo\'lganda talab qilinadi.',
    'required_unless'      => ':attribute maydoni :other :values bo\'lmaganda talab qilinadi.',
    'required_with'        => ':attribute maydoni :values mavjud bo\'lganda talab qilinadi.',
    'required_with_all'    => ':attribute maydoni :values mavjud bo\'lganda talab qilinadi.',
    'required_without'     => ':attribute maydoni :values mavjud bo\'lmaganida talab qilinadi.',
    'required_without_all' => ':attribute maydoni :values dan hech biri mavjud bo\'lmaganida talab qilinadi.',
    'same'                 => ':attribute va :other mos bo\'lishi kerak.',
    'size'                 => [
        'numeric' => ':attribute :size bo\'lishi kerak.',
        'file'    => ':attribute :size kilobayt bo\'lishi kerak.',
        'string'  => ':attribute :size belgi bo\'lishi kerak.',
        'array'   => ':attribute :size elementdan iborat bo\'lishi kerak.',
    ],
    'string'               => ':attribute matn bo\'lishi kerak.',
    'timezone'             => ':attribute yaroqli zona bo\'lishi kerak.',
    'unique'               => ':attribute allaqachon olingan.',
    'uploaded'             => ':attribute yuklashda xato yuz berdi.',
    'url'                  => ':attribute formati noto\'g\'ri.',

    /*
    |--------------------------------------------------------------------------
    | Maxsus Tekshiruv Xatolari Til Satrlari
    |--------------------------------------------------------------------------
    |
    | Bu yerda siz atributlar uchun maxsus tekshiruv xatolarini belgilashingiz mumkin.
    | Bu aniq bir maxsus til satrini belgilashda tez yordam beradi.
    |
    */

    'user' => [
        'replacement_user_id' => [
            'required' => 'Iltimos, bitta foydalanuvchini tanlang.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Maxsus Tekshiruv Atributlari
    |--------------------------------------------------------------------------
    |
    | Quyidagi til satrlari atribut joylarini o\'zgartirish uchun ishlatiladi,
    | masalan, E-Mail manzili o\'rniga "email" o\'rniga, bu xabarlarni yanada toza qilishga yordam beradi.
    |
    */

    'attributes' => [],

];