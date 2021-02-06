<?php
/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
<footer id="site-footer" class="ecom-footer" role="contentinfo">
    <div class="columns">
        <div class="column is-6">
            SOBRE
            <p>&nbsp;</p>
            <p class="ecomm-footer-sobre">
                A linda Boutique Store é um ecomerce especializado em vendas de roupas femininas.
                Foi criada em 2018 com vendas on-line pelo Instagram. Em 2020 abrimos também nossa loja fisica na cidade de Franca-sp. Em 2021 criamos nosso Site lindo para atender com muita comodidade e carinho.
                Nosso maior objetivo é ajudar nossas clientes a acentuarem e valorizarem sua beleza através dos nossos looks. 
            </p>
            <hr>
            <p class="ecomm-footer-copyright">
                Av. Dr. Hélio Palermo, 2867 - Estação, Franca - SP, 14405-130
                <br>
                CNPJ: 0
            </p>
        </div>

        <div class="column">
            COMO FUNCIONA
            <p>&nbsp;</p>
            <ul class="ecom-footer-menus">
                <li><a href="https://lindaboutiquestore.com.br/quem-somos/">Quem Somos</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="">Política de Privacidade</a></li>
                <li><a href="">Termos de Uso</a></li>
                <li><a href="">Devoluções</a></li>
                <li><a href="">Formas de Pagamento</a></li>
            </ul>
        </div>

        <div class="column">
            REDES SOCIAIS
            <p>&nbsp;</p>
            <ul class="ecom-footer-socialmedia">
                <li>
                    <a>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/socialmedia/facebook.png' ); ?>" />
                    </a>
                </li>

                <li>
                    <a>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/socialmedia/instagram.png' ); ?>" />
                    </a>
                </li>

                <li>
                    <a>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/socialmedia/whatsapp.png' ); ?>" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
