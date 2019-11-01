<section class="page-header">
	<div class="container">		
		<h2> {{ $title }}</h2>
	</div>	
</section>
<!-- Page Header End -->
<section class="section " id="main-page">
	<div class="container">			
  		<?php echo PostHelpers::formatContent($content) ;?>
  	</div>
</section>
