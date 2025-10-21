<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Guestbook;

class GuestbookController extends Controller
{
    public function actionIndex()
    {
        $model = new Guestbook();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();

            return $this->refresh();
        }

        $entries = Guestbook::find()->orderBy(['created_at' => SORT_DESC])->all();

        return $this->render('index', [
            'model' => $model,
            'entries' => $entries,
        ]);
    }
}
