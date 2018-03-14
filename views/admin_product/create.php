<section>
    <div class="container">
        <h2>Добавить новый товар</h2>

        <form action="#" method="post" enctype="multipart/form-data">
            <p>Название товара</p>
            <input type="text" name="name"/>

            <p>Артикул</p>
            <input type="text" name="code"/>

            <p>Стоимость, $</p>
            <input type="text" name="price"/>

            <p>Категория</p>
            <select name="category_id">
                <?php if (is_array($categoriesList)): ?>
                    <?php foreach ($categoriesList as $category): ?>
                        <option value="<?php echo $category['id']; ?>">
                            <?php echo $category['name']; ?>
                        </option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>

            <br/><br/>

            <p>Производитель</p>
            <input type="text" name="brand"/>

            <p>Изображение товара</p>
            <input type="file" name="image"/>

            <p>Детальное описание</p>
            <textarea name="description"></textarea>

            <br/><br/>

            <p>Наличие на складе</p>
            <select name="availability">
                <option value="1" selected="selected">Да</option>
                <option value="0">Нет</option>
            </select>

            <p>Новинка</p>
            <select name="is_new">
                <option value="1" selected="selected">Да</option>
                <option value="0">Нет</option>
            </select>

            <p>Рекомендуемые</p>
            <select name="is_recomended">
                <option value="1" selected="selected">Да</option>
                <option value="0">Нет</option>
            </select>

            <p>Статус</p>
            <select name="status">
                <option value="1" selected="selected">Отображается</option>
                <option value="0">Скрыт</option>
            </select>

            <br/><br/>

            <input type="submit" name="submit" class="btn bnt-default" value="Сохранить">

            <br/><br/>

        </form>
    </div>
</section>