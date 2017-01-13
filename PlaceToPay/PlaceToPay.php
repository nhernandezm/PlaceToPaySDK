<?PHP

namespace PlaceToPay;

/**
 * This class is the base class for the PlaceToPay SDK.
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
    private $tranKey;  

    /**
     * @var SoapClient
     */
    private $seed;

    /**
     * @var SoapClient
     */
    private $soapClient;


    /**
     * @param string                 $apiKey
     * @param string                 $tranKey
     * @param string                 $urlService
     */
    public function __construct(
        $apiKey,
        $tranKey,
        $urlService = 'https://test.placetopay.com/soap/pse/?wsdl',
    ) {
        $this->apiKey = $apiKey;
        $this->seed =  date('c');  
        $this->tranKey = sha1($this->seed. $tranKey );

        $this->soapClient = new SoapClient($urlService, $this->getAuth());
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


    /**
     * @return Array
     */
    public function getBankList()
    {
      return $this->soapClient->getBankList($this->getAuth());
    }


}






/*

$login = "6dd490faf9cb87a9862245da41170ff2";
$tranKey = "024h1IlD";
$seed = date('c');
$tranKey = sha1( $seed. $tranKey );

$servicio = "https://test.placetopay.com/soap/pse/?wsdl"; //url del servicio
$parametros=array(); //parametros de la llamada

$parametros['auth']= array(
	"login"=>$login,
	"tranKey"=>$tranKey,
	"seed"=>$seed
);


$client = new SoapClient($servicio, $parametros);
//var_dump($client);

$result = $client->getBankList($parametros);//llamamos al métdo que nos interesa con los parámetros
var_dump($result);
print_r($result);
*/