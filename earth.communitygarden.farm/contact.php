<?php
  error_reporting(0);
	if ($_GET['page'] == 'top' || $_GET['page'] == "")
				include 'top.php';
?>

<table border="1" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td height="50" class="bgcolor"></td>
	<tr>
		<td width="100%" class="bgcolor">
<center>
<div id="main">
		
			<div class="slider">		
					<div id="coin-slider">
							<img src="images/slider/1slide.jpg" alt="">
							<img src="images/slider/2slide.jpg" alt="">
							<img src="images/slider/3slide.jpg" alt="">
							<img src="images/slider/4slide.jpg" alt="">
							
                    <div class="controls">
                    
                        <div class="banner">
                            <strong>
                                <span class="banner-bot">
										As the earth's population increases, we need to be more conscious on how we use and conserve water. Any ideas? Let's implement them. Earth Community Garden tries to use the most water conscious methods but there is always room for improvement.                                
								</span>
                            </strong>
                            <strong>
                            	<span class="text-1">Community Service</span>
                                <span class="text-2"></span>
                            </strong>
                        </div>

                        <div class="banner">
                            <strong>
                                <span class="banner-bot">
									Food, clothing and shelter are often referred to as the basic necessities of life. Because Earth Community Garden is directly involved with the production of one of these, food, it has the potential to create practices for the betterment of life and alleviate inequality.                                
								</span>
                            </strong>
                            <strong>
                            	<span class="text-1">Labor & Work Donations</span>
                                <span class="text-2"></span>
                            </strong>
                        </div>
                        
                        <div class="banner">
                            <strong>
                                <span class="banner-bot">
									Earth Community Garden believes that it is the responsibility of each of us as individuals, and society as a whole to minimize our impact on this planet. Simple things like riding a bike instead of driving can do this. HAVE OLD GARDEN STUFF? Donate it to us!                                
								</span>
                            </strong>
                            <strong>
                            	<span class="text-1">Resources & Material Donations</span>
                                <span class="text-2"></span>
                            </strong>
                        </div>
						
						<div class="banner">
                            <strong>
                                <span class="banner-bot">
									It goes without saying that the climate ultimately dictates the resources for gardening. Earth Community Garden looks for the most sustainable methods using a "stone's throw" theory of resources.								
								</span>
                            </strong>
                            <strong>
                            	<span class="text-1">Teach A Class</span>
                                <span class="text-2"></span>
                            </strong>
                        </div>
						
				</div></div>			
			</div>       
	</div>       
</center> 
		</td>
	</tr>
	<tr>
		<td align="center" class="bgcolor">
			<div id="main">
					<div class="contact">
						<div class="section">
							<div class="heading">
								Get in touch with Earth Community Garden! 801.930.0675
							</div>
							<p>
								There is always work to be done and items to be needed. We accept court ordered community service from a judge, just as well as conscience ordered volunteer labor from the heart. Earth Community Garden provides complimentary education to the public. We believe all academic classes should be free. However, donations of any kind are appreciated and we even will accept donations of "money," if that is all you have.
							</p>
						</div>
						<div id="line">
						<img src="images/line.png">
						</div>
						<div class="section">
							<table border="1" width="60%">
								<tr>
									<td width="80%">
										<input type="text" placeholder="Name" id="in">
									</td>
								</tr>
								<tr>
									<td width="80%">
										<input type="text" placeholder="Email" id="in">
									</td>
								</tr>
								<tr>
									<td width="80%">
										<input type="text" placeholder="Phone" id="in">
									</td>
								</tr>
								<tr>
									<td width="80%">
										<input type="text" placeholder="How close to the City of Centerfield?" id="in">
									</td>
								</tr>
								<tr>
									<td width="80%">
										<textarea placeholder="Message: Donations are always appreciated! (How would you like to help?)" id="in" rows="6"></textarea>
									</td>
								</tr>
								<tr>
									<td width="80%" align="right">
										<input type="submit" value="Send" id="button_login" style="width:100px;">
									</td>
								</tr>
							</table>
						</div>
					</div>
			</div>
		</td>
	</tr>
	
	
	
</table>

<?php
  error_reporting(0);
	if ($_GET['page'] == 'footer' || $_GET['page'] == "")
				include 'footer.php';
?>