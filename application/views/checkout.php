<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/logo.png"/>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php
include "include/head.php";
?>


<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shopping Cart</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<br/><br/>

<div class="container">
    <h3 align="center" id="order_review_heading">Your order</h3>

    <div id="order_review" style="position: relative;">
        <table class="shop_table">
            <?php
            if (isset($total)){
            $netTotal = 0;

            ?>
            <thead>
            <tr>
                <th colspan="2" class="product-name">&nbsp;</th>

            </tr>
            </thead>
            <tbody>
            <tr class="cart_item">
                <td class="product-name">
                    Cart Total
                </td>
                <td class="product-total">
                    <span class="amount"><?php echo $total ?>Lei/-</span></td>
            </tr>
            </tbody>
            <tfoot>

            <tr class="shipping">
                <th>Shipping and Handling</th>
                <td>
                    25 Lei/-
                </td>
            </tr>


            <tr class="order-total">
                <th>Order Total</th>
                <td><strong><span class="amount"><?php echo $netTotal = $total + 25 ?>Lei/-</span></strong></td>
            </tr>

            </tfoot>
        </table>
    </div>
    <?php
    }
    ?>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>

            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <div id="customer_details" class="col2-set">
                            <div class="col-12">
                                <div class="woocommerce-billing-fields">
                                    <h3>Billing Details</h3>

                                    <?php
                                    echo form_open('Checkout/confirmForm', 'class="checkout"')
                                    ?>
                                    <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                        <label class="" for="billing_first_name">First Name <abbr title="required"
                                                                                                  class="required">*</abbr>
                                        </label>
                                        <input type="text" value="" placeholder="Introduceti Numele"
                                               id="billing_first_name" name="fname" class="input-text" required="">
                                        <input type="hidden" value="<?php echo $netTotal ?>" placeholder=""
                                               id="billing_first_name" name="netTotal">
                                    </p>

                                    <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                        <label class="" for="billing_last_name">Last Name <abbr title="required"
                                                                                                class="required">*</abbr>
                                        </label>
                                        <input type="text" value="" placeholder="Introduceti Prenumele"
                                               id="billing_last_name" name="lname" class="input-text" required="">
                                    </p>
                                    <div class="clear"></div>

                                    <p id="billing_address_1_field"
                                       class="form-row form-row-wide address-field validate-required">
                                        <label class="" for="billing_address_1">Address<abbr title="required"
                                                                                             class="required">*</abbr>
                                        </label>
                                        <input type="text" value="" placeholder="Introduceti Adresa"
                                               id="billing_address_1" name="address" class="input-text" required="">
                                    </p>

                                    <p id="billing_country_field"
                                       class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                        <label class="" for="billing_city">City<abbr title="required"
                                                                                     class="required">*</abbr>
                                        </label>
                                        <input type="text" value="" placeholder="Introduceti Orasul"
                                               id="biling_cityname" name="city" class="input-text" required="">
                                    </p>

                                    <div class="clear"></div>

                                    <p id="billing_email_field"
                                       class="form-row form-row-first validate-required validate-email">
                                        <label class="" for="billing_email">Email Address <abbr title="required"
                                                                                                class="required">*</abbr>
                                        </label>
                                        <input type="text" value="" placeholder="" id="billing_email" name="email"
                                               class="input-text" required="">
                                    </p>

                                    <p id="billing_phone_field"
                                       class="form-row form-row-last validate-required validate-phone">
                                        <label class="" for="billing_phone">Phone<abbr title="required"
                                                                                       class="required">*</abbr>
                                        </label>
                                        <input type="text" required="" value="" placeholder="" id="billing_phone"
                                               name="phone" class="input-text ">
                                    </p>

                                    <h3>Payment</h3>


                                    <label for="FormControlSelect" name="paymentType"> Payment Type</label>
                                    <select class="form-control" style="min-height: 50px" id="paymentType">
                                        <option value="1">Plata la livrare</option>
                                        <option value="2">Plata cu cardul</option>
                                    </select>

                                    <div id="cardInfo">
                                        <div class="d-block my-3">
                                            <div class="custom-control custom-radio" name="paymentMethod">
                                                <input id="credit" name="paymentMethod" type="radio"
                                                       class="custom-control-input" checked required>
                                                <label class="custom-control-label" for="credit">Credit card</label>
                                            </div>
                                            <div class="custom-control custom-radio" name="paymentMethod">
                                                <input id="debit" name="paymentMethod" type="radio"
                                                       class="custom-control-input" required>
                                                <label class="custom-control-label" for="debit">Debit card</label>
                                            </div>
                                            <div class="custom-control custom-radio" name="paymentMethod">
                                                <input id="paypal" name="paymentMethod" type="radio"
                                                       class="custom-control-input" required>
                                                <label class="custom-control-label" for="paypal">PayPal</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3" name="paymentMethod">
                                                <label for="cc-name">Name on card</label>
                                                <input type="text" class="form-control" id="cc-name" placeholder=""
                                                       required>
                                                <small class="text-muted">Full name as displayed on card</small>
                                                <div class="invalid-feedback">
                                                    Name on card is required
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3" name="paymentMethod">
                                                <label for="cc-number">Credit card number</label>
                                                <input type="text" class="form-control" id="cc-number" placeholder=""
                                                       required>
                                                <div class="invalid-feedback">
                                                    Credit card number is required
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 mb-3" name="paymentMethod">
                                                <label for="cc-expiration">Expiration</label>
                                                <input type="text" class="form-control" id="cc-expiration"
                                                       placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Expiration date required
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3" name="paymentMethod">
                                                <label for="cc-cvv">CVV</label>
                                                <input type="text" class="form-control" id="cc-cvv" placeholder=""
                                                       required>
                                                <div class="invalid-feedback">
                                                    Security code required
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input type="submit" value="submit" class="add_to_cart_button"/>


                            <?php
                            echo form_close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


<?php
include "include/footer.php";
?>

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>
<script>
    $(function () {
        let value;
        $("#cardInfo").hide();
        $("#paymentType").change(function (){
            value = parseInt($(this).val());
            if(value == 1) {
                $("#cardInfo").fadeOut(1000)
            } else {
                $("#cardInfo").fadeIn(1000);
            }
        });

    })
</script>
</body>
</html>

