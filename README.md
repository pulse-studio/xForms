
Обсуждение тут - http://forum.imagecms.net/viewtopic.php?id=4988

### Конструктор форм - xforms для ImageCMS

## Обратите внимание!
Файлы модуля должны находиться в папке /application/modules/xforms

Модуль корректно работает с версиями 4.9 и 4.10


#### UPD: 11/06/16
* Теперь работают типы поля checkbox и исправил ошибки в radio
* Модуль будет по умолчанию отправлять письсма через SMTP если он у вас настроен.

#### UPD: 11/05/16
* При создании поля, его позиция по умолчанию = ID поля, если она не указана. (поле помещается в конец списка)


### Что сделано?

* Отправка почты на несколько email адресов.
* Все формы на AJAX. отправляются без перезагрузки страницы.
* Теперь поля можно включать и выключать.
* Переписан дизайн админ панели для формы, теперь нет глюков.
* Добавлена функция запрета прямого доступа к форме через УРЛ. (не путать с запретом доступа к модулю через УРЛ)
* Форму мы можем встроить как виджет, но перейдя по ссылке формы, будет 404 ошибка.
* Добавнена функция "защитный код (каптча)". Если в форме есть ошибки, капча автоматически обноавляется.
* Уведомление об ошибках "на лету", т.е. если вы ввели что то неправильно в поле, вылазит уведомление об ошибке (после нажатия на кнопку отправить)
* Есть такой мифический тип поля, при создании - "разделитель". Нужен например для визуального отделения мелких групп полей. Не стал заморачиваться с fieldset и legend. Возможно в будущем поля будут иметь доп. свойство - группировка.

###Что не работает?
* Пока не работает форма по УРЛ. (Мне не нравится урл - sitename/xforms/УРЛ формы или её ID. Возможно в будущем сделаю.
* Нет дефолтных стилей формы, позже будут дописываться.


###Что в планах? (в порядке убывания приоритетов)
* Добавить дефолтные стили.
* Добавить шаблон для отображения формы через УРЛ.
* Добавить загрузку файлов с последущим прикреплением ссылок или файлов к письму.
* Сохранение сообщенией в админ панель, и там же отмечать (просмотрено, не просмотрено)
* JS валидация в соответствии с выставленными условиями проверки (valid_email|max_length[255]|min_length[1]|numeric итд)
* Добавление новых типов полей (Телефон, email итд. input'ов из HTML5)
* Добавление поля Time, data и time data. (На основе Js - datetimepicker)