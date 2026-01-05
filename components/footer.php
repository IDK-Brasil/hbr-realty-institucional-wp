<footer class="site-footer-idk-1225">
	<div class="container footer-grid">
		<div class="footer-logo-col">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hbr-only-logo.svg" alt="HBR Realty" class="footer-logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/realty-logo.svg" alt="HBR Realty" class="footer-logo realty-logo">
		</div>

		<div class="footer-line-div">
			<!-- MENU FOOTER (ACF) -->
			<?php $menu = get_field('menu_footer_repetidor', 'option'); ?>
			<?php if ($menu): ?>
				<?php foreach ($menu as $item): ?>
					<?php
					$titulo = $item['nome_item_menu_footer'];
					?>
					<div class="footer-col">
						<h4><?php echo esc_html($titulo); ?></h4>

						<ul>
							<?php foreach ($item['submenu_footer_repetidor'] as $sub): ?>
								<li>
									<a href="<?php echo esc_url($sub['link_botao_item_submenu']['url']); ?>">
										<?php echo esc_html($sub['titulo_item_submenu']); ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>

			<!-- ENDEREÇOS -->
			<div class="footer-col find-us-footer">
				<h4>Onde nos encontrar</h4>

				<?php
				$cidade1   = get_field('cidade_footer_1', 'option');
				$endereco1 = get_field('endereco_footer_1', 'option');
				$cidade2   = get_field('cidade_footer_2', 'option');
				$endereco2 = get_field('endereco_footer_2', 'option');
				?>

				<?php if ($cidade1 && $endereco1): ?>
					<div>
						<h6><?php echo esc_html($cidade1); ?></h6>
						<p><?php echo wp_kses_post($endereco1); ?></p>
					</div>
				<?php endif; ?>

				<?php if ($cidade2 && $endereco2): ?>
					<div>
						<h6><?php echo esc_html($cidade2); ?></h6>
						<p><?php echo wp_kses_post($endereco2); ?></p>
					</div>
				<?php endif; ?>
			</div>

			<!-- REDES E CONTATO -->
			<div class="footer-col">
				<?php
				$linkedin  = get_field('linkedin_footer_social_media', 'option');
				$instagram = get_field('instagram_footer_social_media', 'option');
				$whatsapp  = get_field('whatsapp_footer_social_media', 'option');

				$sociais = [
					'linkedin'  => $linkedin,
					'instagram' => $instagram,
					'whatsapp'  => $whatsapp,
				];

				$sociais = array_filter($sociais);

				if (! empty($sociais)):
				?>
					<div class="footer-col footer-social">
						<h4>Nossas redes sociais</h4>

						<div class="social-grid-footer">
							<?php foreach ($sociais as $slug => $url): ?>
								<?php
								$icon  = get_template_directory_uri() . "/assets/img/social/{$slug}-icon.svg";
								$label = ucfirst($slug);
								?>

								<a href="<?php echo esc_url($url); ?>" target="_blank" class="social-btn-footer">
									<img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($label); ?>">
									<span><?php echo esc_html($label); ?></span>
								</a>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>

				<div class="modal-contact">
					<h4>Contato</h4>

					<div class="contact-item-footer">
						<?php
						$email = get_field('email_footer', 'option');
						$phone = get_field('telefone_footer', 'option');
						?>

						<?php if ($email): ?>
							<a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
						<?php endif; ?>
						•
						<?php if ($phone): ?>
							<a href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_html($phone); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<p>Todos os direitos reservados para <strong>HBR Realty</strong> • <?php echo date('Y'); ?></p>

			<div class="footer-links">
				<p><a href="/termos-de-uso-e-lgpd#politica-de-privacidade">Política de Privacidade</a></p>
				•
				<p><a href="/termos-de-uso-e-lgpd#politica-de-cookies">Política de Cookies</a></p>
				•
				<p><a href="/termos-de-uso-e-lgpd">Termos de Uso</a></p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
	// Swiper [Home Portfolio]
	document.addEventListener('DOMContentLoaded', function() {
		if (!window.Swiper) {
			return;
		}

		const el = document.querySelector('.portfolio-swiper');

		if (!el || el.swiper) {
			return;
		}

		const swiper = new Swiper(el, {
			slidesPerView: 1.15,
			spaceBetween: 16,
			centeredSlides: true,
			loop: false,
			navigation: {
				nextEl: el.querySelector('.swiper-button-next'),
				prevEl: el.querySelector('.swiper-button-prev'),
			},
			breakpoints: {
				480: {
					slidesPerView: 1.15
				},
				640: {
					slidesPerView: 1.3
				},
				768: {
					slidesPerView: 1.15
				}
			}
		});
	});
</script>

<script>
	// Swiper [Home Blog]
	document.addEventListener('DOMContentLoaded', function() {
		if (!window.Swiper) {
			return;
		}

		const el = document.querySelector('.blog-swiper');

		if (!el || el.swiper) {
			return;
		}

		const swiper = new Swiper(el, {
			slidesPerView: 1.15,
			spaceBetween: 16,
			centeredSlides: true,
			loop: false,
			navigation: {
				nextEl: el.querySelector('.swiper-button-next'),
				prevEl: el.querySelector('.swiper-button-prev'),
			},
			breakpoints: {
				480: {
					slidesPerView: 1.15
				},
				640: {
					slidesPerView: 1.3
				},
				768: {
					slidesPerView: 1.15
				}
			}
		});
	});
</script>
</body>

</html>