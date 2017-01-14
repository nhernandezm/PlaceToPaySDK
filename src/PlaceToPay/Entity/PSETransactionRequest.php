<?PHP

namespace PlaceToPay\Entity;

use PlaceToPay\Entity\Person


class PSETransactionRequest
{

    /**
    * Código de la entidad financiera con la cual
    * realizar la transacción
    * @var string
    */
    private $bankCode;

    /**
    * Tipo de interfaz del banco a desplegar 
    * [0 = PERSONS, 1 = EMPRESAS]
    * @var string
    */
    private $bankInterface;

    /**
    * URL de retorno especificada para la entidad financiera
    * @var string
    */
    private $returnURL;

    /**
    * Referencia única de pago
    * @var string
    */
    private $reference;

    /**
    * Descripción del pago
    * @var string
    */
    private $description;

    /**
    * Idioma esperado para las transacciones
    * acorde a ISO 631-1, mayúscula sostenida
    * @var string
    */
    private $language;

    /**
    * Moneda a usar para el recaudo acorde a ISO 4217
    * @var string
    */
    private $currency;

    /**
    * Valor total a recaudar
    * @var double
    */
    private $totalAmount;

    /**
    * Discriminación del impuesto aplicado
    * @var double
    */
    private $taxAmount;

    /**
    * Base de devolución para el impuesto
    * @var double
    */
    private $devolutionBase;

    /**
    * Propina u otros valores exentos de impuesto
    * (tasa aeroportuaria) y que deben agregarse al valor total a pagar
    * @var double
    */
    private $tipAmount;

    /**
    * Dirección IP desde la cual realiza la transacción el pagador
    * @var double
    */
    private $ipAddress;

    /**
    * Agente de navegación utilizado por el pagador
    * @var double
    */
    private $userAgent;

    /**
    * Información del pagador
    * @var Person
    */
    private $payer;

    /**
    * Información del comprador
    * @var Person
    */
    private $buyer;

    /**
    * Información del receptor
    * @var Person
    */
    private $shipping;

    /**
    * Datos adicionales para ser almacenados con la transacción
    * @var Array
    */
    private $additionalData;


    /**
     * Retorna un array con la PSETransactionRequest
     * @return Array
     */
    public function toArray(){
        $PSET = array();

        $PSET["bankCode"] = $this->getBankCode(); 
        $PSET["bankInterface"] = $this->getBankInterface();
        $PSET["returnURL"] = $this->getReturnURL(); 
        $PSET["reference"] = $this->getReference(); 
        $PSET["description"] = $this->getDescription(); 
        $PSET["language"] = $this->getLanguage(); 
        $PSET["currency"] = $this->getCurrency(); 
        $PSET["totalAmount"] = $this->getTotalAmount(); 
        $PSET["taxAmount"] = $this->getTaxAmount(); 
        $PSET["devolutionBase"] = $this->getDevolutionBase(); 
        $PSET["tipAmount"] = $this->getTipAmount(); 
        $PSET["ipAddress"] = $this->getIpAddress(); 
        $PSET["userAgent"] = $this->getUserAgent();

        $payer = $this->getPayer(); 
        $buyer = $this->getBuyer(); 
        $shipping = $this->getShipping(); 
        if($payer){
            $PSET["payer"] = $payer->toArray();
        }
        if($buyer){
            $PSET["buyer"] = $buyer->toArray(); 
        }
        if($shipping){
            $PSET["shipping"] = $shipping->toArray();    
        }

        return $PSET;
    }





    /**
     * Actualizar el còdigo del banco
     * @param string
     */
    public function setBankCode($bankCode){
        $this->bankCode = $bankCode;
    }

    /**
     * Retorna el còdigo del banco
     * @return string
     */
    public function getBankCode(){
        return $this->bankCode;
    }

    /**
     * Actualizar el tipo de interfaz a desplegar
     * @param string
     */
    public function setBankInterface($bankInterface){
        $this->bankInterface = $bankInterface;
    }

    /**
     * Retorna el tipo de interfaz a desplegar
     * @return string
     */
    public function getBankInterface(){
        return $this->bankInterface;
    }

