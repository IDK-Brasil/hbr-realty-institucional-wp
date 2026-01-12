<?php

/**
 * Espera receber:
 * $img
 */
?>

<section class="contact-section">
    <div class="contact-col contact-wrapper">
        <div class="contact-col contact-form">
            <h2>Contato</h2>

            <p>É lojista ou investidor e gostaria de conhecer as oportunidades disponíveis neste empreendimento? Entre em contato pelo formulário abaixo ou pelos canais de contato.</p>

            <!-- <form id="contactSectionForm">
                <div class="input-group">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-icon.svg" class="input-icon">
                    <input type="text" name="nome" id="nameContactSection" placeholder="Insira seu nome" required>
                </div>

                <div class="input-group">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/email-icon.svg" class="input-icon">
                    <input type="email" name="email" id="emailContactSection" placeholder="Insira seu melhor e-mail" required>
                </div>

                <div class="input-group textarea-group">
                    <textarea name="mensagem" id="msgContactSection" placeholder="Deixe sua mensagem..." required></textarea>
                </div>

                <label class="checkbox-line">
                    <input type="checkbox" id="termsContactSection" required>
                    <span class="check-icon"></span>

                    <span>Li e concordo com os <a href="/termos-de-uso-e-lgpd">Termos e Condições de Uso</a></span>
                </label>

                <button class="send-btn" type="submit" id="sendContactSection">Enviar</button>
            </form> -->

            <div class="forminator-wrapper">
                <?php echo do_shortcode('[forminator_form id="613"]'); ?>
            </div>
        </div>
    </div>

    <div class="contact-col image-wrapper">
        <?php if ($img): ?>
            <img src="<?php echo esc_url($img); ?>" class="contact-img">
        <?php endif; ?>
    </div>
</section>