<?PHP

namespace PlaceToPay;
use SoapClient;
use PlaceToPay\Bank\Bank;
use PlaceToPay\Transaction\Transaction;

/**
 * Controller is a simple implementation of a Controller.
 *
 * It provides methods to common features needed in controllers.
 *
 * @author Fabien Potencier <naferh@hotmail.com>
 */
class PlaceToPay
{

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var string
     */
    protected $tranKey;  

    /**
     * @var SoapClient
     */
    protected $seed;

    /**
     * @var SoapClient
     */
    protected $soapClient;

    /**
     * @var Bank
     */
    private $bank;

    /**
     * @var Transaction
     */
    private $transaction;


    /**
     * @param string $apiKey
     * @param string $tranKey
     * @param string $urlService
     */
    public function __construct(
        $apiKey,
        $tranKey,
        $urlService = 'https://test.placetopay.com/soap/pse/?wsdl'
    ) {
        $this->apiKey = $apiKey;
        $this->seed =  date('c');  
        $this->tranKey = sha1($this->seed. $tranKey);
        $auth = $this->getAuth();

        $this->soapClient = new SoapClient($urlService, $auth);
        $this->bank = new Bank($this->soapClient,$auth);
        $this->transaction = new Transaction($this->soapClient,$auth);

    }

    /**
     * Octner los datos para poder autenticarce al llamar una funciòn del servicio.
     * @return Array con los datos de autenticaciòn
     */
    public function getAuth()
    {
        $auth = array();
        $auth['auth']= array(
            "login"=>$this->apiKey,
            "tranKey"=>$this->tranKey,
            "seed"=>$this->seed
        );
        return $auth;
    }

    public function getBank(){
        return $this->bank;
    }

    public function getTransaction(){
        return $this->transaction;
    }
}