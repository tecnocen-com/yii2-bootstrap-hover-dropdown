# Yii2 bootstrap-hover-dropdown
***
[![Latest Stable Version](https://poser.pugx.org/tecnocen/yii2-bootstrap-hover-dropdown/v/stable)](https://packagist.org/packages/tecnocen/yii2-bootstrap-hover-dropdown)
[![Total Downloads](https://poser.pugx.org/tecnocen/yii2-bootstrap-hover-dropdown/downloads)](https://packagist.org/packages/tecnocen/yii2-bootstrap-hover-dropdown)
[![Latest Unstable Version](https://poser.pugx.org/tecnocen/yii2-bootstrap-hover-dropdown/v/unstable)](https://packagist.org/packages/tecnocen/yii2-bootstrap-hover-dropdown)
[![License](https://poser.pugx.org/tecnocen/yii2-bootstrap-hover-dropdown/license)](https://packagist.org/packages/tecnocen/yii2-bootstrap-hover-dropdown)

***

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
use tecnocen\hoverdropdown\HoverDropdownAssetBundle;
// ...
HoverDropdownAssetBundle::register($this);
```

or add to your ```assets/AppAsset.php```

```php
public $depends = [
    // ...
    '\tecnocen\hoverdropdown\HoverDropdownAssetBundle',
];
```
