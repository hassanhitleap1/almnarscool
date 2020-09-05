<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app', 'Connect_Us');
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="https://kit.fontawesome.com/603e1bf86b.js" crossorigin="anonymous"></script>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1><?=Html::encode($this->title) ?></h1>
				</div>
				<div class="panel-body">
					<div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3><?=Yii::t('app', "Phone") ?></h3>
                                </div>
                                <div class="panel-body ">
                                    <h3><span class="glyphicon glyphicon-phone"><?= $model->phone?></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                <h1><?=Yii::t('app', "Email") ?></h1>
                                </div>
                                <div class="panel-body ">
                                    <h3><span class="glyphicon glyphicon-tags"><?= $model->email?></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h1><?=Yii::t('app', "Address") ?></h1>
                                </div>
                                <div class="panel-body content">
                                    <h3><span class="glyphicon glyphicon-pushpin"><?= $model->address?></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h1><?=Yii::t('app', "SocialMedia") ?></h1>
                                </div>
                                <div class="panel-body content">
                                      
                                    <h3> 
                                        <a href="<?= $model->facebook?>">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-youtube"></i>
                                        <i class="fas fa-envelope-square"></i>
                                        <i class="fas fa-map-marker-alt"></i>
                                        <i class="fas fa-map-pin"></i>
                                        <a href="<?= $model->twitter?>">
                                            <span class="fab tw"></span>
                                        </a>

                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h1><?=Yii::t('app', "Location") ?></h1>
                                </div>
                                <div class="panel-body ">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
