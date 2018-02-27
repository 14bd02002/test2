<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use app\models\Company;
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
    
}
