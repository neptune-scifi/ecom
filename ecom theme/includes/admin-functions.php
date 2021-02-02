<?php
/**
 * Hello Elementor admin functions.
 *
 * @package HelloElementor
 */

/**
 * Show in WP Dashboard notice about the plugin is not activated.
 *
 * @return void
 */
function hello_elementor_fail_load_admin_notice() {
    // Leave to Elementor Pro to manage this.
    if ( function_exists( 'elementor_pro_load_plugin' ) ) {
        return;
    }

    $screen = get_current_screen();
    if ( isset( $screen->parent_file ) && 'plugins.php' === $screen->parent_file && 'update' === $screen->id ) {
        return;
    }

    if ( 'true' === get_user_meta( get_current_user_id(), '_hello_elementor_install_notice', true ) ) {
        return;
    }

    $plugin = 'elementor/elementor.php';

    $installed_plugins = get_plugins();

    $is_elementor_installed = isset( $installed_plugins[ $plugin ] );

    if ( $is_elementor_installed ) {
        if ( ! current_user_can( 'activate_plugins' ) ) {
            return;
        }

        $message = __( 'Ecom é uma tema baseado no Hello Elementor, para você criar sua loja virtual perfeitamente com Elementor e Woocommerce.', 'hello-elementor' );

        $button_text = __( 'Activate Elementor', 'hello-elementor' );
        $button_link = wp_nonce_url( 'plugins.php?action=activate&amp;plugin=' . $plugin . '&amp;plugin_status=all&amp;paged=1&amp;s', 'activate-plugin_' . $plugin );
    } else {
        if ( ! current_user_can( 'install_plugins' ) ) {
            return;
        }

        $message = __( 'Ecom é uma tema baseado no Hello Elementor, para você criar sua loja virtual perfeitamente com Elementor e Woocommerce.', 'hello-elementor' );

        $button_text = __( 'Instalar Elementor', 'hello-elementor' );
        $button_link = wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=elementor' ), 'install-plugin_elementor' );
    }

?>
<style>
    .notice.hello-elementor-notice {
        border-left-color: #9b0a46 !important;
        padding: 20px;
    }
    .rtl .notice.hello-elementor-notice {
        border-right-color: #9b0a46 !important;
    }
    .notice.hello-elementor-notice .hello-elementor-notice-inner {
        display: table;
        width: 100%;
    }
    .notice.hello-elementor-notice .hello-elementor-notice-inner .hello-elementor-notice-icon,
    .notice.hello-elementor-notice .hello-elementor-notice-inner .hello-elementor-notice-content,
    .notice.hello-elementor-notice .hello-elementor-notice-inner .hello-elementor-install-now {
        display: table-cell;
        vertical-align: middle;
    }
    .notice.hello-elementor-notice .hello-elementor-notice-icon {
        color: #9b0a46;
        font-size: 50px;
        width: 50px;
    }
    .notice.hello-elementor-notice .hello-elementor-notice-content {
        padding: 0 20px;
    }
    .notice.hello-elementor-notice p {
        padding: 0;
        margin: 0;
    }
    .notice.hello-elementor-notice h3 {
        margin: 0 0 5px;
    }
    .notice.hello-elementor-notice .hello-elementor-install-now {
        text-align: center;
    }
    .notice.hello-elementor-notice .hello-elementor-install-now .hello-elementor-install-button {
        padding: 5px 30px;
        height: auto;
        line-height: 20px;
        text-transform: capitalize;
    }
    .notice.hello-elementor-notice .hello-elementor-install-now .hello-elementor-install-button i {
        padding-right: 5px;
    }
    .rtl .notice.hello-elementor-notice .hello-elementor-install-now .hello-elementor-install-button i {
        padding-right: 0;
        padding-left: 5px;
    }
    .notice.hello-elementor-notice .hello-elementor-install-now .hello-elementor-install-button:active {
        transform: translateY(1px);
    }
    @media (max-width: 767px) {
        .notice.hello-elementor-notice {
            padding: 10px;
        }
        .notice.hello-elementor-notice .hello-elementor-notice-inner {
            display: block;
        }
        .notice.hello-elementor-notice .hello-elementor-notice-inner .hello-elementor-notice-content {
            display: block;
            padding: 0;
        }
        .notice.hello-elementor-notice .hello-elementor-notice-inner .hello-elementor-notice-icon,
        .notice.hello-elementor-notice .hello-elementor-notice-inner .hello-elementor-install-now {
            display: none;
        }
    }
</style>
<script>jQuery( function( $ ) {
        $( 'div.notice.hello-elementor-install-elementor' ).on( 'click', 'button.notice-dismiss', function( event ) {
            event.preventDefault();

            $.post( ajaxurl, {
                action: 'hello_elementor_set_admin_notice_viewed'
            } );
        } );
    } );</script>
<div class="notice updated is-dismissible hello-elementor-notice hello-elementor-install-elementor">
    <div class="hello-elementor-notice-inner">
        <div class="hello-elementor-notice-icon">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/elementor-logo.png' ); ?>" alt="Elementor Logo" />
        </div>

        <div class="hello-elementor-notice-content">
            <h3><?php esc_html_e( 'ECOM Instalado. Você começou seu sucesso!', 'hello-elementor' ); ?></h3>
            <p>
            <p><?php echo esc_html( $message ); ?></p>
            
            <hr>
            <p>&nbsp;</p>
            <p><a href="/wp-admin/plugin-install.php?s=elementor&tab=search&type=term"><?php esc_html_e( 'Instale agora o plugin Elementor Website Builder para começar sua loja.', 'hello-elementor' ); ?></a>
            </p>
            <p>&nbsp;</p>
            <p><a href="/wp-admin/plugin-install.php?s=woocommerce&tab=search&type=term"><?php esc_html_e( 'Ah! E não esqueça de instalar o WooCommerce também.', 'hello-elementor' ); ?></a>
            </p>
        </div>

    </div>
</div>
<?php
}

/**
 * Set Admin Notice Viewed.
 *
 * @return void
 */
function ajax_hello_elementor_set_admin_notice_viewed() {
    update_user_meta( get_current_user_id(), '_hello_elementor_install_notice', 'true' );
    die;
}

add_action( 'wp_ajax_hello_elementor_set_admin_notice_viewed', 'ajax_hello_elementor_set_admin_notice_viewed' );

if ( ! did_action( 'elementor/loaded' ) ) {
    add_action( 'admin_notices', 'hello_elementor_fail_load_admin_notice' );
}
