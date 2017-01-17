<?PHP

namespace PlaceToPay\Transaction;

use SoapClient;
use PlaceToPay\Entity\Person;
use PlaceToPay\Entity\PSETransactionRequest;

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
     * crear una tracsacciòn y retornar los datos de la transacciòn creada
     * @return Array
     */
    public function createTransaction(PSETransactionRequest $PSET)
    {

        $this->auth["transaction"] = $PSET->toArray();
        $transaction = $this->soapClient->createTransaction($this->auth);   

        $transaction = json_decode(json_encode($transaction), True);

        if(array_key_exists("createTransactionResult", $transaction)){
            if(array_key_exists("transactionID", $transaction["createTransactionResult"])){
                $this->setTransactionID($transaction["createTransactionResult"]["transactionID"]);
            }
        }

        return  $transaction;
    }


    /**
     * Retorna la información del estado de la transacción.
     * @param transactionID string
     * @return Array
     */
    public function getTransactionInformation($transactionID)
    {
        $transactionIDaux = null;
        if($transactionID){
            $transactionIDaux = $transactionID;
        }else{
            $transactionIDaux = $getTransactionID();
        }
        if($transactionIDaux){
            $para = array();
            $para["auth"] = $this->auth;
            $para["transactionID"] = $transactionID;
            $transactionInfo = $this->soapClient->getTransactionInformation($para);
            $transactionInfo = json_decode(json_encode($transactionInfo), True);
        }else{
            $transactionInfo = array("message"=>"No se encontro el id de la transacciòn");
        }
        return  $transactionInfo;
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