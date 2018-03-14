<section>
    <div class="container">
        <h2>Обновить категорию №<?php echo $category['id'];?></h2>

        <form action="#" method="post">
            <p>Название категории</p>
            <input type="text" name="name" value="<?php echo $category['name'];?>"/>

            <p>Порядковый номер</p>
            <input type="text" name="sort_order" value="<?php echo $category['sort_order'];?>"/>

            <br/><br/>

            <p>Статус</p>
            <input type="text" name="status" value="<?php echo $category['status'];?>"/>

            <br/><br/>

            <input type="submit" name="submit" class="btn bnt-default" value="Сохранить">

            <br/><br/>

        </form>
    </div>
</section>