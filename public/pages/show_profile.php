<?php

require_once ('../../private/initialize.php');


    $id = $_GET['id'] ?? '1';

    $visitor = find_visitor_by_id($id);

    $page_title = "Show visitor";

    include(SHARED_PATH . '/header.php');
?>

<div id="content">

    <div class="visitor show">
        <h1>Visitor : <?php echo htmlspecialchars($visitor['name']);?></h1>

        <div class="attributes">
            <dl>
                <dt>Name</dt>
                <dd><?php echo $visitor['name']?></dd>
            </dl>
            <dl>
                <dt>Mobile</dt>
                <dd><?php echo $visitor['phone']?></dd>
            </dl>
            <dl>
                <dt>Course</dt>
                <dd><?php echo $visitor['course']?></dd>
            </dl>
            <dl>
                <dt>From date</dt>
                <dd><?php echo $visitor['from_date']?></dd>
            </dl>
            <dl>
                <dt>To date</dt>
                <dd><?php echo $visitor['to_date']?></dd>
            </dl>
        </div>
    </div>

    <a class="btn btn-primary" href="<?php echo url_for('/pages/index.php')?>">Back to List</a>

</div>

<?php include(SHARED_PATH. '/footer.php')?>

