
function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

jQuery(document).ready(function() {

  $("#purchase_price_slider").slider({
    range: "min",
    animate: true,
    value: 7500,
    min: 1000,
    max: 50000,
    step: 100,
    slide:
    function(event, ui)
    {
      update(1,ui.value); //changed
      calculatePrice(ui.value);
    }
  });

  $("#downpayment_slider").slider({
    range: "min",
    animate: true,
    value: 700,
    min: 0,
    max: 8000,
    step: 100,
    slide:
    function(event, ui)
    {
      update3(1,ui.value); //changed
      calculatePrice(ui.value);
    }
  });

  $("#loan_term_slider").slider({
    range: "min",
    animate: true,
    value:48,
    min: 12,
    max: 60,
    step: 6,
    slide:
    function(event, ui)
    {
      update2(1,ui.value); //changed
      calculatePrice(ui.value);
    }
  });

  $('.apr').on('click',function(event) {
    var id = $(this).attr('id');

    $('.apr').removeClass('selected-apr');
    $(this).addClass('selected-apr');
    $(".apr").removeClass("active-apr");
    $(this).addClass("active-apr");

    $('#apr').val(id);

    calculatePrice()
  });

  update(1,7500);
  update2(1,48);
  update3(1,700);
  $('apr').val("Average");
  calculatePrice();
});

function update(slider,val) {
  $('#sliderVal').val(val);
  $('#loan_amount').html("<p>&pound;&nbsp;&nbsp;</p>" + val);
}

function update2(slider,val) {
  $('#sliderVal2').val(val);
  $('#loan_term').html(val + " <span>months</span>");
}

function update3(slider,val) {
  $('#sliderVal3').val(val);
  $('#deposit').val(val);
  $('#downpayment').html("&pound;" + val);
}

function calculatePrice(val){
  var apr = { 'Bad' : 14.88, 'Poor' : 9.9, 'Average' : 7.41, 'Good' : 4.93, 'Excellent' : 3.43 }
  var price = $('#sliderVal').val();
  var months = $('#sliderVal2').val();
  var deposit = $('#sliderVal3').val();
  var int_rate = apr[$('#apr').val()];
  var rating = $('#apr').val();
  v = price;
  P = price - deposit;
  i = int_rate;
  N = months;
  Y = N / 12;
  Ti = P * ((i * Y) / 100);
  Tt = parseFloat(Ti) + parseFloat(v);
  loan_amount = P;
  loan_amount =  numberWithCommas(loan_amount.toFixed(2));
  monthly_payment = (P + Ti) / N;
  total_credit_amount = Ti;
  total_credit_amount =  numberWithCommas(total_credit_amount.toFixed(2));
  total_payable = Tt;
  total_payable = numberWithCommas(total_payable.toFixed(2));
  monthly_payment = numberWithCommas(monthly_payment.toFixed(2));
  $('#rating_example').html(rating);
  $('#rating').val(rating);

  $('#deposit').val(deposit);


  $('#purchaseprice').val(v);
  $('#loan_amount_example').html("&pound;" + loan_amount);
  $('#loanamount').val(P);
  $('#term_example').html( N + " months" );

  $('#term').val(N);
  $("#monthly_payment").html("&pound;" + monthly_payment);
  $("#monthly_payment_example").html("&pound;" + monthly_payment);

  $('#monthly').val(monthly_payment);
  $("#rep_apr").html((int_rate*2.01).toFixed(1) + "%");
  $('#apr_example').html((int_rate*2.01).toFixed(1) + "%");

  $('#repapr').val((int_rate*2.01).toFixed(1));

  $('#total_credit_example').html("&pound;" + total_credit_amount);

  $('#creditcost').val(total_credit_amount);
  $('#total_payable_example').html("&pound;" + total_payable);

  $('#totalamount').val(total_payable);


}

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

// Get the container element
var btnContainer = document.getElementById("calc_buttons");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("btn");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
