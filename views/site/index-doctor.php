<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Smart Hospital';
?>
<div class="site-index">

    <div class="body-content">
		<div class="row">
			<div class="col-md-6">
				<?php if($doctor): ?>
					<a class="btn btn-primary btn-sm btn-block" href="<?=Url::to(['/doctors/update/'.$doctor->id]) ?>" role="button">Update your information</a>
					</br>
					<div class="panel panel-default">
						<!-- Default panel contents -->
						<div class="panel-heading">
							<h3 class="panel-title">Doctor information</h3>
						</div>
						<div class="panel-body">
							<!-- List group -->
							<ul class="list-group">
								<li class="list-group-item"><em class="text-muted">Name:</em> <span class="pull-right"><?=$doctor->name?> </span></li>
								<li class="list-group-item"><em class="text-muted">Department:</em> <span class="pull-right"><?=$doctor->department['name']?></span></li>
								<li class="list-group-item"><em class="text-muted">Designation:</em> <span class="pull-right"><?=$doctor->designation?></span></li>
								<li class="list-group-item"><em class="text-muted">Qualification:</em> <span class="pull-right"><?=$doctor->qualification?></span></li>
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
				<br>
			<?php foreach($appointment as $Appointment): ?>
				<div class="panel panel-default">
					<!-- Default panel contents -->
					<div class="panel-heading">
						<h3 class="panel-title">Doctor's Appointment Information</h3>
					</div>
					<div class="panel-body">
						<!-- List group -->
						<ul class="list-group">
							<li class="list-group-item"><em class="text-muted">Appointment ID:</em> <span class="pull-right"><?=$Appointment->id ?></span></li>
							<li class="list-group-item"><em class="text-muted">Department Name:</em> <span class="pull-right"><?=$Appointment->department['name']?></span></li>
							<li class="list-group-item"><em class="text-muted">Disease:</em> <span class="pull-right"><?=$Appointment->disease['name']?></span></li>
							<li class="list-group-item"><em class="text-muted">Status:</em> <span class="pull-right"><?=$Appointment->status ?></span></li>
						</ul>
					</div>
					<div class="panel-footer">
					<?php if ($Appointment->status == 'initial'): ?>
						<a class="btn btn-success" href="<?=Url::to(['/prescription/create/'.$Appointment->id]) ?>" >Create Prescription</a>
					<?php else: ?>
						<a class="btn btn-success" href="<?=Url::to(['/prescription/update/'.$Appointment->id]) ?>" >Update Prescription</a>
					<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
			<?php endif; ?>
			</div>
		</div>
    </div>
</div>