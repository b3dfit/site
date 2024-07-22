<?php

namespace Review\WordPress\Fields;

use Review\Model\Field;
use Review\WordPress\Fields;

final class Foods extends Fields
{
    public static function fields()
    {
        $fields = [
            new Field("id", "number", "Nº Alimento Tabela <a target='_blank' href='https://www.nepa.unicamp.br/wp-content/uploads/sites/27/2023/10/Taco-4a-Edicao.xlsx'>TACO</a>"),
            new Field("calcio", "number", "Cálcio", "(mg)"),
            new Field("carbo-idrato", "number", "Carbo-idrato", "(g)"),
            new Field("cinzas", "number", "Cinzas", "(g)"),
            new Field("cobre", "number", "Cobre", "(mg)"),
            new Field("colesterol", "number", "Colesterol", "(mg)"),
            new Field("energia", "number", "Energia", "(kcal)"),
            new Field("energia", "number", "Energia", "(kJ)"),
            new Field("ferro", "number", "Ferro", "(mg)"),
            new Field("fibraalimentar", "number", "Fibra Alimentar", "(g)"),
            new Field("fosforo", "number", "Fósforo", "(mg)"),
            new Field("lipideos", "number", "Lipídeos", "(g)"),
            new Field("magnesio", "number", "Magnésio", "(mg)"),
            new Field("manganes", "number", "Manganês", "(mg)"),
            new Field("niacina", "number", "Niacina", "(mg)"),
            new Field("piridoxina", "number", "Piridoxina", "(mg)"),
            new Field("potassio", "number", "Potássio", "(mg)"),
            new Field("proteína", "number", "Proteína", "(g)"),
            new Field("rae", "number", "RAE", "(mcg)"),
            new Field("re", "number", "RE", "(mcg)"),
            new Field("retinol", "number", "Retinol", "(mcg)"),
            new Field("riboflavina", "number", "Riboflavina", "(mg)"),
            new Field("sodio", "number", "Sódio", "(mg)"),
            new Field("tiamina", "number", "Tiamina", "(mg)"),
            new Field("umidade", "number", "Umidade", "(%)"),
            new Field("vitaminac", "number", "Vitamina C", "(mg)"),
            new Field("zinco", "number", "Zinco", "(mg)"),
        ];
        return $fields;
    }
    
    public static function showMetaBox($post)
    {
        parent::show_meta_box($post, self::fields());
    }

    public static function saveMeta($post_id)
    {
        parent::save_meta($post_id, self::fields());
    }

    public static function registerCustomFields()
    {
        parent::register_custom_fields(self::fields());
    }
}
