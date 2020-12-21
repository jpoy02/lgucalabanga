<?php
$currentPage = 'News';
include ($_SERVER['DOCUMENT_ROOT']."/includes/dbh-inc.php");
include ($_SERVER['DOCUMENT_ROOT']."/includes/components/header.php");

$currentID = isset($_GET['annid']) ? $_GET['annid'] : 1;
$annOtherSql = $conn->query("SELECT * FROM announcement WHERE id != {$currentID} ");
$annOtherResult = $annOtherSql->fetch_all(MYSQLI_ASSOC);

$annSql = $conn->query("SELECT * FROM announcement WHERE id = {$currentID} ");
$annResult = $annSql->fetch_all(MYSQLI_ASSOC);

$limit = 6;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$annAllSql = $conn->query("SELECT * FROM announcement LIMIT $start, $limit");
$annAllResult = $annAllSql->fetch_all(MYSQLI_ASSOC);

?>

<div class="cover">
    <img src="/img/calabanga-night-cover.png" alt="">
    <div class="cover-banner">
        <h1>ANNOUNCEMENTS</h1>
        <span></span>
    </div>
</div>

<div class="container announcement">
    <div class="main">
        <div class="row">
            <div class="col-md-8">


                <?php if (isset($_GET['annid'])) : ?> 

                    <!-- Individual Announcemet -->
                    <?php foreach ($annResult as $rows) : ?>
                        <?php $posted_on = new DateTime($rows['date']); ?>
                        
                        <div class="announcement-title">
                            <h1><?= $rows['title'] ?>
                            </h1>
                            <span class="announcement-date">Posted <?php echo $date = date_format($posted_on, "F j, Y"); ?></span>
                        </div>
                        <div class="announcement-text">
                            <?= $rows['content'] ?>
                        </div>
                    <?php endforeach ?>
                    <!-- End -->


                <?php elseif (isset($_GET['page']) or empty($_GET)) : ?>

                    <!-- All ANnouncement -->
                    <?php foreach ($annAllResult as $rows) : ?>
                        <?php $posted_on = new DateTime($rows['date']); ?>
                        <?php $date = date_format($posted_on, "F Y"); ?>

                        <div class="announcement-item">
                            <img src="<?= $rows['thumbnail'] ?>" alt="">
                            <div class="announcement-item-desc">
                                <div class="announcement-item-desc-title">
                                    <a href="/announcement.php?annid=<?= $rows['id'] ?>">
                                        <h1><?= $rows['title'] ?></h1>
                                    </a>
                                </div>
                                <div class="announcement-item-desc-date">Posted on <?= $date ?></div>
                            </div>

                        </div>
                        <div class="line"></div>
                    <?php endforeach ?>
                    <!-- End  -->
                <?php endif ?>


            </div>

            <div class="col-md-4 announcement-other">
                <div class="title">
                    OTHER ANNOUNCEMENTS
                </div>

                <form action="#" class="form-group search-form mb-5">
                    <h5 class="mb-4">Search Article</h5>
                    <!-- <label class="mb-3" for="searchNews">Search Article</label> -->
                    <input type="search" class="form-control mb-2" placeholder="search here..." id="searchNews">
                    <button class="btn primary-btn">Submit</button>
                </form>

                <?php foreach ($annOtherResult as $rows) : ?>
                    <?php $posted_on = new DateTime($rows['date']); ?>

                    <div class="item-announcement-other">
                        <img src="<?= $rows['thumbnail'] ?> " alt="">

                        <div class="item-announcement-desc">

                            <div class="item-title">
                                <a href="/announcement.php?annid=<?= $rows['id'] ?>"><?= $rows['title'] ?></a>
                            </div>
                            <div class="item-date"><?php echo $date = date_format($posted_on, "F Y"); ?></div>
                        </div>

                    </div>

                <?php endforeach ?>


                <a href=/announcement.php">View All</a>
            </div>
        </div>
    </div>
</div>

<?php
include ($_SERVER['DOCUMENT_ROOT']."/includes/components/footer.php");
?>