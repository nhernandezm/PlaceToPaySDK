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
        $bankListCache = $this->getBankListCache();
        $updateListBank = true;
        if(is_array($bankListCache)){
            if(array_key_exists("day", $bankListCache)){
                $day = $bankListCache["day"];
                $toDay = date("j");
                if($day == $toDay){
                    $updateListBank = false;
                }
            }
        }

        if($updateListBank){
            $bankList = $this->soapClient->getBankList($this->auth);
            if($bankList){
                $this->setBankListCache($bankList);
            }else{
                $bankList = $this->getBankListCache();
            }
        }else{
            $bankList = $this->getBankListCache();
        }
        return  $bankList;         
    }

    /**
     * Almacenar la lista de bancos en un archivo json
     * @param Array
     */
    public function setBankListCache($bankList)
    {
        $jsonBankString = json_encode($bankList);
        $jsonBankArray = json_decode($jsonBankString,true);
        $toDay = date("j");
        $jsonBankArray["day"] = $toDay; 
        $jsonBankString = json_encode($jsonBankArray);
        file_put_contents('bankListCache.json', $jsonBankString);
    }

    /**
     * Obtner los bancos que se esten en el json 
     * @return Array
     */
    public function getBankListCache()
    {
        $jsonBankString = file_get_contents('bankListCache.json');
        $listBankCache = json_decode($jsonBankString, true); 
        return $listBankCache;
    }
}