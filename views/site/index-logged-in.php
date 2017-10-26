<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">
		<div class="row">
			<div class="col-md-6">
				<?php if($patient): ?>
					<a class="btn btn-primary btn-sm btn-block" href="<?=Url::to(['/patient/update/'.$patient->id]) ?>" role="button">Update your information</a>
					</br>
					<div class="panel panel-default">
						<!-- Default panel contents -->
						<div class="panel-heading">
							<h3 class="panel-title">Patient  information</h3>
						</div>
						<div class="panel-body">
							<!-- List group -->
							<ul class="list-group">
								<li class="list-group-item">Name:  <?=$patient->name?> </li>
								<li class="list-group-item">Age:   <?=$patient->age?></li>
								<li class="list-group-item">NID:   <?=$patient->nid?></li>
							</ul>
						</div>
					</div>
					
				<?php else: ?>
					<a class="btn btn-primary btn-sm btn-block" href="<?=Url::to(['/patient/create']) ?>" role="button">Update your information</a>
				<?php endif; ?>
				<br>
			</div>
			<div class="col-md-6">
			<?php if($appointment):?>
				<a class="btn btn-primary btn-sm btn-block" href="<?=Url::to(['/appointment/create']) ?>" role="button">Request for an Appointment</a>
				<br>
			<?php foreach($appointment as $Appointment): ?>
				<div class="panel panel-default">
					<!-- Default panel contents -->
					<div class="panel-heading">
						<h3 class="panel-title">Patient's Appointment Information</h3>
					</div>
					<div class="panel-body">
						<!-- List group -->
						<ul class="list-group">
							<li class="list-group-item"><em class="text-muted">Appointment ID:</em> <span class="pull-right"><?=$Appointment->id ?></span></li>
							<li class="list-group-item"><em class="text-muted">Department Name:</em> <span class="pull-right"><?=$Appointment->department['name']?></span></li>
							<li class="list-group-item"><em class="text-muted">Disease:</em> <span class="pull-right"><?=$Appointment->disease['name']?></span></li>
						</ul>
					</div>
				</div>
			<?php endforeach; ?>
			<?php endif; ?>
			</div>
		</div>
    </div>
</div>