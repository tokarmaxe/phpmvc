<section>
    <div class="container">
        <div class="row">
            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Управление категориями</li>
                </ol>
            </div>

            <a href="/admin/category/create" class="btn btn-default back"><i class="fa fa-plus"></i>Добавить категорию</a>

            <h4>Список категорий</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID товара</th>
                    <th>Артикул</th>
                    <th>Название товара</th>
                    <th>Цена</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($productsList as $product):?>
                    <tr>
                        <td><?php echo $product['id'];?></td>
                        <td><?php echo $product['code'];?></td>
                        <td><?php echo $product['name'];?></td>
                        <td><?php echo $product['price'];?></td>
                        <td><a href="/admin/product/update/<?php echo $product['id'];?>" title="Редактировать">Edit</a></td>
                        <td><a href="/admin/product/delete/<?php echo $product['id'];?>" title="Удалить">⛌</a></td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</section>