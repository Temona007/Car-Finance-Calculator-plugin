<section id="car-calculator">

	<div class="container">
	  <div class="loan-calculator">
	    <form name="Loan Calculator" class="calculate-form" method=”GET”>
	      
	      <div class="row">
	        <div class="col-md-6">
	      <div class="row">
	        <div class="col-12">
	          <label class="loan-title" style="margin-top: 0;">Loan amount:</label><br>
	          <span id="loan_amount" class="value"></span>
	          <div style="clear:both;"></div>
	          <div id="purchase_price_slider" class="slider"></div>
	        </div>

	        <div class="col-12" style="">
	          <label class="loan-title">Deposit:</label>
	          <span id="downpayment" class="value"></span>
	          <div style="clear:both;"></div>
	          <div id="downpayment_slider" class="slider"></div>
	        </div>

	        <div class="col-12">
	          <label class="loan-title">Repayment period:</label>
	          <span id="loan_term" class="value"></span>
	          <div style="clear:both;"></div>
	          <div id="loan_term_slider" class="slider"></div>
	        </div>

	        <div class="col-12">
	          <label class="loan-title">Credit Rating:</label>
	          <div style="clear:both;"></div>

	          <div id="calc_buttons" class="btn-group btn-group-justified">
	            
	              <button type="button" class="btn  btn-light btn-sm btn-block apr" id="Excellent">excellent</button>

	              <button type="button" class="btn btn-light btn-sm btn-block apr" id="Good">good</button>
	        
	              <button type="button" class="btn active btn-light btn-sm btn-block apr selected-apr active-apr" id="Average">fair</button>
	            
	              <button type="button" class="btn btn-light btn-sm btn-block apr" id="Bad">bad</button>
	            

	            <div class="btn-group btn-group-sm" style="display: none;">
	              <button type="button" class="btn btn-success btn-sm btn-block apr" id="Poor">Poor</button>
	            </div>

	          </div>

	        </div>

	      </div>

	      </div>

	     <div class="col-md-6" id="final_button">
	        <ul class="text-left" id="representativeTable">

	          <li>best available rate:<span id="apr_example" class="value" style="float: right;"></span></li>   <!-- Representative APR -->
	          <li>total repayment:<span id="monthly_payment_example" class="value" style="float: right;"></span></li>  <!-- Monthly Repayments -->             
	          <li>total cost of credit:<span id="total_credit_example" class="value" style="float: right;"></span></li> <!-- Total Cost of Credit -->
	          <li>48 monthly<br>payments of<span id="total_payable_example" class="value" style="float: right;"></span></li> <!--  Total Amount Payable -->

	          <li style="display: none;">Loan Term<br><span id="term_example" class="value"></span></li>
	          <li style="display: none;">Loan Amount<br><span id="loan_amount_example" class="value"></span></li>
	        </ul>
	        <div class="text-center">
	          <a href="#"  style=""><button type="button">GET A QUOTE NOW<small>No impact on your credit score</small></button></a>
	        </div>
	     </div>

	     </div>

	      <input name="sliderVal" type="hidden" id="sliderVal" value='0' readonly />
	      <input name="sliderVal2" type="hidden" id="sliderVal2" value='0' readonly />
	      <input name="sliderVal3" type="hidden" id="sliderVal3" value='0' readonly />
	      <input name="apr" type="hidden" id="apr" value='Average' readonly />

	    </form>
	  </div>
	</div>
	
</section>


     