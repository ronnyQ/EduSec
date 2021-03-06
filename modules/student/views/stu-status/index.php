<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\student\models\StuStatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('stu', 'Student Statuses');
$this->params['breadcrumbs'][] = ['label' => Yii::t('stu', 'Student'), 'url' => ['default/index']];
?>

<?php if($model->isNewRecord) 
	echo $this->render('create', ['model' => $model]); 
   else
	echo $this->render('update', ['model' => $model]); 	
?>


<div class="col-xs-12">
  <div class="col-lg-8 col-sm-8 col-xs-12 no-padding edusecArLangCss"><h3 class="box-title"><i class="fa fa-th-list"></i> <?= $this->title ?></h3></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4 left-padding edusecArLangHide">
	</div>
	<div class="col-xs-4 left-padding">
	<?= Html::a(Yii::t('stu', 'PDF'), ['/export-data/export-to-pdf', 'model'=>get_class($searchModel)], ['class' => 'btn btn-block btn-warning', 'target'=>'_blank']) ?>
	</div>
	<div class="col-xs-4 left-padding">
	<?= Html::a(Yii::t('stu', 'EXCEL'), ['/export-data/export-excel', 'model'=>get_class($searchModel)], ['class' => 'btn btn-block btn-primary', 'target'=>'_blank']) ?>
	</div>
  </div>
</div>

<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
	<div class="stu-status-index">
	    <?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'summary' => '',
		'columns' => [
		    ['class' => 'yii\grid\SerialColumn'],

		    'stu_status_name',
		    'stu_status_description',

		    ['class' => 'app\components\CustomActionColumn'],
		],
	    ]); ?>
        </div>
     </div>
   </div>
</div>
