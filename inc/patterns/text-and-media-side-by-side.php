<?php
/*
 * Text and Media Side By Side
 */

return array(
	'title'      => __( 'Text and Media Side By Side', 'vela' ),
	'categories' => array( 'vela' ),
	'blockTypes' => array( 'featured', 'columns', 'gallery' ),
	'content'    => '<! -- wp:group {
	"backgroundColor":"light-grey","layout":{
		"type":"default"}} -->
<div class="wp-block-group has-light-grey-background-color has-background" >
<! -- wp:columns -- >
	<div class="wp-block-columns" >
	<! -- wp:column -- >
		<div class="wp-block-column" >
		<! -- wp:heading {"level":1} -->
			<h1 > Profit margins and stuff </h1 >
			<! -- /wp:heading -- >

			<! -- wp:paragraph -- >
			<p > Leverage agile frameworks to provide a robust synopsis for high level overviews . Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition . Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment .
			</p >
			<! -- /wp:paragraph -- >
			</div >
		<! -- /wp:column -- >

		<! -- wp:column -- >
		<div class="wp-block-column" >
		<! -- wp:image {"id":21,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large" >
				<img src = "http://test-plugins.lndo.site/wp-content/uploads/2022/07/laptop-g6e383d9d0_1920-1024x640.jpg" 
				     alt = "" 
				     class="wp-image-21"
				           />
			</figure >
			<! -- /wp:image -- ></div >
		<! -- /wp:column -- ></div >
	<! -- /wp:columns -- ></div >
<! -- /wp:group -- >',

);