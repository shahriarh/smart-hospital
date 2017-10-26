<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">
		<div class="jumbotron">
			<h1>Welcome to Smart Hospital!</h1>
			<div class="row">
			<br>
			<br>
				<div class="col-md-6">
					<a class="btn btn-success btn-sm btn-block" href="<?=Url::to(['/user/security/login']) ?>" role="button">Login</a>
					<br>
					<p class="text-muted">If you are a returning patient, please login</p>
				</div>
				<div class="col-md-6">
					<a class="btn btn-primary btn-sm btn-block" href="<?=Url::to(['/user/register']) ?>" role="button">Register</a>
					<br>
					<p class="text-muted">If you are a new patient, please register</p>
				</div>
			</div>
		</div>
    </div>
</div>
