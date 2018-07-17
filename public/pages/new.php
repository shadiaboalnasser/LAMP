<?php

require_once('../../private/initialize.php');


?>

<?php $page_title = 'New Visitor'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

    <h2><?php echo $page_title ?></h2>

    <form action="<?php echo url_for('/pages/create.php') ?>" method="post">
        <div class="form-group row">
            <label for="name" class="col-2 col-form-label">Full name</label>
            <div class="col-5">
                <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-2 col-form-label">Mobile number</label>
            <div class="col-5">
                <input
                        type="tel"
                        class="form-control"
                        id="phone"
                        name="phone">
            </div>
        </div>
        <div class="form-group row">
            <label for="course" class="col-2 col-form-label">Course</label>
            <div class="col-5">
                <input type="text"
                       class="form-control"
                       id="course"
                       name="course">
            </div>
        </div>
        <div class="form-group row">
            <label for="from_date" class="col-2 col-form-label">From date (m-d-y)</label>
            <div class="col-5">
                <input class="form-control"
                       type="date"
                       value="<?php echo date("Y-m-d"); ?>"
                       id="from_date"
                       name="from_date">
            </div>
        </div>
        <div class="form-group row">
            <label for="to_date" class="col-2 col-form-label">To date (m-d-y)</label>
            <div class="col-5">
                <input class="form-control"
                       type="date"
                       value="<?php echo date("Y-m-d"); ?>"
                       id="to_date"
                       name="to_date">
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Save">
        <a class="btn btn-primary" href="<?php echo url_for('/pages/index.php'); ?>">Cancel</a>


    </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>

