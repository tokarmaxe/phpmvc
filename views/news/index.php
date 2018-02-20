<!DOCTYPE html>
<html>
<body>
<div class="container">
    <?php foreach ($newsList as $newsItem): ?>
        <div class="post">
            <h2><?php echo $newsItem['title'];?></h2>
            <p><?php echo $newsItem['date'];?></p>
            <p><?php echo $newsItem['short_content'];?></p>
            <a href="/news/<?php echo $newsItem['id'];?>">Read more</a>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>