<?php require_once('../../private/initialize.php') ?>

<?php

$sql = "SELECT * FROM visitors ";
$sql .= "ORDER BY name ASC";
$visitors_set = find_all_visitors();

?>

<?php $page_title = 'Visitors Menu' ?>
<?php include(SHARED_PATH . '/header.php') ?>

    <div id="content">


        <div class="subjects listing">
            <h1>Visitors</h1>

            <table class="list">
                <tr>
                    <th>Visitor</th>
                    <th>Mobile number</th>
                    <th>Course</th>
                    <th>From</th>
                    <th>To</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>

                <?php while ($visitor = mysqli_fetch_assoc($visitors_set)) { ?>
                    <tr>
                        <td><?php echo $visitor['name']; ?></td>
                        <td><?php echo $visitor['phone']; ?></td>
                        <td><?php echo $visitor['course']; ?></td>
                        <td><?php echo $visitor['from_date']; ?></td>
                        <td><?php echo $visitor['to_date']; ?></td>
                        <td><a class="action"
                               href="<?php echo url_for('/pages/show_profile.php?id=' . $visitor['id']) ?>">View</a>
                        </td>
                        <td><a class="action"
                               href="<?php echo url_for('/pages/edit.php?id=' . $visitor['id']) ?>">Edit</a></td>
                        <td><a class="action" href="<?php echo url_for('/pages/delete.php?id=' . $visitor['id']) ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
    </div>

<?php mysqli_free_result($visitors_set); ?>
<?php include(SHARED_PATH . '/footer.php') ?>