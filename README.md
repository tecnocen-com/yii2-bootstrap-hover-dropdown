# Yii2 bootstrap-hover-dropdown
AssetBundle for https://cameronspear.com/demos/bootstrap-hover-dropdown/

## Installation

####Composer

```
composer require --prefer-dist "tecnocen/yii2-bootstrap-hover-dropdown:*"
```

or add

```
"tecnocen/yii2-bootstrap-hover-dropdown": "dev-master"
```

to the ```require``` section of your `composer.json` file.

## Usage

in view (for example: ```@app/views/layouts/main.php```)

```php
// ...
use tecnocen\yii2-bootstrap-hover-dropdown\HoverDropdownAssetBundle;
// ...
HoverDropdownAssetBundle::register($this);
```

or add to your ```assets/AppAsset.php```

```php
public $depends = [
    // ...
    '\delocker\animate\HoverDropdownAssetBundle',
];
```
