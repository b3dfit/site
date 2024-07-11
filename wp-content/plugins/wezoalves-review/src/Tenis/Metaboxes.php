<?php

$store_key = 'tenis';

function cpt_tenis_add_metaboxes()
{
    add_meta_box('cpt_tenis_details', 'Detalhes do Tênis', 'cpt_tenis_details_callback', 'tenis', 'normal', 'high');
}
add_action('add_meta_boxes', 'cpt_tenis_add_metaboxes');


function cpt_tenis_details_callback($post)
{
    wp_nonce_field('cpt_tenis_save_details', 'cpt_tenis_details_nonce');

    
    $descricao = get_post_meta($post->ID, '_cpt_tenis_descricao', true);
    $classificacao = get_post_meta($post->ID, '_cpt_tenis_classificacao', true);
    $caracteristicas = get_post_meta($post->ID, '_cpt_tenis_caracteristicas', true);
    $beneficios = get_post_meta($post->ID, '_cpt_tenis_beneficios', true);
    $ofertas = get_post_meta($post->ID, '_cpt_tenis_ofertas', true);
    $imagens = get_post_meta($post->ID, '_cpt_tenis_imagens', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="descricao">Descrição</label></th>
            <td><textarea id="descricao" name="descricao" rows="5"
                    cols="50"><?php echo esc_textarea($descricao); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="classificacao">Classificação Global</label></th>
            <td>
                <input type="text" id="classificacao_conforto" name="classificacao[conforto]"
                    value="<?php echo esc_attr($classificacao['conforto'] ?? ''); ?>" placeholder="Conforto (0-10)" /><br>
                <input type="text" id="classificacao_durabilidade" name="classificacao[durabilidade]"
                    value="<?php echo esc_attr($classificacao['durabilidade'] ?? ''); ?>"
                    placeholder="Durabilidade (0-10)" /><br>
                <input type="text" id="classificacao_estabilidade" name="classificacao[estabilidade]"
                    value="<?php echo esc_attr($classificacao['estabilidade'] ?? ''); ?>"
                    placeholder="Estabilidade (0-10)" /><br>
                <input type="text" id="classificacao_peso" name="classificacao[peso]"
                    value="<?php echo esc_attr($classificacao['peso'] ?? ''); ?>" placeholder="Peso (0-10)" /><br>
                <input type="text" id="classificacao_amortecimento" name="classificacao[amortecimento]"
                    value="<?php echo esc_attr($classificacao['amortecimento'] ?? ''); ?>"
                    placeholder="Amortecimento (0-10)" /><br>
                <input type="text" id="classificacao_tracao" name="classificacao[tracao]"
                    value="<?php echo esc_attr($classificacao['tracao'] ?? ''); ?>" placeholder="Tração (0-10)" /><br>
                <input type="text" id="classificacao_respirabilidade" name="classificacao[respirabilidade]"
                    value="<?php echo esc_attr($classificacao['respirabilidade'] ?? ''); ?>"
                    placeholder="Respirabilidade (0-10)" /><br>
                <input type="text" id="classificacao_design" name="classificacao[design]"
                    value="<?php echo esc_attr($classificacao['design'] ?? ''); ?>" placeholder="Design (0-10)" /><br>
            </td>
        </tr>
        <tr>
            <th><label for="caracteristicas">Características Técnicas</label></th>
            <td><textarea id="caracteristicas" name="caracteristicas" rows="5"
                    cols="50"><?php echo esc_textarea($caracteristicas); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="beneficios">Benefícios</label></th>
            <td><textarea id="beneficios" name="beneficios" rows="5"
                    cols="50"><?php echo esc_textarea($beneficios); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="ofertas">Ofertas</label></th>
            <td>
                <div id="ofertas-wrapper">
                    <?php if (! empty($ofertas)) : ?>
                        <?php foreach ($ofertas as $index => $oferta) : ?>
                            <div class="oferta">
                                <select name="ofertas[<?php echo $index; ?>][loja]">
                                    <option value="loja1" <?php selected($oferta['loja'], 'loja1'); ?>>Loja 1</option>
                                    <option value="loja2" <?php selected($oferta['loja'], 'loja2'); ?>>Loja 2</option>
                                    <option value="loja3" <?php selected($oferta['loja'], 'loja3'); ?>>Loja 3</option>
                                </select>
                                <input type="number" name="ofertas[<?php echo $index; ?>][preco]"
                                    value="<?php echo esc_attr($oferta['preco']); ?>" placeholder="Preço" />
                                <input type="url" name="ofertas[<?php echo $index; ?>][url]"
                                    value="<?php echo esc_url($oferta['url']); ?>" placeholder="URL" />
                                <button class="remove-oferta button">Remover</button>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <button id="add-oferta" class="button">Adicionar Oferta</button>
            </td>
        </tr>
        <tr>
            <th><label for="imagens">Imagens do Produto</label></th>
            <td>
                <input type="hidden" id="imagens" name="imagens" value="<?php echo esc_attr($imagens); ?>" />
                <button id="upload-imagens" class="button">Adicionar Imagens</button>
                <div id="imagens-preview"></div>
            </td>
        </tr>
    </table>
    <script>
        jQuery(document).ready(function ($) {
            var ofertaIndex = <?php echo ! empty($ofertas) ? count($ofertas) : 0; ?>;

            $('#add-oferta').on('click', function (e) {
                e.preventDefault();
                var ofertaHTML = '<div class="oferta">' +
                    '<select name="ofertas[' + ofertaIndex + '][loja]">' +
                    '<option value="loja1">Loja 1</option>' +
                    '<option value="loja2">Loja 2</option>' +
                    '<option value="loja3">Loja 3</option>' +
                    '</select>' +
                    '<input type="number" name="ofertas[' + ofertaIndex + '][preco]" placeholder="Preço" />' +
                    '<input type="url" name="ofertas[' + ofertaIndex + '][url]" placeholder="URL" />' +
                    '<button class="remove-oferta button">Remover</button>' +
                    '</div>';
                $('#ofertas-wrapper').append(ofertaHTML);
                ofertaIndex++;
            });

            $('#ofertas-wrapper').on('click', '.remove-oferta', function (e) {
                e.preventDefault();
                $(this).closest('.oferta').remove();
            });

            var file_frame;
            $('#upload-imagens').on('click', function (e) {
                e.preventDefault();
                if (file_frame) {
                    file_frame.open();
                    return;
                }
                file_frame = wp.media.frames.file_frame = wp.media({
                    title: 'Selecionar Imagens',
                    button: {
                        text: 'Usar Imagens'
                    },
                    multiple: true
                });
                file_frame.on('select', function () {
                    var attachments = file_frame.state().get('selection').toJSON();
                    var imageURLs = attachments.map(function (attachment) {
                        return attachment.url;
                    }).join(',');
                    $('#imagens').val(imageURLs);
                    var previewHTML = attachments.map(function (attachment) {
                        return '<img src="' + attachment.url + '" style="max-width: 100px; height: auto; margin-right: 10px;" />';
                    }).join('');
                    $('#imagens-preview').html(previewHTML);
                });
                file_frame.open();
            });
        });
    </script>
    <?php
}
?>