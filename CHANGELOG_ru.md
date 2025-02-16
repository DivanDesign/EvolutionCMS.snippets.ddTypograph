# (MODX)EvolutionCMS.snippets.ddTypograph changelog


## Версия 2.7.1 (2025-02-16)

* \* `×` (знак умножения) больше не заменяется на `x` (буква «экс»).


## Версия 2.7 (2024-07-07)

* \+ Вы можете отключить типографирование какого-то фрагмента текста также с помощью тега `<span class="notg"></span>`.


## Версия 2.6.1 (2023-08-23)

* \* Пустые строки TinyMCE (`<p>&nbsp;</p>`) больше не изменяются.


## Версия 2.6 (2023-08-22)

* \+ Параметры → `optAlign_useClasses`: Новый параметр. Позволяет использовать CSS-классы вместо inline-стилей для оптического выравнивания (`<span class="oa_comma_b">` вместо `<span style="margin-right:-0.2em;">`).
* \+ README:
	* \+ Установка → Используя (MODX)EvolutionCMS.libraries.ddInstaller.
	* \+ Ссылки → GitHub.
* \+ Composer.json:
	* \+ `support`.
	* \+ `autoload`.


## Версия 2.5 (2021-03-29)

* \* Внимание! Требуется PHP >= 5.6.
* \* Внимание! Требуется (MODX)EvolutionCMS.libraries.ddTools >= 0.48.1.
* \+ Запустить сниппет без DB и eval можно через `\DDTools\Snippet::runSnippet` (см. примеры в README).
* \+ `\ddTypograph\Snippet`: Новый класс. Весь код сниппета перенесён туда.
* \+ README → Ссылки.
* \* Composer.json:
	* \+ `homepage`
	* \+ `authors`.
	* \* `require` → `dd/evolutioncms-libraries-ddtools`: Переименовано из `dd/modxevo-library-ddtools`.


## Версия 2.4.2 (2020-05-06)

* \* Внимание! Требуется (MODX)EvolutionCMS.libraries.ddTools >= 0.32.
* \* Совместимость с (MODX)EvolutionCMS.libraries.ddTools >= 0.32.


## Версия 2.4.1 (2020-05-04)

* \+ README.
* \+ README_ru.
* \+ CHANGELOG.
* \+ CHANGELOG_ru.
* \+ Composer.json.
* \* Рефакторинг.


## Версия 2.4 (2017-12-09)

* \* Внимание! Требуется PHP >= 5.4.
* \* Внимание! Требуется (MODX)EvolutionCMS.libraries.ddTools >= 0.21.
* \+ Добавлена возможность указать HTML теги, содержимое которых не надо типографировать (см. параметр `excludeTags`).
* \* Содержимое в тегах <code> по умолчанию больше не типографируется (параметр `excludeTags` по умолчанию равен `notg,code`).
* \* Незначительные изменения: Стиль кода и комментарии.


## Версия 2.3 (2015-08-24)

* \* PHP.libraries.EMT обновлена до 3.5:
	* \+ Поддержка Unicode — это самое лучшее, что случилось с типографом за последнее время!
	* \+ Добавили обработку нового формата телефона, теперь `+X (XXX)XXXXXXX` будет исправлено на `+X XXX XXX-XX-XX`.
	* \+ Между разрядами чисел теперь расставляется тонкий пробел (`10&thinsp;000`).
	* \+ Добавлена расстановка точек в сокращениях «и т. д. и т. п.».
	* \* Исправлена ошибка в преобразовании доменного уровня в верхнем регистре в инициалы (`XXX.RU Лариса Федоровна` → `XXX.R. U. Лариса Федоровна`).
	* \* Исправлена ошибка при обработке вложенных тегов.
	* \* Улучшена работа типографирования ссылки внутри кавычек.
	* \* Улучшена работа расстановки точки в инициалах.
	* \* Сильно улучшено правило обработки кавычек.
	* \* Символы `$`, `€` и `№` с числом (перед и после) теперь объединяет неразрывный пробел. В случае с Unicode специальным символом.
* \* Настройка типографа `Nobr.phone_builder` теперь зависит от параметра `noTags`.
* \* Использование тегов при переносах строк теперь регулируется одной настройкой типографа `Etc.nobr_to_nbsp`.
* \* Прочие малозначительные изменения.


## Версия 2.2 (2014-05-25)

* \* Внимание! Требуется (MODX)EvolutionCMS.libraries.ddTools >= 0.12.
* \* PHP.libraries.EMT обновлена до 3.3:
	* \* Улучшено правило расстановки точки в конце предложения.
	* \* Оптическое выравнивание по умолчанию включено (но не в сниппете) и улучшена обработка открывающейся кавычки.
	* \* Исправлена ошибка в работе сокращений «вольт».
	* \* Типограф больше не путает где ставить закрывающую кавычку, а где знак дюйма.
* \+ Добавлен параметр `noTags`. Позволяет исключить добавление HTML-тегов типографом в текст.
* \- Параметр `Nobr_hyphenNowrap` удалён за ненадобностью. Вместо него используйте параметр «noTags». Но если он вам всё же нужен, сообщите нам, вернём.
* \* Следующие параметры переименованы (старые имена поддерживаются, но не рекомендуются к использованию):
	* `OptAlign` → `optAlign`.
	* `Text_paragraphs` → `text_paragraphs`.
	* `Text_autoLinks` → `text_autoLinks`.
	* `Etc_unicodeConvert` → `etc_unicodeConvert`.


## Версия 2.1 (2014-04-16)

* \+ Добавлен параметр `Nobr_hyphenNowrap`, позволяющий отключить объединение в неразнывные конструкции слов с дефисом.


## Версия 2.0.2b (2014-03-26)

* \* Исправлена ошибка: текст меньше 4 символов теперь возвращается.


## Версия 2.0.1b (2014-02-25)

* \* Исправлен путь к файлу PHP.libraries.EMT (были проблемы с регистром).


## Версия 2.0b (2014-02-21)

* \* Используется PHP.libraries.EMT 3.2.
* \- Следующие параметры удалены:
	* \- `disableTof`.
	* \- `disableBaseParam`.
* \+ Следующие параметры добавлены:
	* \+ `OptAlign`.
	* \+ `Text_paragraphs`.
	* \+ `Text_autoLinks`.
	* \+ `Etc_unicodeConvert`.
* \* Внимание! Текущая версия совместима с предыдущими версиями 1.x в случае, если сниппету передавался только параметр `text`.


## Версия 1.4.3 (2013-05-28)

* \* Небольшое исправление ошибок.


## Версия 1.4.2 (2013-04-05)

* \* Багфикс для PHP 5.3 (files `/assets/snippets/ddtypograph/Jare/Typograph.php` & `/assets/snippets/ddtypograph/Jare/Typograph/Tof.php`).


## Версия 1.4.1 (2013-03-06)

* \+ Добавлена обработка спец. символа `&#34;`.


## Версия 1.4 (2010-10-10)

* \+ Добавлена возможность отключить базовые параметры для тофов.


<link rel="stylesheet" type="text/css" href="https://raw.githack.com/DivanDesign/CSS.ddMarkdown/master/style.min.css" />
<style>ul{list-style:none;}</style>