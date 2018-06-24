<?php

class Cliente implements JsonSerializable
{
    public $Cognome;
    public $Nome;
    public $RagioneSociale;
    public $CodiceFiscale;
    public $PartitaIva;
    public $Telefono;
    public $Email;
    public $Indirizzo;
    public $Citta;
    public $CAP;
    public $Provincia;
    public $Nazione;
    public $Prenotazioni = array();

    public function jsonSerialize() {
        return [
            'Cognome' => $this-> Cognome,
            'Nome' => $this-> Nome,
            'RagioneSociale' => $this-> RagioneSociale,
            'CodiceFiscale' => $this-> CodiceFiscale,
            'PartitaIva' => $this-> PartitaIva,
            'Telefono' => $this-> Telefono,
            'Email' => $this-> Email,
            'Indirizzo' => $this-> Indirizzo,
            'Citta' => $this-> Citta,
            'CAP' => $this-> CAP,
            'Provincia' => $this-> Provincia,
            'Nazione' => $this-> Nazione,
            'Prenotazioni' => $this-> Prenotazioni
            ];
    }
}

class Prenotazione implements JsonSerializable
{
    public $IdPrenotazione;
    public $Veicolo;
    public $Modello;
    public $Targa;
    public $Parcheggio;
    public $Prezzo;
    public $Pagamento;
    public $Ingresso;
    public $Uscita;
    public $Destinazione;
    public $Chiave;

    public function jsonSerialize(){
        return[
            'IdPrenotazione'=> $this-> IdPrenotazione,
            'Veicolo'=> $this-> Veicolo,
            'Modello'=> $this-> Modello,
            'Targa'=> $this-> Targa,
            'Parcheggio'=> $this-> Parcheggio,
            'Prezzo'=> $this-> Prezzo,
            'Pagamento'=> $this-> Pagamento,
            'Ingresso'=> $this-> Ingresso,
            'Uscita'=> $this-> Uscita,
            'Destinazione'=> $this-> Destinazione,
            'Chiave' => $this-> Chiave
            ];
    }
}

$cliente1 = new Cliente();
$cliente1->Cognome = "Rossi";
$cliente1->Nome = "Marco";
$cliente1->CodiceFiscale = "RSSMRC34D43F234G";
$cliente1->Telefono = "3456789012";
$cliente1->Email = "marco.rossi@prova.com";
$cliente1->Indirizzo = "via Italia, 20";
$cliente1->Citta = "Milano";
$cliente1->Provincia = "MI";
$cliente1->Nazione = "ITALIA";

$prenotazione1Cliente1 = new Prenotazione();
$prenotazione1Cliente1 ->IdPrenotazione = "342";
$prenotazione1Cliente1 ->Veicolo = "Auto";
$prenotazione1Cliente1 ->Modello = "Opel Meriva";
$prenotazione1Cliente1 ->Targa = "BH456TF";
$prenotazione1Cliente1 ->Parcheggio = "Coperto";
$prenotazione1Cliente1 ->Prezzo = "15";
$prenotazione1Cliente1 ->Pagamento = "Contanti";
$prenotazione1Cliente1 ->Ingresso = "22/12/2017 08:30";
$prenotazione1Cliente1 ->Uscita = "27/12/2017 18:30";
$prenotazione1Cliente1 ->Destinazione = "Palermo";
$prenotazione1Cliente1 ->Chiave ="18";

$prenotazione2Cliente1 = new Prenotazione();
$prenotazione2Cliente1 ->IdPrenotazione = "216";
$prenotazione2Cliente1 ->Veicolo = "Auto";
$prenotazione2Cliente1 ->Modello = "Opel Astra";
$prenotazione2Cliente1 ->Targa = "CR654EE";
$prenotazione2Cliente1 ->Parcheggio = "Coperto";
$prenotazione2Cliente1 ->Prezzo = "12";
$prenotazione2Cliente1 ->Pagamento = "Contanti";
$prenotazione2Cliente1 ->Ingresso = "01/05/2017 08:30";
$prenotazione2Cliente1 ->Uscita = "04/05/2017 18:30";
$prenotazione2Cliente1 ->Destinazione = "Firenze";
$prenotazione2Cliente1 ->Chiave ="38";

$cliente1 ->Prenotazioni[0] = $prenotazione1Cliente1;
$cliente1 ->Prenotazioni[1] = $prenotazione2Cliente1;

$cliente2 = new Cliente();
$cliente2->Cognome = "Verdi";
$cliente2->Nome = "Roberto";
$cliente2->CodiceFiscale = "RSSMRC34D43F234G";
$cliente2->Telefono = "3456789012";
$cliente2->Email = "verdir@prova.com";
$cliente2->Indirizzo = "via Italia, 20";
$cliente2->Citta = "Milano";
$cliente2->Provincia = "MI";
$cliente2->Nazione = "ITALIA";

$prenotazione1Cliente2 = new Prenotazione();
$prenotazione1Cliente2 ->IdPrenotazione = "342";
$prenotazione1Cliente2 ->Veicolo = "Auto";
$prenotazione1Cliente2 ->Modello = "Opel Meriva";
$prenotazione1Cliente2 ->Targa = "BH456TF";
$prenotazione1Cliente2 ->Parcheggio = "Coperto";
$prenotazione1Cliente2 ->Prezzo = "15";
$prenotazione1Cliente2 ->Pagamento = "Contanti";
$prenotazione1Cliente2 ->Ingresso = "22/12/2017 08:30";
$prenotazione1Cliente2 ->Uscita = "27/12/2017 18:30";
$prenotazione1Cliente2 ->Destinazione = "Palermo";
$prenotazione1Cliente2 ->Chiave ="18";

$prenotazione2Cliente2 = new Prenotazione();
$prenotazione2Cliente2 ->IdPrenotazione = "216";
$prenotazione2Cliente2 ->Veicolo = "Auto";
$prenotazione2Cliente2 ->Modello = "Opel Astra";
$prenotazione2Cliente2 ->Targa = "CR654EE";
$prenotazione2Cliente2 ->Parcheggio = "Coperto";
$prenotazione2Cliente2 ->Prezzo = "12";
$prenotazione2Cliente2 ->Pagamento = "Contanti";
$prenotazione2Cliente2 ->Ingresso = "01/05/2017 08:30";
$prenotazione2Cliente2 ->Uscita = "04/05/2017 18:30";
$prenotazione2Cliente2 ->Destinazione = "Firenze";
$prenotazione2Cliente2 ->Chiave ="38";

$cliente2 ->Prenotazioni[0] = $prenotazione1Cliente2;
$cliente2 ->Prenotazioni[1] = $prenotazione2Cliente2;


$listaClientiJSON = array(json_encode($cliente1),json_encode($cliente2));
$listaEncoded = json_encode($listaClientiJSON);

echo $listaEncoded;

?>