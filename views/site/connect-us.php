<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app', 'Connect_Us');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1><?= Html::encode($this->title) ?></h1>
				</div>
				<div class="panel-body content">
					<div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h1><?= Yii::t('app',"Phone") ?></h1>
                            </div>
                            <div class="panel-body content">
                                
                            </div>
                        </div>

                        <div class="panel panel-default">
                        <div class="panel-heading">
                        <h1><?= Yii::t('app',"Email") ?></h1>
                        </div>
                        <div class="panel-body content">
                            
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1><?= Yii::t('app',"Address") ?></h1>
                        </div>
                        <div class="panel-body content">
                            
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1><?= Yii::t('app',"SocialMedia") ?></h1>
                        </div>
                        <div class="panel-body content">
                            
                        </div>
                    </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div> 