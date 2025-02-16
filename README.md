# (MODX)EvolutionCMS.snippets.ddTypograph

Snippet for text typography.
The snippet doesn’t use third-party services, also it sends no requests. In other words, everything is performed on your server.

You can turn off typography for a text fragment using the `<notg></notg>` or `<span class="notg"></span>` tags.


## Requires

* PHP >= 5.6
* [(MODX)EvolutionCMS.libraries.ddTools](https://code.divandesign.ru/modx/ddtools) >= 0.48.1
* [PHP.libraries.EMT](http://mdash.ru) 3.5 (contains in archive)


## Installation


### Using [(MODX)EvolutionCMS.libraries.ddInstaller](https://github.com/DivanDesign/EvolutionCMS.libraries.ddInstaller)

Just run the following PHP code in your sources or [Console](https://github.com/vanchelo/MODX-Evolution-Ajax-Console):

```php
// Include (MODX)EvolutionCMS.libraries.ddInstaller
require_once(
	$modx->getConfig('base_path')
	. 'assets/libs/ddInstaller/require.php'
);

// Install (MODX)EvolutionCMS.snippets.ddTypograph
\DDInstaller::install([
	'url' => 'https://github.com/DivanDesign/EvolutionCMS.snippets.ddTypograph',
	'type' => 'snippet',
]);
```

* If `ddTypograph` is not exist on your site, `ddInstaller` will just install it.
* If `ddTypograph` is already exist on your site, `ddInstaller` will check it version and update it if needed.


### Manually


#### 1. Elements → Snippets: Create a new snippet with the following data

1. Snippet name: `ddTypograph`.
2. Description: `<b>2.7.1</b> Snippet for text typography. The snippet doesn’t use third-party services, also it sends no requests. In other words, everything is performed on your server.`.
3. Category: `Core`.
4. Parse DocBlock: `no`.
5. Snippet code (php): Insert content of the `ddTypograph_snippet.php` file from the archive.


#### 2. Elements → Manage Files

1. Create a new folder `assets/snippets/ddTypograph/`.
2. Extract the archive to the folder (except `ddTypograph_snippet.php`).


## Parameters description

* `text`
	* Description: Text to correct.
	* Valid values: `string`
	* **Required**
	
* `optAlign`
	* Description: Optical alignment (hanging punctuation).
	* Valid values:
		* `0`
		* `1`
	* Default value: `0`
	
* `optAlign_useClasses`
	* Description: Use CSS classes instead of inline styles for optical alignment (`<span class="oa_comma_b">` instead of `<span style="margin-right:-0.2em;">`).  
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
	* Description: Section signs and line breaks insertion.
	* Valid values:
		* `0`
		* `1`
	* Default value: `0`
	
* `text_autoLinks`
	* Description: Marking links (including email ones).
	* Valid values:
		* `0`
		* `1`
	* Default value: `0`
	
* `etc_unicodeConvert`
	* Description: Convert HTML entities into Unicode (`—` instead of `&mdash;`, etc).
	* Valid values:
		* `0`
		* `1`
	* Default value: `1`
	
* `noTags`
	* Description: Whether HTML element insertion is allowed or not.  
		There are cases when using tags causes the text to be invalid, for example, using the snippet inside of an HTML attribute.
	* Valid values:
		* `0`
		* `1`
	* Default value: `0`
	
* `excludeTags`
	* Description: HTML tags which content will be ignored by snippet.
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


### Turn off typography for a text fragment (the `<notg></notg>` or `<span class="notg"></span>` tags)

```html
[[ddTypograph?
	&text=`Some text. <notg>The snippet will not change this text inside the tag.</notg> It's easy. <span class="notg">Additionally, `span` with the single `notg` class is also supported.</span>`
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
		'text_autoLinks' => true,
	],
]);
```

Returns:

```
<p>There’s nothing you can do&nbsp;that can’t be&nbsp;done<br>
Nothing you can sing that can’t be&nbsp;sung</p>
<p><a href="https://en.wikipedia.org/wiki/The_Beatles">en.wikipedia.org/wiki/The_Beatles</a></p>
```


## Links

* [Home page](https://code.divandesign.ru/modx/ddtypograph)
* [Telegram chat](https://t.me/dd_code)
* [Packagist](https://packagist.org/packages/dd/evolutioncms-snippets-ddtypograph)
* [GitHub](https://github.com/DivanDesign/EvolutionCMS.snippets.ddTypograph)


<link rel="stylesheet" type="text/css" href="https://raw.githack.com/DivanDesign/CSS.ddMarkdown/master/style.min.css" />