<div class="card shadow mb-3">
    <div class="card-body">
        <h4 class="mb-3"> incident Report </h4>
        <p class="normal-text"><b> title: </b> <br> <?= $model->title?></p>
        <p class="normal-text"><b> Location: </b> <br> <?= $model->county0->countyName ?></p>
        <p class="normal-text"><b> Description: </b> <br> <?= $model->description ?></p>
        <!-- <p class="normal-text"><b> Description: </b> <br> ?= $model->joinWith->getReport->reportId ?></p> -->
        <p class="normal-text"><b> Date: </b> <br> <?= $model->createdAt ?></p>
    </div>
</div>