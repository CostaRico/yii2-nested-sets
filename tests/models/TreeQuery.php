<?php
/**
 * @link https://github.com/creocoder/yii2-nested-sets-behavior
 * @copyright Copyright (c) 2015 Alexander Kochetov
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace tests\models;

use creocoder\nestedsets\NestedSetsQueryBehavior;

/**
 * TreeQuery
 */
class TreeQuery extends \yii\db\ActiveQuery
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            NestedSetsQueryBehavior::className(),
        ];
    }
}
