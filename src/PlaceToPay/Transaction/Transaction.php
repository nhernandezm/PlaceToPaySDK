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
     * crear una tra
     * @return Array
     */
    public function createTransaction(PSETransactionRequest $PSET)
    {

        $this->auth["transaction"] = $PSET->toArray();
        $transaction = $this->soapClient->createTransaction($this->auth);   

        $transaction = json_decode(json_encode($transaction), True);
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