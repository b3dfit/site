<?php

$store_key = 'store';


function review_cpt_metaboxes()
{
    add_meta_box('cpt_lojas_details', 'Detalhes da Loja', 'review_cpt_callback', 'loja', 'normal', 'high');
}
add_action('add_meta_boxes', 'review_cpt_metaboxes');


function review_cpt_callback($post)
{

    global $store_key;
    if (! $post) {
        return;
    }

    wp_nonce_field('cpt_lojas_save_details', 'cpt_lojas_details_nonce');


    $logo = get_post_meta($post->ID, $store_key . '_logo', true);
    $description = get_post_meta($post->ID, $store_key . '_description', true);
    $domain = get_post_meta($post->ID, $store_key . '_domain', true);
    $url = get_post_meta($post->ID, $store_key . '_url', true);
    $comissao = get_post_meta($post->ID, $store_key . '_comission', true);
    $email = get_post_meta($post->ID, $store_key . '_email', true);
    $ra_shortname = get_post_meta($post->ID, $store_key . '_ra_shortname', true);
    $ra_storeid = get_post_meta($post->ID, $store_key . '_ra_storeid', true);
    $ra_score = get_post_meta($post->ID, $store_key . '_ra_score', true);
    $programas = get_post_meta($post->ID, $store_key . '_affiliate', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="logo">Imagem do Logo</label></th>
            <td>
                <input type="hidden" id="logo" name="<?php echo ($store_key . '_logo'); ?>"
                    value="<?php echo esc_attr($logo); ?>" />
                <button id="upload-logo" class="button">Adicionar Logo</button>
                <div id="logo-preview" style="margin-top: 10px;">
                    <?php if ($logo) : ?>
                        <img src="<?php echo esc_url($logo); ?>" style="max-width: 100px; height: auto;" />
                    <?php endif; ?>
                </div>
            </td>
        </tr>
        <tr>
            <th><label for="description">Descrição da Loja</label></th>
            <td><textarea id="description" name="<?php echo ($store_key . '_description'); ?>" rows="5"
                    cols="50"><?php echo esc_textarea($description); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="domain">Domínio</label></th>
            <td><input type="text" id="domain" name="<?php echo ($store_key . '_domain'); ?>"
                    value="<?php echo esc_url($domain); ?>" placeholder="example.com" /></td>
        </tr>
        <tr>
            <th><label for="url">Url</label></th>
            <td><input type="url" id="url" name="<?php echo ($store_key . '_url'); ?>" value="<?php echo esc_url($url); ?>"
                    placeholder="https://www.example.com" /></td>
        </tr>
        <tr>
            <th><label for="comissao">Comissão (%)</label></th>
            <td><input type="number" id="comissao" name="<?php echo ($store_key . '_comission'); ?>"
                    value="<?php echo esc_attr($comissao); ?>" step="0.01" />
            </td>
        </tr>
        <tr>
            <th><label for="email">Email de Contato</label></th>
            <td><input type="email" id="email" name="<?php echo ($store_key . '_email'); ?>"
                    value="<?php echo esc_attr($email); ?>" /></td>
        </tr>
        <tr>
            <th><label for="programas">Programas de Afiliados</label></th>
            <td>
                <div id="programas-wrapper">
                    <?php if (! empty($programas)) : ?>
                        <?php foreach ($programas as $index => $programa) : ?>
                            <div class="programa">
                                <input type="text" name="<?php echo $store_key . '_affiliate' ?>[<?php echo $index; ?>][plataforma]"
                                    value="<?php echo esc_attr($programa['plataforma']); ?>" placeholder="Plataforma" />
                                <input type="text"
                                    name="<?php echo $store_key . '_affiliate' ?>[<?php echo $index; ?>][id_advertiser]"
                                    value="<?php echo esc_attr($programa['id_advertiser']); ?>" placeholder="ID Advertiser" />
                                <input type="text"
                                    name="<?php echo $store_key . '_affiliate' ?>[<?php echo $index; ?>][id_publisher]"
                                    value="<?php echo esc_attr($programa['id_publisher']); ?>" placeholder="ID Publisher" />
                                <button class="remove-programa button">Remover</button>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <button id="add-programa" class="button">Adicionar Programa</button>
            </td>
        </tr>
        <tr>
            <th><label for="ra_shortname">RA Store Shortname</label></th>
            <td><input type="text" id="ra_shortname" name="<?php echo ($store_key . '_ra_shortname'); ?>"
                    value="<?php echo esc_attr($ra_shortname); ?>" /></td>
        </tr>
        <tr>
            <th><label for="ra_storeid">RA Store ID</label></th>
            <td><input type="text" id="ra_storeid" name="<?php echo ($store_key . '_ra_storeid'); ?>"
                    value="<?php echo esc_attr($ra_storeid); ?>" /></td>
        </tr>
        <tr>
            <th><label for="ra_score">RA Store Score</label></th>
            <td><input type="text" id="ra_score" name="<?php echo ($store_key . '_ra_score'); ?>"
                    value="<?php echo esc_attr($ra_score); ?>" /></td>
        </tr>
    </table>

    <script>
        jQuery(document).ready(function ($) {
            var programaIndex = <?php echo ! empty($programas) ? count($programas) : 0; ?>;

            $('#add-programa').on('click', function (e) {
                e.preventDefault();

                var programaHTML = '<div class="programa">' +
                    '<input type="text" name="<?php echo ($store_key . '_affiliate'); ?>[' + programaIndex + '][plataforma]" placeholder="Plataforma" />' +
                    '<input type="text" name="<?php echo ($store_key . '_affiliate'); ?>[' + programaIndex + '][id_advertiser]" placeholder="ID Advertiser" />' +
                    '<input type="text" name="<?php echo ($store_key . '_affiliate'); ?>[' + programaIndex + '][id_publisher]" placeholder="ID Publisher" />' +
                    '<button class="remove-programa button">Remover</button>' +
                    '</div>';
                $('#programas-wrapper').append(programaHTML);
                programaIndex++;
            });

            $('#programas-wrapper').on('click', '.remove-programa', function (e) {
                e.preventDefault();
                $(this).closest('.programa').remove();
            });

            var file_frame;
            $('#upload-logo').on('click', function (e) {
                e.preventDefault();
                if (file_frame) {
                    file_frame.open();
                    return;
                }
                file_frame = wp.media.frames.file_frame = wp.media({
                    title: 'Selecionar Logo',
                    button: {
                        text: 'Usar Logo'
                    },
                    multiple: false
                });
                file_frame.on('select', function () {
                    var attachment = file_frame.state().get('selection').first().toJSON();
                    $('#logo').val(attachment.url);
                    $('#logo-preview').html('<img src="' + attachment.url + '" style="max-width: 100px; height: auto;" />');
                });
                file_frame.open();
            });
        });
    </script>
    <?php
}
?>