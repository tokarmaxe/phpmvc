<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админ панель</a></li>
                    <li><a href="/admin/order">Управление заказа</a></li>
                    <li class="active">Удалить заказ</li>
                </ol>
            </div>

            <h4>Удалить заказ #<?php echo $order['id'];?></h4>

            <p>Вы ействительно хотите удалить этот заказ?</p>

            <form action="#" method="post">
                <input type="submit" name="submit" value="Удалить"/>
            </form>
        </div>
    </div>
</section>