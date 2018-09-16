<?php

/**
 * @package   Yii2-Generator
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

echo "<?php\n";
?>

/**
* @package   <?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>
* @author    José Peña <joepa37@gmail.com>
* @link https://plus.google.com/+joepa37/
* @copyright Copyright (c) 2018 José Peña
* @license http://www.apache.org/licenses/LICENSE-2.0
* @version   1.0.0
*/

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = <?= $generator->generateString('Create ' . Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-create">
    <h3 class="lte-hide-title"><?= "<?= " ?> Html::encode($this->title) ?></h3>
    <?= "<?= " ?> $this->render('_form', compact('model')) ?>
</div>