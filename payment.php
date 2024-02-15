<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="public/font/css/all.css" rel="stylesheet">

<style>
.padding {
    padding: 5rem !important
}

.form-control:focus {
    box-shadow: 10px 0px 0px 0px #ffffff !important;
    border-color: #4ca746
}
</style>

</head>
<body>
<!-- <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input class="box" type="text" id="fname" name="firstname">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input class="box" type="text" id="email" name="email">
            <label for="adr"><i class="far fa-address-card"></i> Address</label>
            <input class="box" type="text" id="adr" name="address">
            <label for="city"><i class="fas fa-city"></i> City</label>
            <input class="box" type="text" id="city" name="city">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input class="box" type="text" id="state" name="state">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input class="box" type="text" id="zip" name="zip">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fab fa-cc-visa" style="color:navy;"></i>
              <i class="fab fa-cc-mastercard" style="color:blue;"></i>
              <i class="fab fa-cc-amex" style="color:red;"></i>
              <i class="fab fa-cc-paypal" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input class="box" type="text" id="cname" name="cardname">
            <label for="ccnum">Credit card number</label>
            <input class="box" type="text" id="ccnum" name="cardnumber">
            <label for="expmonth">Exp Month</label>
            <input class="box" type="text" id="expmonth" name="expmonth">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input class="box" type="text" id="expyear" name="expyear">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input class="box" type="text" id="cvv" name="cvv">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
</div> -->
<div class="padding">
    <div class="row">
        <div class="container-fluid d-flex justify-content-center">
            <div class="col-sm-8 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6"> <span>CREDIT/DEBIT CARD PAYMENT</span> </div>
                            <div class="col-md-6 text-right" style="margin-top: -5px;"> <img src="https://img.icons8.com/color/36/000000/visa.png"> <img src="https://img.icons8.com/color/36/000000/mastercard.png"> <img src="https://img.icons8.com/color/36/000000/amex.png"> </div>
                        </div>
                    </div>
                    <div class="card-body" style="height: 350px">
                        <div class="form-group"> <label for="cc-number" class="control-label">CARD NUMBER</label> <input id="cc-number" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required> </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <label for="cc-exp" class="control-label">CARD EXPIRY</label> <input id="cc-exp" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••" required> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <label for="cc-cvc" class="control-label">CARD CVC</label> <input id="cc-cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="••••" required> </div>
                            </div>
                        </div>
                        <div class="form-group"> <label for="numeric" class="control-label">CARD HOLDER NAME</label> <input type="text" class="input-lg form-control"> </div>
                        <div class="form-group"> <input value="MAKE PAYMENT" type="button" class="btn btn-success btn-lg form-control" style="font-size: .8rem;"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  $(function($) {
$('[data-numeric]').payment('restrictNumeric');
$('.cc-number').payment('formatCardNumber');
$('.cc-exp').payment('formatCardExpiry');
$('.cc-cvc').payment('formatCardCVC');
$.fn.toggleInputError = function(erred) {
this.parent('.form-group').toggleClass('has-error', erred);
return this;
};
$('form').submit(function(e) {
e.preventDefault();
var cardType = $.payment.cardType($('.cc-number').val());
$('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
$('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
$('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
$('.cc-brand').text(cardType);
$('.validation').removeClass('text-danger text-success');
$('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
});
});
</script>

</body>
</html>