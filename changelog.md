##### UPD: 04/05/19 - Версия 3.0.9
* (add) Определение города посетителя по IP, через сервис  `ip-api.com`
* (add) Вывод IP и информации о городе в письме.


##### UPD: 04/05/19 - Версия 3.0.8
* (add) тип поля `hidden` (input type="hidden")

##### UPD: 07/08/18 - Версия 3.0.7
* добавлен тип поля "tel" (телефон)
* добавлен тип поля "email"
* небольшие правки в *.tpl вывода формы (обновите в своем проекте, если будите обновляться)

##### UPD: 07/08/18 - Версия 3.0.6
* Форматирование php кода.
* добавлен функционал вывода кастомных ошибок для полей.

##### UPD: 07/08/18 - Версия 3.0.5.1
* (bugfix) Ошибка создания формы из-за наличия отсутствующих полей в БД subject и email.

##### UPD: 09/06/18 - Версия 3.0.4
* Обновлено руководство, добавлена страница со списком доступных фукнций валидации полей - https://github.com/pulse-studio/xforms/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA-%D0%B4%D0%BE%D1%81%D1%82%D1%83%D0%BF%D0%BD%D1%8B%D1%85-%D1%84%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%B9-%D0%B2%D0%B0%D0%BB%D0%B8%D0%B4%D0%B0%D1%86%D0%B8%D0%B8-%D0%BF%D0%BE%D0%BB%D0%B5%D0%B9

##### UPD: 28/04/18 - Версия 3.0.4
* Иправление бага с checkbox, передавались неверные значения

##### UPD: 04/04/18 - Версия 3.0.3
* Доработан перевод админ панели и клиентской части
* Удален лишний код в admin.php
* Исправлена ошибка xss_clean у описания и сообщения успешной отправки, при редактировании формы.

##### UPD: 04/04/18 - Версия 3.0.2
* Удалено лишнее поле subject в БД
* Частичный перевод админ панели
* Добавлена ссылка на редактирования cmsemail в списке форм, в админ панели
* Добавлена обертка для показа формы по прямому УРЛ. Нужно для создания нужных HTML тегов, не нарушая стилистику сайта. Менять `\application\modules\xforms\templates\wrapper.tpl`

##### UPD: 03/04/18 - Версия 3.0.1
* (bugfix) исправлен баг с maxlength у textarea

##### UPD: 22/03/18 - Версия 3.0 
* Частичная интеграция со стандартным модулем cmsemail, для отправки писем.
* (bugfix) При отправке писем с вложением на несколько адресов администратора, дублировались вложения. На 2 емайл 2 раза, на 3, 3 итд.

##### UPD: 22/03/18 - Версия 2.9
* Вырезан функционал сохранения сообщений в админ панели (на мой взгляд он лишний)
* Улучшен код по заморозке/разморозке кнопки отправки формы при загрузке файлов
* Добавлены новые варианты валидации, Телефон - callback_valid_phone, Дата - callback_valid_date, Время - callback_valid_time.
* (bugfix) в поле "файл". Если на странице было 2 или более форм с файловыми полями, файлы загружались несколько раз
* (bugfix) При удалении формы теперь удаляются шаблоны cmsemail для данной формы

##### UPD: 06/06/17
* Сжаты JS для загрузки файлов. (Для более быстрой загрузки сайта)

##### UPD: 30/03/17 - Версия 2.4.2
* Мелкие правки в tpl
* Созданы функции валидации для полей типа (телефон, дата, время). В дальшейшем будут добавлены новые типы полей.

##### UPD: 21/02/17 - Версия 2.4.0
* Для обновления БД зайдите в админпанель и перейдите по адресу - `/admin/components/cp/xforms/update_2_4/`
* Внесены правки в шаблон отображения формы на клиентской части
* Теперь отправка почты частично работает через модуль "Управление email-уведомлениями". Частично, потому что - https://github.com/imagecms/ImageCMS/issues/103
* Небольшие правки в tpl админ-панели
* Теперь есть возможность выбрать что делать с загруженными файлами. Доступно 3 варианта. 1)Сохранить на сервере. 2)Отправить вложением и удалить с сервера. 3) Отправить вложением и сохранить на сервере. Кому-то будет полезно.
* Теперь сообщения добавляются в админ панель.

##### UPD: 30/01/17
* Исправлена ошибка загрузки скриптов для поля "загрузка файла"

##### UPD: 28/11/16 - Версия 2.3.1
* Загрузка файлов вынесена в отдельный файл xforms_files.js
* FIX: Если в форме нет полей с файлами, то не подгружает скрипты для загрузки файлов.
* Исправления в шаблоне админки.
* Вырезан лишний JS нотификации при отправке письма, добавлен вызов пользовательских функции. Пример тут - http://forum.imagecms.net/viewtopic.php?pid=26212#p26212 (все по разному хотят выводить нотификации и другие действия с формой после её отправки).

##### UPD: 10/11/16
* Ошибки в xforms.js

##### UPD: 04/11/16
* Исправлена ошибка в tpl письма + добавлена функция скачивания файлов

##### UPD: 19/10/16 - Версия 2.3
* Добавил новый тип поля, для формы, - "загрузка файла". Можно загружать файлы через ajax и выбирать какие типы файлов разрешено загружать.
* Теперь можно сделать первое значение `select/checked/radio` выбранным по умолчанию.
* Косметические исправления при редактировании поля в админке.
* checkbox работает как надо

Для обновления модуля с версии 2.0 до 2.3 замените все файлы модуля, а так-же зайдите в админ панель и перейдите по адресу - `/admin/components/cp/xforms/update_2_3/`

##### UPD: 11/06/16
* Теперь работают типы поля checkbox и исправил ошибки в radio
* Модуль будет по умолчанию отправлять письсма через SMTP если он у вас настроен.

##### UPD: 11/05/16
* При создании поля, его позиция по умолчанию = ID поля, если она не указана. (поле помещается в конец списка)