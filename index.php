<!-- ************************************************************************************************ -->
<!-- PHP  -->

<?php
$currentPage = 'Home';
include($_SERVER['DOCUMENT_ROOT'] . "/includes/dbh-inc.php");
include($_SERVER['DOCUMENT_ROOT'] . "/includes/components/header.php");

$sql_news = $conn->query("SELECT `id`, `thumbnail`, `title`, `date`, `summary` FROM news LIMIT 3");
$sql_news_result = $sql_news->fetch_all(MYSQLI_ASSOC);

$sql_ann = $conn->query("SELECT `id`, `thumbnail`, `title`, `date` FROM announcement LIMIT 6");
$sql_ann_result = $sql_ann->fetch_all(MYSQLI_ASSOC);

?>

<!-- ************************************************************************************************ -->

<body>

    <section class="hero">
        <img class="hero-bg" src="/img/hero-bg.png" alt="">
        <div class="hero-text">
            <div class="text-1">PROGRESIBONG CALABANGA</div>
            <div class="text-2">PAGTARABANGAN TA.</div>
            <div class="text-3">Mayor Eduardo A. Severo 2013 - 2022</div>
        </div>
    </section>

    <section class="panel mayor-anim">
        <img class="mayor-bg" src="/img/mayor-bg.png" alt="">
        <div class="sec-container mayor">
            <img class="mayor-anim-img" src="/img/mayor-ed.png" alt="">
            <div class="mayor-message">
                <div class="message-1">“ If you help my administration, you are not helping me, but the PEOPLE. “</div>
                <div class="message-2">“ Kapag tinabangan mo ang administrasyon ko, bako ako ang tinatabangan mo, kundi
                    ang mga TAWO. ”</div>
                <div class="message-3">

                    <div class="mayor-title">
                        <div class="text-1">Hon. Eduardo A. Severo</div>
                        <div class="text-2">Municipal Mayor</div>
                    </div>
                    <div class="mom">
                        <span>most outsanding <br>
                            mayor of 2019</span>
                        <img src="/img/most-outstanding-mayor-logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="panel featured-anim">
        <div class="sec-container featured">
            <video src="/video/mayor-ed-severo.mp4" type="video/mp4" controls poster="/video/mayor-ed-severo.jpg" width="100%">
                Your Browser does not support video tag.
            </video>
        </div>
    </section>

    <section class="panel news-anim">
        <div class="sec-container news-updates">

            <h1 class="news-anim-title">NEWS AND UPDATES</h1>
            <div class="line"></div>

            <div class="news-card-container">

                <!-- ********************   PHP  **************************** -->
                <?php foreach ($sql_news_result as $rows) : ?>
                    <?php $posted_on = new DateTime($rows['date']);
                    $date = date_format($posted_on, "F Y"); ?>

                    <div class="news-card">
                        <img src="<?= $rows['thumbnail'] ?>" alt="">
                        <div class="news-desc">
                            <h3><?= $rows['title'] ?></h3>
                            <div class="news-date">Posted <?= $date ?> </div>
                            <div class="news-text"> <?= $rows['summary'] ?>
                            </div>
                        </div>
                        <div class="read-more">
                            <a href="/news.php?newsid=<?= $rows['id'] ?>"><button class="read-more-btn">Read More</button></a>
                        </div>
                    </div>

                <?php endforeach ?>
                <!-- ********************   PHP  **************************** -->


                <!-- <div class="news-card">
                    <img src="/img/placeholder.png" alt="">
                    <div class="news-desc">
                        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, est.</h3>
                        <div class="news-date">Posted November 2020</div>
                        <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quam saepe
                            possimus veniam tempore alias nisi deleniti. Maiores incidunt ab aspernatur saepe molestias
                            asperiores beatae repudiandae porro! Eaque fugiat sequi eveniet numquam inventore, animi
                            consectetur esse amet beatae sit tempore quo omnis voluptates labore. Est saepe a ipsam
                            molestias soluta?
                        </div>
                    </div>
                    <div class="read-more">
                        <a href="#"><button class="read-more-btn">Read More</button></a></div>
                </div>

                <div class="news-card">
                    <img src="/img/placeholder.png" alt="">
                    <div class="news-desc">
                        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, est.</h3>
                        <div class="news-date">Posted November 2020</div>
                        <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quam saepe
                            possimus veniam tempore alias nisi deleniti. Maiores incidunt ab aspernatur saepe molestias
                            asperiores beatae repudiandae porro! Eaque fugiat sequi eveniet numquam inventore, animi
                            consectetur esse amet beatae sit tempore quo omnis voluptates labore. Est saepe a ipsam
                            molestias soluta?
                        </div>
                    </div>
                    <div class="read-more">
                        <a href="#"><button class="read-more-btn">Read More</button></a></div>
                </div>

                <div class="news-card">
                    <img src="/img/placeholder.png" alt="">
                    <div class="news-desc">
                        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, est.</h3>
                        <div class="news-date">Posted November 2020</div>
                        <div class="news-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel quam saepe
                            possimus veniam tempore alias nisi deleniti. Maiores incidunt ab aspernatur saepe molestias
                            asperiores beatae repudiandae porro! Eaque fugiat sequi eveniet numquam inventore, animi
                            consectetur esse amet beatae sit tempore quo omnis voluptates labore. Est saepe a ipsam
                            molestias soluta?
                        </div>
                    </div>
                    <div class="read-more">
                        <a href="#"><button class="read-more-btn">Read More</button></a></div>
                </div> -->

            </div>

        </div>
    </section>


    <section class="panel ann-anim">
        <div class="sec-container announcement-sec">

            <h1 class="ann-anim-title">ANNOUNCEMENTS</h1>
            <div class="line"></div>

            <div class="ann-container row">


            <?php $i=0;
                    foreach ($sql_ann_result as $rows) : ?>
                        <?php $created_at = new DateTime($rows['date']); 
                             $date = date_format($created_at, "F j, Y");
                        ?>

                        <?php if ($i % 2 == 0) : ?>
                            <div class="col-md-4">
                        <?php endif ?>

                        <div class="ann-item">
                            <div class="ann-desc">
                                <div class="ann-title"><a href="/announcement.php?annid=<?= $rows['id'] ?>"> <?= $rows["title"] ?></a>
                                </div>
                                <div class="ann-date"><?= $date ?> </div>
                            </div>
                            <a href="/announcement.php?annid=<?= $rows['id'] ?>"><img src="<?= $rows['thumbnail'] ?>" alt=""></a>
                        </div>

                        <?php if ($i % 2 == 1) : ?>
                            </div>
                       
                        <?php endif ?>
                        
                    <?php $i++ ?> 
                    <?php endforeach ?>



                <!-- <div class="ann-col">

                    <div class="ann-item">
                        <div class="ann-desc">
                            <div class="ann-title">Lorem ipsum dolor sit amet consectetur lorem.</div>
                            <div class="ann-date">Posted November 2020</div>
                        </div>
                        <img src="/img/placeholder.png" alt="">
                    </div>

                    <div class="ann-item">
                        <div class="ann-desc">
                            <div class="ann-title">Lorem ipsum dolor sit amet consectetur lorem.</div>
                            <div class="ann-date">Posted November 2020</div>
                        </div>
                        <img src="/img/placeholder.png" alt="">
                    </div>

                </div> -->

                <!-- <div class="ann-col">

                    <div class="ann-item">
                        <div class="ann-desc">
                            <div class="ann-title">Lorem ipsum dolor sit amet consectetur lorem.</div>
                            <div class="ann-date">Posted November 2020</div>
                        </div>
                        <img src="/img/placeholder.png" alt="">
                    </div>

                    <div class="ann-item">
                        <div class="ann-desc">
                            <div class="ann-title">Lorem ipsum dolor sit amet consectetur lorem.</div>
                            <div class="ann-date">Posted November 2020</div>
                        </div>
                        <img src="/img/placeholder.png" alt="">
                    </div>

                </div>

                <div class="ann-col">

                    <div class="ann-item">
                        <div class="ann-desc">
                            <div class="ann-title">Lorem ipsum dolor sit amet consectetur lorem.</div>
                            <div class="ann-date">Posted November 2020</div>
                        </div>
                        <img src="/img/placeholder.png" alt="">
                    </div>

                    <div class="ann-item">
                        <div class="ann-desc">
                            <div class="ann-title">Lorem ipsum dolor sit amet consectetur lorem.</div>
                            <div class="ann-date">Posted November 2020</div>
                        </div>
                        <img src="/img/placeholder.png" alt="">
                    </div>

                </div> -->

            </div>

        </div>
    </section>


    <script src="/js/index.js"></script>


    <?php
    include($_SERVER['DOCUMENT_ROOT'] . "/includes/components/footer.php");
    ?>