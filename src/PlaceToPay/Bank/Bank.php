<?PHP

namespace PlaceToPay\Bank;

class Bank
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
     * @param Array $auth
     */
    public function __construct(SoapClient $soapClient,Array $auth ) {
        $this->soapClient = $soapClient;
        $this->auth = $auth;
    }

   	/**
     * @return Array
     */
    public function getBankList()
    {
      return $this->soapClient->getBankList($this->auth);
    }
}