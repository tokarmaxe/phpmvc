<section>
    <div class="container">
        <h2>Редактировать товар</h2>

        <form action="post">
            <p>Название товара</p>
            <input type="text" name="name" value="<?php echo $product['name'];?>"/>

            <p>Артикул</p>
            <input type="text" name="code" value="<?php echo $product['code'];?>"/>

            <p>Стоимость, $</p>
            <input type="text" name="price" value="<?php echo $product['price'];?>"/>

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
            <input type="text" name="brand" value="<?php echo $product['brand'];?>"/>

            <p>Изображение товара</p>
            <img src="<?php echo Product::getImage($product['id']);?>" alt="">
            <input type="file" name="image"/>

            <p>Детальное описание</p>
            <textarea name="description" value="<?php echo $product['description'];?>"></textarea>

            <br/><br/>

            <p>Наличие на складе</p>
            <select name="availability">
                <option value="1" <?php if ($product['availability'] == 1) echo 'selected ="selected"';?>>Да</option>
                <option value="0" <?php if ($product['availability'] == 0) echo 'selected ="selected"';?>>Нет</option>
            </select>

            <p>Новинка</p>
            <select name="is_new">
                <option value="1" <?php if ($product['availability'] == 1) echo 'selected ="selected"';?>>Да</option>
                <option value="0" <?php if ($product['availability'] == 0) echo 'selected ="selected"';?>>Нет</option>
            </select>

            <p>Рекомендуемые</p>
            <select name="is_recomended">
                <option value="1" <?php if ($product['availability'] == 1) echo 'selected ="selected"';?>>Да</option>
                <option value="0" <?php if ($product['availability'] == 0) echo 'selected ="selected"';?>>Нет</option>
            </select>

            <p>Статус</p>
            <select name="status">
                <option value="1" <?php if ($product['availability'] == 1) echo 'selected ="selected"';?>>Отображается</option>
                <option value="0" <?php if ($product['availability'] == 0) echo 'selected ="selected"';?>>Скрыт</option>
            </select>

            <br/><br/>

            <input type="submit" name="submit" class="btn bnt-default" value="Сохранить">

            <br/><br/>

        </form>
    </div>
</section>