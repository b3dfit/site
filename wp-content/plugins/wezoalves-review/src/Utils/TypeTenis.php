<?php
namespace Review\Utils;

final class TypeTenis
{
    private static function data()
    {
        return [
            ["name" => "Performance - Corrida (Running)", "id" => "PERFORMANCE_RUNNING"],
            ["name" => "Performance - Treino (Training)", "id" => "PERFORMANCE_TRAINING"],
            ["name" => "Performance - Basquete", "id" => "PERFORMANCE_BASKETBALL"],
            ["name" => "Performance - Futebol (Society e Futsal)", "id" => "PERFORMANCE_FOOTBALL"],
            ["name" => "Performance - Tennis e Squash", "id" => "PERFORMANCE_TENNIS_SQUASH"],
            ["name" => "Casual - Estilo de Vida (Lifestyle)", "id" => "CASUAL_LIFESTYLE"],
            ["name" => "Casual - Skate", "id" => "CASUAL_SKATE"],
            ["name" => "Outdoor - Trilha (Trail)", "id" => "OUTDOOR_TRAIL"],
            ["name" => "Outdoor - Caminhada (Hiking)", "id" => "OUTDOOR_HIKING"],
            ["name" => "Especiais - Minimalistas", "id" => "SPECIAL_MINIMALIST"],
            ["name" => "Especiais - Para Esportes Específicos", "id" => "SPECIAL_SPORTS_SPECIFIC"],
            ["name" => "Infantis", "id" => "KIDS"]
        ];
    }

    public static function getAll()
    {
        return self::data();
    }
    public static function getById($id)
    {
        $types = self::data();
        $ids = array_column($types, 'id');
        $index = array_search($id, $ids);

        return ($index !== false) ? $types[$index] : null;
    }
}
