{extends file="base_temp.tpl"}

{block name=title}BagShop | Order{/block}

{block name=body}
<section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Check out</li>
                </ol>
            </div>
            <!--/breadcrums-->

            <div class="register-req">
                <p></p>
            </div>
            <!--/register-req-->

            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="shopper-info">
                            <form action="order.php" method="POST">
								<p>Customer: <span style="color:orange">{$smarty.session.CUSTOMER.firstname|capitalize} {$smarty.session.CUSTOMER.lastname|capitalize}</span></p>
								<input type="hidden" name="cno" value={$smarty.session.CUSTOMER.cno}>


								<p>Employee On Duty: <span style="color:orange">{$smarty.session.EMPLOYEE.fname|capitalize} {$smarty.session.EMPLOYEE.lname|capitalize}</span></p>
								<input type="hidden" name="eno" value={$smarty.session.EMPLOYEE.eno}>
								
								<p>Order Information: <span style="color:orange">{$smarty.session.PART.pname|capitalize}</span></p>
								<input type="hidden" name="pno" value={$smarty.session.PART.pno}>

								<p></p>
								<input type="number" placeholder="Quantity Demanded" name="qty" value="">

								<!--a class="btn btn-primary" href="">Make Order</a-->
								<input class="btn btn-primary" type="submit" name="submit" value="Make Order" />
							</form>
                        </div>
                    </div>
                 
                    <div class="col-sm-4">
                        <div class="order-message">
                             <p>Order Notification</p>
							<textarea style="font-size:160%; color:orange;" name="message" placeholder="Notes about your order, Special Notes for Delivery" rows="1">{$order_info}</textarea>
                        </div>
                    </div>
                </div>
            </div>
		</div>	
	</section>
{/block}