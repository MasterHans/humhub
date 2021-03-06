<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\widgets;

/**
 * @inheritdoc
 */
class GridView extends \yii\grid\GridView
{
    /**
     * @inheritdoc
     */
    public $tableOptions = ['class' => 'table table-hover'];

    /**
     * @inheritdoc
     */
    public function run()
    {
        $loaderJs = '$(document).on("ready pjax:success", function () {
                $(".grid-view-loading").show();
                $(".grid-view-loading").css("display", "block !important");
                $(".grid-view-loading").css("opacity", "1 !important");
        });';

        $this->getView()->registerJs($loaderJs);

        return parent::run();
    }
}
