<section>
    <div class="container">
        <div class="row">
            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Управление заказами</li>
                </ol>
            </div>

            <h4>Информация о заказе</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <td>ID заказа</td>
                    <td><?php echo $order['id'];?></td>
                </tr>
                <tr>
                    <td>Имя покупателя</td>
                    <td><?php echo $order['user_name'];?></td>
                </tr>
                <tr>
                    <td>Телефон покупателя</td>
                    <td><?php echo $order['user_phone'];?></td>
                </tr>
                <tr>
                    <td>Коментарий покупателя</td>
                    <td><?php echo $order['user_comment'];?></td>
                </tr>
                <tr>
                    <td>Дата оформления</td>
                    <td><?php echo $order['date'];?></td>
                </tr>
                <tr>
                    <td>Статус</td>
                    <td><?php echo $order['status'];?></td>
                </tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID товара</th>
                    <th>Артикул</th>
                    <th>Название товара</th>
                    <th>Цена</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($products as $product):?>
                    <tr>
                        <td><?php echo $product['id'];?></td>
                        <td><?php echo $product['code'];?></td>
                        <td><?php echo $product['name'];?></td>
                        <td><?php echo $product['price'];?></td>
                        <td><a href="/admin/order/view/<?php echo $product['id'];?>" title="Смотреть">view</a></td>
                        <td><a href="/admin/order/delete/<?php echo $product['id'];?>" title="Удалить">⛌</a></td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</section>