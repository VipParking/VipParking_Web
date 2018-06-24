<?php

class Utente implements JsonSerializable
{
    public $Codice;
    public $Cognome;
    public $Nome;
    public $Targa;
    public $Modello;
    public $Arrivo;
    public $Partenza;
    public $Destinazione;
    public $Passeggeri;
    public $Terminal;
    public $Parcheggio;
    public $Settore;
    public $Chiave;
    public $Prezzo;
    public $Pagamento;
    public $Lavaggio;
    public $Servizi;
    public $Stato;

    public function jsonSerialize() {
        return [
            'Codice' => $this-> Codice,
            'Cognome' => $this-> Cognome,
            'Nome' => $this-> Nome,
            'Targa' => $this-> Targa,
            'Modello' => $this-> Modello,
            'Arrivo' => $this-> Arrivo,
            'Partenza' => $this-> Partenza,
            'Destinazione' => $this-> Destinazione,
            'Passeggeri' => $this-> Passeggeri,
            'Terminal' => $this-> Terminal,
            'Parcheggio' => $this-> Parcheggio,
            'Settore' => $this-> Settore,
            'Chiave' => $this-> Chiave,
            'Prezzo' => $this-> Prezzo,
            'Pagamento' => $this-> Pagamento,
            'Lavaggio' => $this-> Lavaggio,
            'Servizi' => $this-> Servizi,
            'Stato' => $this-> Stato
            ];
    }
}

$utente1 = new Utente();
$utente1->Codice = "1";
$utente1->Cognome = "Palella";
$utente1->Nome = "Valerio";
$utente1->Targa = "EX123BC";
$utente1->Modello = "Tesla Model X";
$utente1->Arrivo = "17/05/2018";
$utente1->Partenza = "20/05/2018";
$utente1->Destinazione = "Australia";
$utente1->Passeggeri = "4";
$utente1->Terminal = "1";
$utente1->Parcheggio = "Aperto";
$utente1->Settore = "C3";
$utente1->Chiave = "12";
$utente1->Prezzo = "25";
$utente1->Pagamento = "Paypal";
$utente1->Lavaggio = "Si";
$utente1->Servizi = "N/A";
$utente1->Stato = "out";

$utente2 = new Utente();
$utente2->Codice = "2";
$utente2->Cognome = "Ripamonti";
$utente2->Nome = "Giorgio";
$utente2->Targa = "CX032YY";
$utente2->Modello = "Panda 4x4";
$utente2->Arrivo = "24/07/2018";
$utente2->Partenza = "01/08/2018";
$utente2->Destinazione = "Scozia";
$utente2->Passeggeri = "3";
$utente2->Terminal = "2";
$utente2->Parcheggio = "Coperto";
$utente2->Settore = "A4";
$utente2->Chiave = "";
$utente2->Prezzo = "36";
$utente2->Pagamento = "In loco";
$utente2->Lavaggio = "No";
$utente2->Servizi = "Valet";
$utente2->Stato = "in";

$utente3 = new Utente();
$utente3->Codice = "3";
$utente3->Cognome = "Morda'";
$utente3->Nome = "Carmelo";
$utente3->Targa = "FE321DD";
$utente3->Modello = "Mercedes Classe A";
$utente3->Arrivo = "24/08/2018";
$utente3->Partenza = "25/08/2018";
$utente3->Destinazione = "Calabria";
$utente3->Passeggeri = "3";
$utente3->Terminal = "1";
$utente3->Parcheggio = "Coperto";
$utente3->Settore = "E5";
$utente3->Chiave = "";
$utente3->Prezzo = "10";
$utente3->Pagamento = "Paypal";
$utente3->Lavaggio = "No";
$utente3->Servizi = "Valet";
$utente3->Stato = "in";

$utente4 = new Utente();
$utente4->Codice = "4";
$utente4->Cognome = "Smith";
$utente4->Nome = "Jhon";
$utente4->Targa = "DF564KK";
$utente4->Modello = "FORD F150";
$utente4->Arrivo = "28/06/2018";
$utente4->Partenza = "07/07/2018";
$utente4->Destinazione = "New York";
$utente4->Passeggeri = "1";
$utente4->Terminal = "1";
$utente4->Parcheggio = "Scoperto";
$utente4->Settore = "YY";
$utente4->Chiave = "";
$utente4->Prezzo = "14";
$utente4->Pagamento = "Paypal";
$utente4->Lavaggio = "Interno Esterno";
$utente4->Servizi = "Valet Ingresso";
$utente4->Stato = "in";

$utente5 = new Utente();
$utente5->Codice = "5";
$utente5->Cognome = "Verdi";
$utente5->Nome = "Mario";
$utente5->Targa = "FE341DD";
$utente5->Modello = "Mercedes Classe A";
$utente5->Arrivo = "24/08/2018";
$utente5->Partenza = "25/08/2018";
$utente5->Destinazione = "Calabria";
$utente5->Passeggeri = "3";
$utente5->Terminal = "1";
$utente5->Parcheggio = "Coperto";
$utente5->Settore = "E5";
$utente5->Chiave = "";
$utente5->Prezzo = "10";
$utente5->Pagamento = "Paypal";
$utente5->Lavaggio = "No";
$utente5->Servizi = "Valet";
$utente5->Stato = "in";

$utente6 = new Utente();
$utente6->Codice = "6";
$utente6->Cognome = "Rossi";
$utente6->Nome = "Carmelo";
$utente6->Targa = "FE321DE";
$utente6->Modello = "Mercedes Classe A";
$utente6->Arrivo = "24/08/2018";
$utente6->Partenza = "25/08/2018";
$utente6->Destinazione = "Calabria";
$utente6->Passeggeri = "3";
$utente6->Terminal = "1";
$utente6->Parcheggio = "Coperto";
$utente6->Settore = "E5";
$utente6->Chiave = "";
$utente6->Prezzo = "10";
$utente6->Pagamento = "Paypal";
$utente6->Lavaggio = "No";
$utente6->Servizi = "Valet";
$utente6->Stato = "in";

$utente7 = new Utente();
$utente7->Codice = "7";
$utente7->Cognome = "Moncado";
$utente7->Nome = "Giorgia";
$utente7->Targa = "FE325DD";
$utente7->Modello = "Mercedes Classe A";
$utente7->Arrivo = "24/08/2018";
$utente7->Partenza = "25/08/2018";
$utente7->Destinazione = "Calabria";
$utente7->Passeggeri = "3";
$utente7->Terminal = "1";
$utente7->Parcheggio = "Coperto";
$utente7->Settore = "E5";
$utente7->Chiave = "1";
$utente7->Prezzo = "10";
$utente7->Pagamento = "Contanti";
$utente7->Lavaggio = "No";
$utente7->Servizi = "Valet";
$utente7->Stato = "in";

$listaUtentiJSON = array(json_encode($utente1),json_encode($utente2),json_encode($utente3),json_encode($utente4),json_encode($utente5),json_encode($utente6),json_encode($utente7));
$listaEncoded = json_encode($listaUtentiJSON);

echo $listaEncoded;

?>