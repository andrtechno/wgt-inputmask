<?php

namespace panix\ext\inputmask;

use Yii;
use panix\engine\Html;
use yii\base\InvalidArgumentException;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 *
 * https://github.com/RobinHerbots/Inputmask/releases
 */
class InputMask extends InputWidget
{

    public $pluginOptions = [];
    public $extensions = ['numeric', 'date'];
    private $default_extensions = ['numeric', 'date'];

    function run()
    {
        $view = $this->getView();
        $bundle = InputMaskAsset::register($view);

        if (!isset($this->pluginOptions['mask']))
            $this->pluginOptions['mask'] = '+3 (999) 999-99-99';




        if (is_array($this->extensions)) {
            if ($this->extensions)
                $view->registerJsFile($bundle->baseUrl . '/inputmask.extensions.min.js', [
                    'depends' => 'panix\ext\inputmask\InputMaskAsset'
                ]);

            foreach ($this->extensions as $ext) {
                if (!in_array($ext, $this->default_extensions)) {
                    throw new InvalidArgumentException('error extensions only "numeric" and/or "date"');
                }
                $view->registerJsFile($bundle->baseUrl . "/inputmask.{$ext}.extensions.min.js", [
                    'depends' => 'panix\ext\inputmask\InputMaskAsset'
                ]);
            }
        }
        if ($this->hasModel())
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        else
            echo Html::textInput($this->name, $this->value, $this->options);


        $options = Json::encode($this->pluginOptions);
        $js[] = "$('#{$this->options['id']}').inputmask({$options});";
        $view->registerJs(implode("\n", $js));

    }

}
