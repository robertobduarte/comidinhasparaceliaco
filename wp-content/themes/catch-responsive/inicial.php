<?php
/**
 * template name: inicial
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Catch Themes
 * @subpackage Catch Responsive
 * @since Catch Responsive 1.0 
 */

get_header(); ?>
	
	<main id="main" class="site-main" role="main">	
		<!--<div id="apresentacao">
			<div id="apresentBox">
				<div id='texto'>					
					<?php/*
							query_posts( 'p=98' );
							while (have_posts()) : the_post();?>
								<div class="tituloDestaque"> <?php the_title(); ?> </div>
								<div class="textoDestaque"> <?php the_content(); ?> </div>
					<?php endwhile; wp_reset_query();*/?>
					
			

				</div>
				<div class='carousell'>
					<?php //echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>			
				</div>
			</div>
		</div>-->
		
		
				
				
				<div class="wrapper">
					<div class="featured-content-wrap">		
						<section id="featured-content" class="layout-three featured-page-content border-top">
						
						<?php /* The loop */				
						$RecentPosts = new WP_Query("showposts=3&cat&cat=6"); //categoria 'Home'
						while($RecentPosts->have_posts()) : $RecentPosts->the_post();?>
							
										
								<article id="featured-post-<?php the_ID(); ?>" class="post hentry featured-page-content">
									<figure class="featured-homepage-image">
										<a href="<?php echo  get_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail(); ?>
										</a>
									</figure>
									<div class="entry-content">
									<?php the_title(); ?>
									
									</div><!-- .entry-content -->
								</article><!-- .featured-post-1 -->					
						
						<?php endwhile; ?>	
						
						</section>
					</div> <!-- conteudo -->
					

						<?php 
						
						/*wp_list_categories(array(	'show_option_all' => 'Receitas por categoria', 
													'orderby' => 'ID', 
													'style' => 'list', 
													'show_count' => 1, 
													'hide_empty' => 0,
													'title_li' => '<div class="minhasCategoria">')); 
						*/
						?>
						
						<?php 
							do_shortcode('[listCatLi]');
							do_shortcode('[listCatSelect]');
							do_shortcode('[listCatArray]');
							do_shortcode('[listPageArray]');
						?>
						
						
						<?php //$pages = do_shortcode('[listPageArray]'); 
						//print_r($pages);?>
						<?php //$pages = get_pages(); ?>
						
						
						<?php /*if(count($pages) >= 2){ ?>	
						
						<nav class="nav-primary search-enabled" role="navigation">
							<div class="wrapper">
								<h1 class="assistive-text">Menu principal</h1>
								<div class="screen-reader-text skip-link"><a href="#content" title="Pular para o conteúdo">Pular para o conteúdo</a></div>
								
								<div class="menu catchresponsive-nav-menu">
									<ul>
									<?php foreach($pages as $page){ ?>	
										<?php $class = ($page->post_parent != 0)? 'page_item page-item-4 page_item_has_children' : ''; ?>
										 <li class="<?php echo $class; ?>"><a href="<?php echo $page->guid; ?>"><?php echo $page->post_title; ?></a></li>
										
										<?php 
										$parametros = array('order' => 'asc',
															'orderby' => 'ID',
															'child_of' => $page->ID);
										$pagesChild = listPagesChild($parametros); ?>										
										<?php if(count($pagesChild) >= 1){?>
											<ul class="children">
											<?php foreach($pagesChild as $child){ ?>
												<li class="page_item page-item-<?php echo $child->ID; ?>"><a href="<?php echo $child->guid; ?>"><?php echo $child->post_title; ?></a></li>
											<?php } ?>
										<?php } ?>
											</ul>
									<?php } ?>
									</ul>
								</div>
								
									<div id="search-toggle" class="genericon">
										<a class="screen-reader-text" href="#search-container">Pesquisar</a>
									</div>

									<div id="search-container" class="displaynone">											
										<form role="search" method="get" class="search-form" action="http://comidinhasparaceliaco.com.br/receitas/">
											<label>
												<span class="screen-reader-text">Pesquisar por:</span>
												<input class="search-field" placeholder="Pesquisar..." value="" name="s" title="Pesquisar por:" type="search">
											</label>
											<input class="search-submit" value="Pesquisar" type="submit">
										</form> 
									</div>
							</div><!-- .wrapper -->
						</nav>
						<?php } */?>
				</div><!-- #content -->
						
	</main><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>