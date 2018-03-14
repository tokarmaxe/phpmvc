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

            <h4>Список заказов</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID заказа</th>
                    <th>Имя покупателя</th>
                    <th>Телефон покупателя</th>
                    <th>Дата оформления</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($orders as $order):?>
                    <tr>
                        <td><?php echo $order['id'];?></td>
                        <td><?php echo $order['user_name'];?></td>
                        <td><?php echo $order['user_phone'];?></td>
                        <td><?php echo $order['date'];?></td>
                        <td><?php echo $order['status'];?></td>
                        <td><a href="/admin/order/view/<?php echo $order['id'];?>" title="Информация о заказе">view</a></td>

                        <td><a href="/admin/order/delete/<?php echo $order['id'];?>" title="Удалить">⛌</a></td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</section>