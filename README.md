
Обсуждение и скриншоты тут - http://forum.imagecms.net/viewtopic.php?id=4988

### Конструктор форм - xforms для ImageCMS

## Обратите внимание!
Файлы модуля должны находиться в папке /application/modules/xforms

Модуль корректно работает с **ImageCMS** версий **от 4.9 до 4.12.1**

## Что сделано?
* Отправка почты на несколько email адресов.
* Отправка почты частично работает через модуль "Управление email-уведомлениями"
* Все формы на AJAX и отправляются без перезагрузки страницы.
* Поля формы можно включать/выключать.
* Нормально работающий дизайн админ панели для формы.
* Функция прямого доступа к форме через УРЛ. (не путать с запретом доступа к модулю через УРЛ)
* Функция прикрепления файлов к форме. (нужно создать поле "загрузка файла")
* Форму мы можем встроить как виджет.
* Функция "защитный код (каптча)". Если в форме есть ошибки, капча автоматически обноавляется.
* Уведомление об ошибках "на лету", т.е. если вы ввели что то неверно, будет уведомление об ошибке (после нажатия на кнопку отправить)
* Есть такой мифический тип поля, "разделитель". Нужен например для визуального отделения мелких групп полей. Не стал заморачиваться с fieldset и legend.
* Вырезан лишний JS нотификации при отправке письма, и добавлены пользовательские функции. Подробнее тут - http://forum.imagecms.net/viewtopic.php?pid=26212#p26212 (все по разному хотят выводить нотификации и другие действия с формой после её отправки)

## Баги
* При загрузке файла PSD, всегда пишет - "не верный тип файла", причем пробовал заменить mimes.php из codegniter 3 версии, все равно ругается. Пока не думал как решать.
* Если на странице больше двух форм, и включена каптча в формах, то в первой форме будет не верное изображение каптчи

### Что в планах? (в порядке убывания приоритетов)
* Добавление новых типов полей (Телефон, email итд. input'ов из HTML5)
* JS валидация в соответствии с выставленными условиями проверки `(valid_email|max_length[255]|min_length[1]|numeric итд)` - http://rickharrison.github.io/validate.js/
* Добавить дефолтные стили. (возможно сделать опцию использования дефолтных стилей)
* Добавление поля Time, data и time data. (php валидация уже сделана) (На основе Js - datetimepicker)
* Добавить поддержку reCaptcha
* Мультиязычность

## Обновления:
см. тут https://github.com/pulse-studio/xforms/blob/master/changelog.md