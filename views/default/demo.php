<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

?>
    <div class="chart-default-index">
        <h1><?= $this->context->action->uniqueId ?></h1>
        <p>
            This is the view content for action "<?= $this->context->action->id ?>".
            The action belongs to the controller "<?= get_class($this->context) ?>"
            in the "<?= $this->context->module->id ?>" module.
        </p>
        <p>
            You may customize this page by editing the following file:<br>
            <code><?= __FILE__ ?></code>
        </p>
    </div>
<?= \dosamigos\chartjs\ChartJs::widget([
    'type'    => 'line',
    'options' => [
        'height' => 400,
        'width'  => 400
    ],
    'data'    => [
        'labels'   => ["January", "February", "March", "April", "May", "June", "July"],
        'datasets' => [
            [
                'label'                     => "My First dataset",
                'backgroundColor'           => "rgba(179,181,198,0.2)",
                'borderColor'               => "rgba(179,181,198,1)",
                'pointBackgroundColor'      => "rgba(179,181,198,1)",
                'pointBorderColor'          => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor'     => "rgba(179,181,198,1)",
                'data'                      => [65, 59, 90, 81, 56, 55, 40]
            ],
            [
                'label'                     => "My Second dataset",
                'backgroundColor'           => "rgba(255,99,132,0.2)",
                'borderColor'               => "rgba(255,99,132,1)",
                'pointBackgroundColor'      => "rgba(255,99,132,1)",
                'pointBorderColor'          => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor'     => "rgba(255,99,132,1)",
                'data'                      => [28, 48, 40, 19, 96, 27, 100]
            ]
        ]
    ]
]);
