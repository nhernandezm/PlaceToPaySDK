<?PHP

namespace PlaceToPay\Bank;

use SoapClient;

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
     * Obtener la lista de bancos
     * @return Array
     */
    public function getBankList()
    {
        $bankList = $this->soapClient->getBankList($this->auth);
        if($bankList){
            $this->setBankListCache($bankList);
        }else{
            $bankList = $this->getBankListCache();
        }
        return  $bankList;         
    }

    /**
     * @param Array
     */
    public function setBankListCache($bankList)
    {
        $jsonBankString = json_encode($bankList);
        file_put_contents('bankListCache.json', $jsonBankString);
    }

    /**
     * @return Array
     */
    public function getBankListCache()
    {
        $jsonBankString = file_get_contents('bankListCache.json');
        $listBankCache = json_decode($jsonBankString, true); 
        return $listBankCache;
    }
}