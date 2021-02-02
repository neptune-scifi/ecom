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
            Sobre
            <p>&nbsp;</p>
            <p class="ecomm-footer-sobre">
                Somos um recommerce de acessórios de luxo. Temos como objetivo criar uma excelência no serviço de consignação, estendendo a vida útil dos produtos e promovendo a economia circular a fim de diminuir os impactos dessa indústria no planeta. Nossa equipe é especializada em curadoria, autenticação e higienização a fim de disponibilizar produtos em excelente estado. O que nos une é o amor pela moda, e o desejo de ressignificar nosso consumo. 
            </p>
            <hr>
            <p class="ecomm-footer-copyright">
                Rua Dias Ferreira, 175 / 306 Leblon, Rio de Janeiro - RJ, 22431-050
                <br>
                CNPJ: 36.833.859/0001-29
            </p>
        </div>

        <div class="column">
            Como Funciona?
            <p>&nbsp;</p>
            <ul class="ecom-footer-menus">
                <li><a>FAQ</a></li>
                <li><a>Política de Privacidade</a></li>
                <li><a>Termos de Uso</a></li>
                <li><a>Devoluções</a></li>
                <li><a>Formas de Pagamento</a></li>
            </ul>

        </div>

        <div class="column">
            Redes Sociais
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
