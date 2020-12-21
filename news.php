<?php
$currentPage = 'News';
include ($_SERVER['DOCUMENT_ROOT']."/includes/dbh-inc.php");
include ($_SERVER['DOCUMENT_ROOT']."/includes/components/header.php");

// ALL NEWS
$limit = 3;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$sql_news_all = $conn->query("SELECT `id`, `title`, `date`, `thumbnail`, `summary` FROM news LIMIT $start , $limit");
$news_all = $sql_news_all->fetch_all(MYSQLI_ASSOC);

// INDIVIIDUAL NEWS
$news_id = isset($_GET['newsid']) ? $_GET['newsid'] : 1;
$sql_news_id = $conn->query("SELECT `id`, `title`, `date`, `content` FROM news WHERE id='$news_id'");
$news_article = $sql_news_id->fetch_all(MYSQLI_ASSOC);

// OTHER NEWS
$sql_news_other = $conn->query("SELECT `id`, `thumbnail`, `title`, `date` FROM news WHERE id !='{$news_id}' LIMIT 5");
$news_others = $sql_news_other->fetch_all(MYSQLI_ASSOC);

?>


<div class="cover">
    <img src="/img/calabanga-night-cover.png" alt="">
    <div class="cover-banner">
        <h1>NEWS AND EVENTS</h1>
        <span></span>
    </div>
</div>


<div class="container">
    <div class="main">
        <div class="row">


        
                <!-- INDIVIDUAL NEWS -->
            <?php if (isset($_GET['newsid'])) : ?>

                <div class="col-md-8 news">

                    <?php foreach ($news_article as $rows) : ?>
                        <?php $posted_on = new DateTime($rows['date']); ?>

                        <div class="news-title">
                            <h1><?= $rows['title'] ?></h1>
                            <span class="news-date">Posted on <?php echo $date = date_format($posted_on, "F Y"); ?></span>
                        </div>
                        <div class="news-text"><?= $rows['content'] ?></div>
                    <?php endforeach ?>
                    
                </div>

                <div class="col-md-4 news-other">
                    
                    <div class="title">
                        OTHER NEWS
                        <div class="line"></div>
                    </div>


                    <?php foreach ($news_others as $rows) : ?>
                        <?php $posted_on = new DateTime($rows['date']); ?>
                        <div class="item-news-other">
                            <img src="<?= $rows['thumbnail'] ?>" alt="<?= $rows['title'] ?>">
                            <div class="item-news-desc">
                                <div class="item-title">
                                    <a href=/news.php?newsid=<?= $rows['id'] ?>">
                                        <?= $rows['title'] ?>
                                    </a></div>
                                <div class="item-date"><?php echo $date = date_format($posted_on, "F Y"); ?></div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>

                <!-- VIEW ALL NEWS -->
            <?php elseif (isset($_GET['page']) || empty($_GET)) : ?>

                <div class="col-md-8 news">

                    <?php foreach ($news_all as $rows) : ?>
                        <?php $posted_on = new DateTime($rows['date']); ?>

                        <div class="news-item">
                            <div class="news-item-title">
                                <h1><?= $rows['title']; ?></h1>
                            </div>
                            <div class="news-item-date"><?php echo $date = date_format($posted_on, "F Y"); ?></div>
                            <div class="news-item-img">
                                <img src="<?= $rows['thumbnail'] ?>" alt="">
                            </div>
                            <div class="news-item-content">
                                <p> <?= $rows['summary'] ?></p>
                            </div>
                            <span><a href=/news.php?newsid=<?= $rows['id'] ?>">Read More...</a></span>
                            <div class="line"></div>

                        </div>
                    <?php endforeach ?>
                </div>

                <div class="col-md-4">
                    <form action="#" class="form-group search-form" >
                        <h5 class="mb-4">Search Article</h5>
                        <!-- <label class="mb-3" for="searchNews">Search Article</label> -->
                        <input type="search" class="form-control mb-2" placeholder="search here..." id="searchNews">
                        <button class="btn primary-btn">Submit</button>
                    </form>

                    <!-- 
                    <div class="archive">
                        <ul>
                            <li>DECEMBER 2020</li>
                            <li>NOVEMBER 2020</li>
                            <li>FEBRUARY 2020</li>
                            <li>JANUARY 2020</li>
                        </ul>
                    </div> -->

                </div>
            <?php endif ?>

            <!-- COL CLOSING-->

        </div>
    </div>
</div>


<!-- <script src="/js/nav.js"></script> -->

<?php
include ($_SERVER['DOCUMENT_ROOT']."/includes/components/footer.php");
?>