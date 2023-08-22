# (MODX)EvolutionCMS.snippets.ddTypograph

Snippet for text typography.
The snippet doesn’t use third-party services, also it sends no requests. In other words, everything is performed on your server.


## Requires

* PHP >= 5.6
* [(MODX)EvolutionCMS.libraries.ddTools](https://code.divandesign.biz/modx/ddtools) >= 0.48.1
* [PHP.libraries.EMT](http://mdash.ru) 3.5 (contains in archive)


## Installation


### 1. Elements → Snippets: Create a new snippet with the following data

1. Snippet name: `ddTypograph`.
2. Description: `<b>2.5</b> Snippet for text typography. The snippet doesn’t use third-party services, also it sends no requests. In other words, everything is performed on your server.`.
3. Category: `Core`.
4. Parse DocBlock: `no`.
5. Snippet code (php): Insert content of the `ddTypograph_snippet.php` file from the archive.


### 2. Elements → Manage Files

1. Create a new folder `assets/snippets/ddTypograph/`.
2. Extract the archive to the folder (except `ddTypograph_snippet.php`).


## Parameters description

* `text`
	* Desctription: Text to correct.
	* Valid values: `string`
	* **Required**
	
* `optAlign`
	* Desctription: Optical alignment (hanging punctuation).
	* Valid values:
		* `0`
		* `1`
	* Default value: `0`
	
* `optAlign_useClasses`
	* Desctription: Use CSS classes instead of inline styles for optical alignment (`<span class="oa_comma_b">` instead of `<span style="margin-right:-0.2em;">`).  
		If the parameter is enabled, don't forget to specify the following CSS rules on your site:
		```css
		.oa_obracket_sp_s {margin-right:0.3em;}
		.oa_obracket_sp_b {margin-left:-0.3em;}
		.oa_obracket_nl_b {margin-left:-0.3em;}
		.oa_comma_b {margin-right:-0.2em;}
		.oa_comma_e {margin-left:0.2em;}
		.oa_oquote_nl {margin-left:-0.44em;}
		.oa_oqoute_sp_s {margin-right:0.44em;}
		.oa_oqoute_sp_q {margin-left:-0.44em;}
		```
	* Valid values:
		* `0`
		* `1`
	* Default value: `0`
	
* `text_paragraphs`
	* Desctription: Section signs and line breaks insertion.
	* Valid values:
		* `0`
		* `1`
	* Default value: `0`
	
* `text_autoLinks`
	* Desctription: Marking links (including email ones).
	* Valid values:
		* `0`
		* `1`
	* Default value: `0`
	
* `etc_unicodeConvert`
	* Desctription: Convert HTML entities into Unicode (`—` instead of `&mdash;`, etc).
	* Valid values:
		* `0`
		* `1`
	* Default value: `1`
	
* `noTags`
	* Desctription: Whether HTML element insertion is allowed or not.  
		There are cases when using tags causes the text to be invalid, for example, using the snippet inside of an HTML attribute.
	* Valid values:
		* `0`
		* `1`
	* Default value: `0`
	
* `excludeTags`
	* Desctription: HTML tags which content will be ignored by snippet.
	* Valid values: `stringCommaSeparated`
	* Default value: `'notg,code'`


## Examples


### Typography the content

```
[[ddTypograph? &text=`[*content*]`]]
```


### Typography text with auto paragraphs, links & emails

```
[[ddTypograph?
	&text=`Some text for typography.`
	&text_paragraphs=`1`
	&text_autoLinks=`1`
]]
```


### Typography text with auto optical margin alignment (hanging quotes & etc)

```
[[ddTypograph?
	&text=`Some text for "typography".`
	&optAlign=`1`
]]
```


### Turn off typography for a text fragment (the `<notg></notg>` tag)

```html
[[ddTypograph?
	&text=`Some text. <notg>The snippet will not change this text inside the tag.</notg> It's easy.`
]]
```


### Run the snippet through `\DDTools\Snippet::runSnippet` without DB and eval

```php
\DDTools\Snippet::runSnippet([
	'name' => 'ddTypograph',
	'params' => [
		'text' => "
			There's nothing you can do that can't be done
			Nothing you can sing that can't be sung
			
			https://en.wikipedia.org/wiki/The_Beatles
		",
		'text_paragraphs' => true,
		'text_autoLinks' => true
	]
]);
```

Returns:

```
<p>There’s nothing you can do&nbsp;that can’t be&nbsp;done<br>
Nothing you can sing that can’t be&nbsp;sung</p>
<p><a href="https://en.wikipedia.org/wiki/The_Beatles">en.wikipedia.org/wiki/The_Beatles</a></p>
```


## Links

* [Home page](https://code.divandesign.biz/modx/ddtypograph)
* [Telegram chat](https://t.me/dd_code)
* [Packagist](https://packagist.org/packages/dd/evolutioncms-snippets-ddtypograph)
* [GitHub](https://github.com/DivanDesign/EvolutionCMS.snippets.ddTypograph)


<link rel="stylesheet" type="text/css" href="https://raw.githack.com/DivanDesign/CSS.ddMarkdown/master/style.min.css" />