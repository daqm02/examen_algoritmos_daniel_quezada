<?php

class WordCounter {
    private $text;

    public function __construct($text) {
        $this->text = $text;
    }

    public function countWords() {
        $text = strtolower($this->text);
        $text = str_replace(array('.', ',', ':', '-', '—'), '', $text);
        $words = explode(' ', $text);

        $wordCount = array();
        foreach ($words as $word) {
            if (!empty($word)) {
                if (isset($wordCount[$word])) {
                    $wordCount[$word]++;
                } else {
                    $wordCount[$word] = 1;
                }
            }
        }
        return $wordCount;
    }
}

// Ejemplo propuesto
$inputString = "Érase una vez una niñita que lucía una hermosa capa de color rojo. Como la niña la usaba muy a menudo, todos la llamaban Caperucita Roja. Un día, la mamá de Caperucita Roja la llamó y le dijo: —Abuelita no se siente muy bien, he horneado unas galletitas y quiero que tú se las lleves. —Claro que sí —respondió Caperucita Roja, poniéndose su capa y llenando su canasta de galletas recién horneadas. Antes de salir, su mamá le dijo: — Escúchame muy bien, quédate en el camino y nunca hables con extraños. —Yo sé mamá —respondió Caperucita Roja y salió inmediatamente hacia la casa de la abuelita.";

$wordCounter = new WordCounter($inputString);
$result = $wordCounter->countWords();
$jsonResult = json_encode($result, JSON_UNESCAPED_UNICODE);

echo "Input string: <br>" . $inputString;
echo "<br><br> Output: " . $jsonResult;

?>