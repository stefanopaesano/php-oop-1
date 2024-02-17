<?php
    class Film {
        public $titolo;
        public $genere;
        public $data_di_uscita;
        public $incassi;
        public $anno_di_produzione;
        public $durata;
        public $valutazione;
        
                function __construct($titolo, $genere, $data_di_uscita, $incassi, $anno_di_produzione, $durata, $valutazione)
                {
                    $this->titolo = $titolo;
                    $this->genere = $genere;
                    $this->data_di_uscita = $data_di_uscita;
                    $this->incassi = $incassi;
                    $this->anno_di_produzione = $anno_di_produzione;
                    $this->durata = $durata;
                    $this->valutazione = $valutazione;
                }
        
                        public function get_info(){
                            return 'Titolo: '.$this->titolo. ' '. 'Genere: '.$this->genere.
                            '<br>'
                            . 'Data di uscita: '. $this->data_di_uscita.' '. 'Incassi: '. $this->incassi
                            . '<br>'
                            . 'Anno di produzione: ' . $this->anno_di_produzione . ' ' . 'Durata: ' . $this->durata
                            . '<br>'
                            . 'Valutazione: ' . $this->valutazione . '/10';
                        }
    }
    
    $film1 = new Film('Spiderman', 'Azione/Avventura', '2022', '$800 milioni', 2021, '2 ore e 15 minuti', 8.5);
    $film2 = new Film('Alice nel Paese delle Meraviglie', 'Fantasy/Avventura', '2010', '$1.025 miliardi', 2010, '1 ora e 49 minuti', 7.9);

    echo $film1->get_info();
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo $film2->get_info();
?>
