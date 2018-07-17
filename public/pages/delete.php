<?php

require_once ('../../private/initialize.php');

if(!isset($_GET['id'])) {
    redirect_to(url_for('/pages/new.php'));
}

$id = $_GET['id'];


if(is_post_request()) {
    delete_visitor($id);
    redirect_to(url_for('/pages/index.php'));
}else{
    $visitor = find_visitor_by_id($id);
}
?>

<?php $page_title = 'Delete Visitor'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

    <h2><?php echo $page_title ?></h2>
    <p>Are you sure you want to delete this visitor?</p>
    <p><?php echo htmlspecialchars($visitor['name'])?></p>

    <form action="<?php echo url_for('/pages/delete.php?id=' . htmlspecialchars(urlencode($id))); ?>" method="post">

        <input type="submit" class="btn btn-primary" value="Delete">
        <a class="btn btn-primary" href="<?php echo url_for('/pages/index.php'); ?>">Cancel</a>


    </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>

