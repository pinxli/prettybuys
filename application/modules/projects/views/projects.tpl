
	<!-- start: Section Projects -->
	<section id="projects">
		
		<!-- start: Section Header -->
		<div class="section-header">
			
			<!-- start: Container -->
			<div class="container">
				
				<h2>Awesome Deals</h2>

			</div>
			<!-- end: Container -->
			
		</div>
		<!-- end: Section Header -->
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Filter Section -->
			<div id="filters">
				<ul class="option-set" data-option-key="filter">
					<li><a href="#filter" class="selected" data-option-value="*">All</a></li>
					{foreach from=$productTypeList item=typelist}
					<li><a href="#filter" data-option-value=".{$typelist->url_slug}">{$typelist->product_type}</a></li>
					{/foreach}
					
				</ul>
			</div>
			<!-- end: Filter Section -->
			
			<!-- start: Portfolio -->
			<div id="wall">

				{foreach from=$productList item=product}
				<div class="item {$product->url_slug}">
					<div class="title">{$product->product_name}</div>
					<div class="picture">
						<img src="{$baseUrl}assets/img/productImg/{$product->product_icon}" alt=""/>
						<div class="overlay">
							<div class="actions">
								<a href="{$baseUrl}assets/img/productImg/{$product->product_icon}" class="search fancybox"><i class="icon-search"></i></a>
								<a class="link" href="{$baseUrl}projects/viewproject"><i class="icon-link" title="{$product->product_name}"></i></a>
							</div>
													
							<div class="actions countdowntimer" expiry_date="{$product->expiry_date|date_format:'%D %T'}" productId="{$product->product_id}">
							<ul class="countdown" id="{$product->product_id}">
							<li> <span class="days">00</span>
									<p class="days_ref">days</p>
									</li>
									<li class="seperator">.</li>
									<li> <span class="hours">00</span>
									<p class="hours_ref">hours</p>
									</li>
									<li class="seperator">:</li>
									<li> <span class="minutes">00</span>
									<p class="minutes_ref">minutes</p>
									</li>
									<li class="seperator">:</li>
									<li> <span class="seconds">00</span>
									<p class="seconds_ref">seconds</p>
									</li>
							</ul>
							</div>
							
							<div class="description">
						
							</div>
						</div>
					</div>	
				</div>
				{/foreach}
				

			</div>
			<!-- end: Portfolio -->
		
		</div>
		<!-- end: Container -->		
		
	</section>
	<!-- end: Section Projects -->