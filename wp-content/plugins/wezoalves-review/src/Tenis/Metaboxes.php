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

    /**
     * Get Stores
     */


    $stores = [];
    $loja_query = new WP_Query(array(
        'post_type' => 'loja',
        'posts_per_page' => 50,
        'orderby' => 'title',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'store_logosvg',
                'compare' => 'EXISTS'
            ),
            array(
                'key' => 'store_logosvg',
                'value' => '',
                'compare' => '!='
            )
        )
    ));
    if ($loja_query->have_posts()) :
        while ($loja_query->have_posts()) :
            $loja_query->the_post();
            $storeId = get_the_ID();
            $stores[] = [
                "id" => $storeId,
                "link" => get_permalink($storeId),
                "name" => get_the_title($storeId),
                "image" => getValueCustomPostTypeReview($storeId, 'logo', 'store'),
                "svg" => getValueCustomPostTypeReview($storeId, 'logosvg', 'store'),
                "description" => get_the_excerpt($storeId),
            ];
        endwhile;
        wp_reset_postdata();
    endif;

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
            <th><label for="classificacao">Classificação</label></th>
            <td>

                <?php foreach (["conforto","durabilidade","estabilidade","peso","amortecimento","tracao","respirabilidade","design"] as $fieldScore) : ?>
                    <fieldset>
                        <legend class="cpttenis-field-legend"><?php echo($fieldScore);?></legend>
                        <input type="range" class="cpttenis-field cpttenis-field-range" min="0" max="10" id="classificacao_<?php echo($fieldScore);?>" name="classificacao[<?php echo($fieldScore);?>]"
                            value="<?php echo esc_attr($classificacao[$fieldScore] ?? ''); ?>" placeholder="<?php echo($fieldScore);?> (0-10)" />
                        <p>Nota: <output id="classificacao_<?php echo($fieldScore);?>_score"></output></p>
                        <script>
                            const input_<?php echo($fieldScore);?> = document.querySelector("#classificacao_<?php echo($fieldScore);?>");
                            const value_<?php echo($fieldScore);?> = document.querySelector("#classificacao_<?php echo($fieldScore);?>_score");
                            value_<?php echo($fieldScore);?>.textContent = input_<?php echo($fieldScore);?>.value;
                            input_<?php echo($fieldScore);?>.addEventListener("input", (event) => {
                                value_<?php echo($fieldScore);?>.textContent = event.target.value;
                            });
                        </script>
                    </fieldset>
                    <hr class="cpttenis-field-separator" />
                <?php endforeach; ?>


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


                                <select name="ofertas[<?php echo $index; ?>][loja]" class="cpttenis-field cpttenis-field-store">
                                    <?php foreach ($stores as $store) : ?>
                                        <option value="<?php echo ($store['id']); ?>" <?php selected($oferta['loja'], $store['id']); ?>>
                                            <?php echo ($store['name']); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>

                                <input type="number" class="cpttenis-field cpttenis-field-price"
                                    name="ofertas[<?php echo $index; ?>][preco]" value="<?php echo esc_attr($oferta['preco']); ?>"
                                    placeholder="Preço" />
                                <br>

                                <input type="url" class="cpttenis-field cpttenis-field-url"
                                    name="ofertas[<?php echo $index; ?>][url]" value="<?php echo esc_url($oferta['url']); ?>"
                                    placeholder="URL" />
                                <br>

                                <button class="remove-oferta button">Remover</button>
                                <br>
                                <hr class="cpttenis-field-separator" />
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
                    '<select name="ofertas[' + ofertaIndex + '][loja]" class="cpttenis-field cpttenis-field-store">' +
                    <?php foreach ($stores as $store) : ?>
                    '<option value="<?php echo ($store['id']); ?>"><?php echo ($store['name']); ?></option>' +
                    <?php endforeach; ?>
                '</select>' +
                    '<input type="number" class="cpttenis-field cpttenis-field-price" name="ofertas[' + ofertaIndex + '][preco]" placeholder="Preço" />' +
                    '<input type="url" class="cpttenis-field cpttenis-field-url" name="ofertas[' + ofertaIndex + '][url]" placeholder="URL" /><br>' +
                    '<button class="remove-oferta button">Remover</button><br>' +
                    '</div><hr class="cpttenis-field-separator" />';
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
    <style>
        .cpttenis-field {
            margin: 5px 15px 5px 0;
        }

        .cpttenis-field-store {
            width: 45%;
        }

        .cpttenis-field-price {
            width: 45%;
        }

        .cpttenis-field-url {
            width: 94%;
        }

        .cpttenis-field-range {
            width: 94%;
        }
        
        .cpttenis-field-separator {
            width: 100%;
            border: 0;
            border-bottom: 1px solid #6eb0e0;
            margin: 30px 0;
        }
        .cpttenis-field-legend {
            text-transform: uppercase;
            font-weight: 800;
        }
    </style>
    <?php
}
?>