    /**
     * Actualizar url de retorno
     * @param string
     */
    public function setReturnURL($returnURL){
        $this->returnURL = $returnURL;
    }

    /**
     * Retorna url de retorno
     * @return string
     */
    public function getReturnURL(){
        return $this->returnURL;
    }

    /**
     * Actualizar la referencia de pago
     * @param string
     */
    public function setReference($reference){
        $this->reference = $reference;
    }

    /**
     * Retorna la referencia de pago
     * @return string
     */
    public function getReference(){
        return $this->reference;
    }

    /**
     * Actualizar la descripciòn
     * @param string
     */
    public function setDescription($description){
        $this->description = $description;
    }

    /**
     * Retorno la descripciòn
     * @return string
     */
    public function getDescription(){
        return $this->description;
    }

    /**
     * Actualizar el lenguaje
     * @param string
     */
    public function setLanguage($language){
        $this->language = $language;
    }

    /**
     * Retorna el lenguaje
     * @return string
     */
    public function getLanguage(){
        return $this->language;
    }

    /**
     * Actualizar moneda a usar
     * @param string
     */
    public function setCurrency($currency){
        $this->currency = $currency;
    }

    /**
     * Retorna moneda a usar
     * @return string
     */
    public function getCurrency(){
        return $this->currency;
    }

    /**
     * Actualizar el valor a recaudar
     * @param double
     */
    public function setTotalAmount($totalAmount){
        $this->totalAmount = $totalAmount;
    }

    /**
     * Retorna el valor a recaudar
     * @return double
     */
    public function getTotalAmount(){
        return $this->totalAmount;
    }

    /**
     * Actualizar el valor del impuesto
     * @param double
     */
    public function setTaxAmount($taxAmount){
        $this->taxAmount = $taxAmount;
    }

    /**
     * Retorna el valor del impuesto
     * @return double
     */
    public function getTaxAmount(){
        return $this->taxAmount;
    }

    /**
     * Actualizar base de devoluciòn
     * @param double
     */
    public function setDevolutionBase($devolutionBase){
        $this->devolutionBase = $devolutionBase;
    }

    /**
     * Retorna la base de devoluciòn
     * @return double
     */
    public function getDevolutionBase(){
        return $this->devolutionBase;
    }

    /**
     * Actualizar propina o otros valores
     * @param double
     */
    public function setTipAmount($tipAmount){
        $this->tipAmount = $tipAmount;
    }

    /**
     * Retorna propina o otros valores
     * @return double
     */
    public function getTipAmount(){
        $this->tipAmount;
    }

    /**
     * Actualizar direcciòn Ip
     * @param string
     */
    public function setIpAddress($ipAddress){
        $this->ipAddress = $ipAddress;
    }

    /**
     * Retorna direcciòn Ip
     * @return string
     */
    public function getIpAddress($ipAddress){
        return $this->ipAddress;
    }


    /**
     * Actualizar agente de navegaciòn
     * @param string
     */
    public function setUserAgent($userAgent){
        $this->userAgent = $userAgent;
    }

    /**
     * Retorna el agente de avegaciòn
     * @return string
     */
    public function getUserAgent(){
        return $this->userAgent;
    }    


    /**
     * Actualizar el pagador
     * @param Person
     */
    public function setPayer($payer){
        $this->payer = $payer;
    }

    /**
     * Retorna el pagador
     * @return Person
     */
    public function getPayer(){
        return $this->payer;
    }

    /**
     * Actualizar el comprador
     * @param Person
     */
    public function setBuyer($buyer){
        $this->buyer = $buyer;
    }

    /**
     * Retorna el comprador
     * @return Person
     */
    public function getBuyer(){
        return $this->buyer;
    }


    /**
     * Actualizar el receptor
     * @param Person
     */
    public function setShipping($shipping){
        $this->shipping = $shipping;
    }

    /**
     * Retorna el receptor
     * @return Person
     */
    public function getShipping(){
        return $this->shipping;
    }

    /**
     * Actualizar datos adicionales
     * @param Array
     */
    public function setAdditionalData($additionalData){
        $this->additionalData = $additionalData;
    }

    /**
     * Retorna datos adicionales
     * @return Array
     */
    public function getAdditionalData(){
        return $this->additionalData;
    }
} 