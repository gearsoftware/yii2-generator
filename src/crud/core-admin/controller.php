<?php

/**
 * @package   Yii2-Generator
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$controllerClass = StringHelper::basename($generator->controllerClass);
$baseControllerClass = StringHelper::basename($generator->baseControllerClass);

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

namespace <?= StringHelper::dirname(ltrim($generator->controllerClass, '\\')) ?>;

use Yii;
use <?= $generator->baseControllerClass ?>;

/**
 * <?= $controllerClass ?> implements the CRUD actions for <?= $generator->modelClass ?> model.
 */
class <?= $controllerClass ?> extends <?= $baseControllerClass ?> 
{
    public $modelClass       = '<?= $generator->modelClass ?>';
    public $modelSearchClass = '<?= $generator->searchModelClass ?>';

    protected function getRedirectPage($action, $model = null)
    {
        switch ($action) {
            case 'update':
                return ['update', 'id' => $model->id];
                break;
            case 'create':
                return ['update', 'id' => $model->id];
                break;
            default:
                return parent::getRedirectPage($action, $model);
        }
    }
}