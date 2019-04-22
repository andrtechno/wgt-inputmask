wgt-inputmask
===========
Widget for Yii Framework 2.0 to use [Inputmask](http://robinherbots.github.io/Inputmask)

[![Latest Stable Version](https://poser.pugx.org/panix/wgt-inputmask/v/stable)](https://packagist.org/packages/panix/wgt-inputmask)
[![Total Downloads](https://poser.pugx.org/panix/wgt-inputmask/downloads)](https://packagist.org/packages/panix/wgt-inputmask)
[![Monthly Downloads](https://poser.pugx.org/panix/wgt-inputmask/d/monthly)](https://packagist.org/packages/panix/wgt-inputmask)
[![Daily Downloads](https://poser.pugx.org/panix/wgt-inputmask/d/daily)](https://packagist.org/packages/panix/wgt-inputmask)
[![Latest Unstable Version](https://poser.pugx.org/panix/wgt-inputmask/v/unstable)](https://packagist.org/packages/panix/wgt-inputmask)
[![License](https://poser.pugx.org/panix/wgt-inputmask/license)](https://packagist.org/packages/panix/wgt-inputmask)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist panix/wgt-inputmask "*"
```

or add

```
"panix/wgt-inputmask": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by :

```php
echo InputMask::widget([
    'attribute' => 'attribute_name',
    'model' => $model,
    //...
]);
```

Usage without a model (you must specify the "name" attribute) :

```php
echo $form->field($model, 'attribute_name')->widget(InputMask::class, [
    'extensions' => ['date'],
    'pluginOptions' => [
        'mask' => 'dd/mm/yyyy'
    ]
]);
```
