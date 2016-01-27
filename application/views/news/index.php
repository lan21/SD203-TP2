<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div class="main">
        <?php echo $news_item['text'] ?>
    <p><a href="news/<?php echo $news_item['slug'] ?>">View article</a></p>
    <p><a href="news/delete/<?php echo $news_item['id'] ?>">Delete article</a></p>
    </div>

<?php endforeach ?>

<a href="news/create">Create new</a>