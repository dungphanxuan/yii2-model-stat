<?php
/**
 * Created by PhpStorm.
 * User: dungpx
 * Date: 8/31/2017
 * Time: 11:53 AM
 */

namespace dungphanxuan\chart\widgets;

use Yii;
use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\db\ActiveRecord;
use yii\helpers\Url;

/**
 * Chart widget for statistic model
 */
class ChartWidget extends Widget
{
    /**
     * @var ActiveRecord
     */
    public $model;

    public function init()
    {
        if ($this->model === null) {
            throw new InvalidConfigException('Chart widget property model is not set.');
        }
    }

    public function run()
    {
        $modelClass = $this->model->formName();
        $modelId = $this->model->primaryKey;

        return $this->render('chart', [

        ]);
    }
}
