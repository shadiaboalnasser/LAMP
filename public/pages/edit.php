<?php

require_once ('../../private/initialize.php');

if(!isset($_GET['id'])) {
    redirect_to(url_for('/pages/new.php'));
}

$id = $_GET['id'];


if(is_post_request()) {

    // Handle form values sent by new.php

    $visitor= [];
    $visitor['id'] = $id;
    $visitor['name'] = $_POST['name'] ?? '';
    $visitor['phone'] = $_POST['phone'] ?? '';
    $visitor['course'] = $_POST['course'] ?? '';
    $visitor['from_date'] = $_POST['from_date'] ?? '';
    $visitor['to_date'] = $_POST['to_date'] ?? '';

    $result = update_visitor($visitor);
    redirect_to(url_for('/pages/show_profile.php?id=' . $id));


}else{
    $visitor = find_visitor_by_id($id);
}
?>

<?php $page_title = 'Edit Visitor'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

    <h2><?php echo $page_title ?></h2>

    <form action="<?php echo url_for('/pages/edit.php?id=' . htmlspecialchars(urlencode($id))); ?>" method="post">
        <div class="form-group row">
            <label for="name" class="col-2 col-form-label">Full name</label>
            <div class="col-5">
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    value="<?php echo htmlspecialchars($visitor['name'])?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-2 col-form-label">Mobile number</label>
            <div class="col-5">
                <input
                    type="tel"
                    class="form-control"
                    id="phone"
                    name="phone"
                    value="<?php echo htmlspecialchars($visitor['phone'])?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="course" class="col-2 col-form-label">Course</label>
            <div class="col-5">
                <input type="text"
                       class="form-control"
                       id="course"
                       name="course"
                       value="<?php echo htmlspecialchars($visitor['course'])?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="from_date" class="col-2 col-form-label">From Date</label>
            <div class="col-5">
                <input class="form-control"
                       type="date"
                       value="<?php echo htmlspecialchars($visitor['from_date'])?>"
                       id="from_date"
                       name="from_date">
            </div>
        </div>
        <div class="form-group row">
            <label for="to_date" class="col-2 col-form-label">To Date</label>
            <div class="col-5">
                <input class="form-control"
                       type="date"
                       value="<?php echo htmlspecialchars($visitor['to_date'])?>"
                       id="to_date"
                       name="to_date">
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Edit">
        <a class="btn btn-primary" href="<?php echo url_for('/pages/index.php'); ?>">Cancel</a>


    </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>

