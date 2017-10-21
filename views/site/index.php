<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
			<div class="col-md-4">
				<a href="<?=Url::to(['/patient']) ?>" class="btn btn-primary">Patient</a>
				<a href="<?=Url::to(['/appointment']) ?>" class="btn btn-primary">Appointment</a>
				<a href="<?=Url::to(['/patient-diagnosis']) ?>" class="btn btn-primary">Patient Diagnosis</a>
			</div>
			<div class="col-md-4">
				<a href="<?=Url::to(['/common-diseases']) ?>" class="btn btn-primary">Common Diseases</a>
				<a href="<?=Url::to(['/department']) ?>" class="btn btn-primary">Department</a>
				<a href="<?=Url::to(['/diagnosis']) ?>" class="btn btn-primary">Diagnosis</a>
			</div>
			<div class="col-md-4">
				<a href="<?=Url::to(['/doctors']) ?>" class="btn btn-primary">Doctors</a>
				<a href="<?=Url::to(['/prescription']) ?>" class="btn btn-primary">Prescription</a>
			</div>
        </div>

    </div>
</div>
