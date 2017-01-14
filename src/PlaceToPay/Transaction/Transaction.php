<?PHP

namespace PlaceToPay\Transaction;

use SoapClient;

class Transaction
{
	/**
     * @var SoapClient
     */
    protected $soapClient;

    /**
     * @var Array
     */
    protected $auth;

    /**
     * @var string
     */
    private $transactionID;


	/**
     * @param Array $auth
     */
    public function __construct(SoapClient $soapClient,Array $auth ) {
        $this->soapClient = $soapClient;
        $this->auth = $auth;
    }

   	/**
     * crear una tra
     * @return Array
     */
    public function createTransaction()
    {
        $PSET = array();
        $payer = array();

        $PSET["bankCode"] = "1040";
        $PSET["bankInterface"] = 0; 
        $PSET["returnURL"] = "http://186.116.70.45:8080/PlaceToPayApp/web/";
        $PSET["reference"] = "1104010448";
        $PSET["description"] = "Pago 01";
        $PSET["language"] = "es";
        $PSET["currency"] = "COP";
        $PSET["totalAmount"] = 3000;
        $PSET["taxAmount"] = 100;
        $PSET["devolutionBase"] = 16;
        $PSET["tipAmount"] = 30;

        $payer["document"] = "1104010447";
        $payer["documentType"] = "CC";
        $payer["firstName"] = "Nafer";
        $payer["lastName"] = "Hernandez";
        $payer["company"] = "PlaceToPay";
        $payer["emailAddress"] = "naferh@hotmail.com";
        $payer["address"] = "Barrio 13 de junio UR India MG L4";
        $payer["city"] = "Cartagena";
        $payer["province"] = "Bolovar";
        $payer["country"] = "Colombia";
        $payer["phone"] = "6904657";
        $payer["mobile"] = "3215678099";

        $PSET["payer"] = $payer;
        $PSET["ipAddress"] = "186.116.70.45";
        $PSET["userAgent"] = "";

        $$this->auth["transaction"] = $PSET;
        $transaction = $this->soapClient->createTransaction($parametros);   

        return  $transaction;  

    }

    /**
     * Retorna el id de transacciòn
     * @return string
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * Actualizar el Id de la transacciòn
     * @param string
     */
    public function setTransactionID($transactionID)
    {
        $this->transactionID = $transactionID;
    }
}