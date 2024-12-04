Shajara - Oila Daraxti Yaratish Platformasi

Shajara - bu foydalanuvchilarga o'z oilaviy daraxtlarini yaratish va ularga a'zolarni qo'shish imkonini beruvchi Laravel asosidagi web ilova. Ushbu platforma oila tarixini saqlash, ajdodlarni o'rganish va oilaviy aloqalarni mustahkamlash uchun ideal vosita hisoblanadi.
Xususiyatlar

    Oila daraxtini yaratish va ko'rish.
    A'zolar qo'shish: ota, ona, aka-uka, opa-singil, farzand va boshqalar.
    Daraxtda a'zolarni tahrirlash va o'chirish.
    Har bir a'zo uchun batafsil ma'lumot qo'shish (ism, tug'ilgan sana, biografiya, rasm).
    Chiroyli va intuitiv foydalanuvchi interfeysi.
    MySQL ma'lumotlar bazasi bilan ishlash.

Texnologiyalar

    Backend: Laravel PHP Framework
    Frontend: HTML, CSS, JavaScript
    Ma'lumotlar bazasi: MySQL

O'rnatish
(sizda mavjud bo'lmagan dastur va paketlarni o'rnating, platformani ishlatish vaqtida xatolik kelib chiqmasligi uchun)

Agar sizda php(XAMPP) o'rnatilmagan bo'lsa, quyidagi havola orqali yuklab olib, o'rnatishingiz mumkin:

    https://www.apachefriends.org/

Composer o'rnatish kerak bo'lsa:

    https://getcomposer.org/download/

NodeJS kerak bo'lsa:

    https://nodejs.org/en

Kerakli paketlar o'rnatib bo'lingandan keyin, quyidagi qadamlarni bajarib, loyihani o'z tizimingizda ishga tushirishingiz mumkin: Repositoryni klonlash:

    git clone https://github.com/XAYTIMETOV/Family-Tree

Loyihaning papkasiga o'tish:

    cd Family-Tree

Composer o'rnatish:
    
    composer install

env faylni yarating: 

    cp env.example .env

XAMPPni ishga tushiring:

    ![image](https://github.com/user-attachments/assets/a2762929-0f44-4088-8888-6e99a951698b)

MySQL da "family_tree" nomi bilan baza yarating, yoki quyidagi kod orqali yarating

    CREATE DATABASE family_tree;

.env faylni o'zgartiring va ma'lumotlar bazasi ma'lumotlarini kiriting:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=family_tree
    DB_USERNAME=root
    DB_PASSWORD=

Key Generatsiya qiling:

    php artisan key:generate

Ma'lumotlar bazasini migratsiya qilish:
    
    php artisan migrate

Serverni ishga tushirish:

    php artisan serve

Foydalanish:

    Ro'yxatdan o'ting: O'z akkauntingizni yarating.
    Daraxtni yarating: Daraxtga birinchi a'zoni qo'shing.
    Qidiruv va Tahrirlash: Daraxtdagi a'zolarni qidirish, tahrirlash yoki o'chirish.

Muallif

    - Xaytimetov Samandar
    - Portfolio: https://
    - Email: sxaytimetov@gmail.com

Barcha qo'llab-quvvatlov uchun rahmat! 😊
