
<div class="w3l_banner_nav_right">
    <!-- about -->
    <div class="privacy about">
        <h3><span><?= Yii::$app->view->title ?></span></h3>

        <div class="checkout-right">
            <h4>В вашей корзине: <span>1 продукт(а)</span></h4>
            <table class="timetable_sub">
                <thead>
                <tr>
                    <th>Номер товара</th>
                    <th>Продукт</th>
                    <th>Количество</th>
                    <th>Название</th>

                    <th>Стоимость</th>
                    <th>Убрать</th>
                </tr>
                </thead>
                <tbody>
                <tr class="rem1">
                    <td class="invert">1</td>
                    <td class="invert-image"><a href="single.html"><img src="images/1.png" alt=" " class="img-responsive"></a></td>
                    <td class="invert">
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus">&nbsp;</div>
                                <div class="entry value"><span>1</span></div>
                                <div class="entry value-plus active">&nbsp;</div>
                            </div>
                        </div>
                    </td>
                    <td class="invert">Fortune Подсолнечное масло</td>

                    <td class="invert">290.00 ₽</td>
                    <td class="invert">
                        <div class="rem">
                            <div class="close1"> </div>
                        </div>

                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="checkout-left">
            <div class="col-md-4 checkout-left-basket">
                <h4>Continue to basket</h4>
                <ul>
                    <li>Product1 <i>-</i> <span>15.00 ₽ </span></li>
                    <li>Total Service Charges <i>-</i> <span>15.00 ₽</span></li>
                    <li>Total <i>-</i> <span>84.00 ₽</span></li>
                </ul>
            </div>
            <div class="col-md-8 address_form_agile">
                <h4>Add a new Details</h4>
                <form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
                    <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                        <div class="information-wrapper">
                            <div class="first-row form-group">
                                <div class="controls">
                                    <label class="control-label">Full name: </label>
                                    <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                </div>
                                <div class="w3_agileits_card_number_grids">
                                    <div class="w3_agileits_card_number_grid_left">
                                        <div class="controls">
                                            <label class="control-label">Mobile number:</label>
                                            <input class="form-control" type="text" placeholder="Mobile number">
                                        </div>
                                    </div>
                                    <div class="w3_agileits_card_number_grid_right">
                                        <div class="controls">
                                            <label class="control-label">Landmark: </label>
                                            <input class="form-control" type="text" placeholder="Landmark">
                                        </div>
                                    </div>
                                    <div class="clear"> </div>
                                </div>
                                <div class="controls">
                                    <label class="control-label">Town/City: </label>
                                    <input class="form-control" type="text" placeholder="Town/City">
                                </div>
                                <div class="controls">
                                    <label class="control-label">Address type: </label>
                                    <select class="form-control option-w3ls">
                                        <option>Office</option>
                                        <option>Home</option>
                                        <option>Commercial</option>

                                    </select>
                                </div>
                            </div>
                            <button class="submit check_out">Delivery to this Address</button>
                        </div>
                    </section>
                </form>
                <div class="checkout-right-basket">
                    <a href="payment.html">Make a Payment <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                </div>
            </div>

            <div class="clearfix"> </div>

        </div>

    </div>
    <!-- //about -->
</div>
<div class="clearfix"></div>
</div>
<!-- //banner -->
