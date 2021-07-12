

<article class="heading-component">
    <div class="heading-component-inner">
        <h5 class="heading-component-title">Popular news
        </h5><a class="button button-xs button-gray-outline" href="#">All news</a>
    </div>
</article>
<div class="row row-30">
    <div class="col-md-6">
        <!-- Post Future-->

        <?php

        $model = new articles();
        $data_set = $model->fetch();

        foreach ($data_set as $data){ ?>

        <article class="post-future"><a class="post-future-figure" href="single_article.php?id=<?php echo $data['id']?>"><img src="images/news-2-1-368x287.jpg" alt="" width="368" height="287"/></a>
            <div class="post-future-main">
                <h4 class="post-future-title"><a href="#"><?php echo $data['title']; ?></a></h4>
                <div class="post-future-meta">
                    <!-- Badge-->
                    <div class="badge badge-secondary"><?php echo $data['author']; ?>
                    </div>
                    <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                        <time datetime="2020"><?php echo $data['date']; ?></time>
                    </div>
                </div>
                <hr/>
                <div class="post-future-text">
                    <p><?php echo $data['content']; ?></p>
                </div>
                <div class="post-future-footer group-flex group-flex-xs"><a class="button button-gray-outline" href="single_article.php">Read more</a>
                    <div class="post-future-share">
                        <div class="inline-toggle-parent">
                            <div class="inline-toggle icon material-icons-share"></div>
                            <div class="inline-toggle-element">
                                <ul class="list-inline">
                                    <li>Share</li>
                                    <li><a class="icon fa-facebook" href="#"></a></li>
                                    <li><a class="icon fa-twitter" href="#"></a></li>
                                    <li><a class="icon fa-google-plus" href="#"></a></li>
                                    <li><a class="icon fa-instagram" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <?php } ?>


