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

    public function actionIndex(){
        $query = Company::find();
        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => $query->count(),
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
    
}
