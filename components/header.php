<?php

    /**
     * Header do tema
     */
?>
<!DOCTYPE html>
<html
	<?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body
	<?php body_class(); ?>>

	<header class="site-header-idk-1225 is-top">
		<div class="container header-wrapper">
			<a href="<?php echo home_url(); ?>" class="header-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-hbr.svg" alt="HBR Realty">
			</a>

			<!-- MENU PRINCIPAL (ACF) -->
			<?php $menu = get_field('menu_repetidor', 'option'); ?>

			<?php if ($menu): ?>
				<nav class="header-nav desktop-nav">
					<ul class="menu-list">
						<?php foreach ($menu as $item): ?>
							<?php
                                $titulo  = $item['nome_item_menu'];
                                $link    = $item['link_item_menu']['url'] ?? '#';
                                $slug    = sanitize_title($titulo);
                                $hasMega = ($item['item_submenu'] === 'Sim');
                            ?>

							<li class="menu-item							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                    							                                         <?php echo $hasMega ? 'has-mega' : ''; ?>"
								data-menu="<?php echo esc_attr($slug); ?>">
								<a href="<?php echo esc_url($link); ?>">
									<?php echo esc_html($titulo); ?>

									<?php if ($hasMega): ?>
										<img class="menu-arrow"
											src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg"
											alt="">
									<?php endif; ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</nav>
			<?php endif; ?>

			<button class="header-btn desktop-btn">Entre em contato</button>

			<!-- ÍCONE MOBILE -->
			<button class="menu-toggle mobile-only" aria-label="Abrir menu">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-hamburguer.svg" class="icon-open" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/close-icon.svg" class="icon-close" alt="">
			</button>
		</div>

		<!-- MEGA MENUS (ACF) -->
		<?php if ($menu): ?>
			<?php foreach ($menu as $item): ?>
				<?php
                    if ($item['item_submenu'] !== 'Sim') {
                        continue;
                    }

                    $slug = sanitize_title($item['nome_item_menu']);
                    $cols = $item['submenu_repetidor'];

                    if (! $cols) {
                        continue;
                    }
                ?>

				<div class="mega-menu" data-mega-menu="<?php echo esc_attr($slug); ?>">
					<div class="mega-container">
						<?php foreach ($cols as $col): ?>
							<div class="mega-col">
								<h6><?php echo esc_html($col['titulo_item_submenu']); ?></h6>
								<p><?php echo esc_html($col['description_item_submenu']); ?></p>

								<?php
                                    if ($col['link_externo_submenu'] === 'Sim') {
                                        $link = $col['link_externo_item_submenu_choice'];
                                    } else {
                                        $link = $col['link_botao_item_submenu']['url'];
                                    }
                                ?>

								<a href="<?php echo esc_url($link); ?>" class="mega-link">
									<?php echo esc_html($col['rotulo_botao_item_submenu']); ?> →
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>

		<!-- MENU MOBILE -->
		<?php if ($menu): ?>
			<nav class="mobile-menu">
				<ul class="mobile-menu-list">
					<?php foreach ($menu as $item): ?>
						<?php
                            $titulo  = $item['nome_item_menu'];
                            $link    = $item['link_item_menu']['url'] ?? '#';
                            $hasMega = ($item['item_submenu'] === 'Sim');
                            $slug    = sanitize_title($titulo);
                        ?>
						<li class="mobile-item
						<?php echo $hasMega ? 'has-submenu' : ''; ?>">
							<a href="<?php echo esc_url($link); ?>">
								<?php echo esc_html($titulo); ?>

								<?php if ($hasMega): ?>
									<img class="menu-arrow"
										src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg"
										alt="">
								<?php endif; ?>
							</a>

							<?php if ($hasMega): ?>
								<ul class="mobile-submenu">
									<?php foreach ($item['submenu_repetidor'] as $sub): ?>
										<li>
											<a href="<?php echo esc_url($sub['link_botao_item_submenu']['url']); ?>">
												<?php echo esc_html($sub['titulo_item_submenu']); ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
				<button class="mobile-cta">Entre em contato</button>
			</nav>
		<?php endif; ?>
	</header>

	<!-- MODAL DE CONTATO -->
	<div class="modal-overlay-idk-1225" id="contactModal">
		<div class="modal-container">
			<div class="modal-col modal-form">
				<h2>Contato</h2>

				<p>É lojista ou investidor e gostaria de conhecer as oportunidades disponíveis neste empreendimento? Entre em contato pelo formulário abaixo ou pelos canais de contato.</p>

				<form id="contactForm">
					<div class="input-group">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-icon.svg" class="input-icon">
						<input type="text" name="nome" id="nameContact" placeholder="Insira seu nome" required>
					</div>

					<div class="input-group">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/email-icon.svg" class="input-icon">
						<input type="email" name="email" id="emailContact" placeholder="Insira seu melhor e-mail" required>
					</div>

					<div class="input-group textarea-group">
						<textarea name="mensagem" id="msgContact" placeholder="Deixe sua mensagem..." required></textarea>
					</div>

					<label class="checkbox-line">
						<input type="checkbox" id="termsContact" required>
						<span class="check-icon"></span>

						<span>Li e concordo com os <a href="/termos-de-uso-e-lgpd">Termos e Condições de Uso</a></span>
					</label>

					<button class="send-btn" type="submit" id="sendContact">Enviar</button>
				</form>
			</div>

			<div class="modal-col modal-info">
				<button class="modal-close">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/close-black-icon.svg" alt="">
					Fechar
				</button>

				<div class="modal-content">
					<div class="find-us">
						<h5>Onde nos encontrar</h5>

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
						<div class="modal-socials">
							<h5>Nossas redes sociais</h5>

							<div class="social-grid">
								<?php foreach ($sociais as $slug => $url): ?>
									<?php
                                        $icon  = get_template_directory_uri() . "/assets/img/social/{$slug}-icon.svg";
                                        $label = ucfirst($slug);
                                    ?>

									<a href="<?php echo esc_url($url); ?>" target="_blank" class="social-btn">
										<img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($label); ?>">
										<span><?php echo esc_html($label); ?></span>
									</a>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif; ?>

					<div class="modal-contact">
						<h5>Contato</h5>

						<div class="contact-item">
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
		</div>
	</div>