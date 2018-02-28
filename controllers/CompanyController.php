<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use app\models\Company;
use app\models\SearchForm;
use Yii;
use yii\helpers\Html;
use yii\data\Pagination;

/**
 * Description of CompanyController
 *
 * @author Dias
 */
class CompanyController extends AppController{
    
    

    /**
     * @inheritdoc
     */
    

    public function actionIndex(){
        $query = Company::find();
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $query->count(),
            'pageSizeParam' => false,
            'forcePageParam' => false,
        ]);
        $companies = $query->orderBy('CompanyName')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', [
            'companies' => $companies,
            'pagination' => $pagination,
        ]); 

    }
    public function actionView(){
        
        $CompanyID = \Yii::$app->request->get('CompanyID');
        $company = Company::findOne($CompanyID);
        if(empty($company)) throw new \yii\web\HttpException(404, 'Not Found');
        return $this->render('view', compact('company'));
    }   
    public function beforeAction($action) {
        $model = new SearchForm();
        if ($model -> load(Yii::$app->request->post()) && $model->validate()){
            $q = Html::encode($model->q);
            return $this->redirect(Yii::$app->urlManager->createUrl(["company/search", 'q' => $q]));
        }
        return true;
    }
    public function actionSearch(){
        $q = Yii::$app->getRequest()->getQueryParam('q');
        $query = Company::find()->where(['hide'=>0])->where(['like', 'concat(CompanyName,\' \', BIN)', $q]);
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $query->count(),
            'pageSizeParam' => false,
            'forcePageParam' => false,
        ]);
        $companies = $query->orderBy('CompanyName')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('search', [
            'companies' => $companies,
            'q' => $q,
            'pagination' => $pagination
        ]); 
    
    }
}
