<?PHP

namespace PlaceToPay\Entity;


class Person
{

    /**
     * @var string
     */
    private $document;

    /**
     * @var string
     */
    private $documentType;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $province;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $mobile;

    /**
     * Retorna un array con los datos de la persona
     * @return Array
     */
    public function toArray(){
        $personArray = array();

        $personArray["document"] = $this->getDocument();
        $personArray["documentType"] = $this->getDocumentType();
        $personArray["firstName"] = $this->getFirstName();
        $personArray["lastName"] = $this->getLastName();
        $personArray["company"] = $this->getCompany();
        $personArray["emailAddress"] = $this->getEmailAddress();
        $personArray["address"] = $this->getAddress();
        $personArray["city"] = $this->getCity();
        $personArray["province"] = $this->getProvince();
        $personArray["country"] = $this->getCountry();
        $personArray["phone"] = $this->getPhone();
        $personArray["mobile"] = $this->getMobile();

        return $personArray;
    }

    /**
     * Actualizar el nùmero de identificaciòn de la persona
     * @param string
     */
    public function setDocument($document){
        $this->document = $document;
    }

     /**
     * Retorna el el nùmero de identificaciòn de la persona
     * @return string
     */
    public function getDocument(){
        return $this->document;
    }

    /**
     * Actualizar el tipo de identificaciòn de la persona
     * @param string
     */
    public function setDocumentType($documentType){
        $this->documentType = $documentType;
    }

     /**
     * Retorna el tipo de identificaciòn de la persona
     * @return string
     */
    public function getDocumentType(){
        return $this->documentType;
    }

    /**
     * Actualizar el nombre  de la persona
     * @param string
     */
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

     /**
     * Retorna el nombre de la persona
     * @return string
     */
    public function getFirstName(){
        return $this->firstName;
    }
    /**
     * Actualizar el apellido de la persona
     * @param string
     */
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

     /**
     * Retorna el apellido de la persona
     * @return string
     */
    public function getLastName(){
        return $this->lastName;
    }

    /**
     * Actualizar la compañia de la persona
     * @param string
     */
    public function setCompany($company){
        $this->company = $company;
    }

     /**
     * Retorna la compañia de la persona
     * @return string
     */
    public function getCompany(){
        return $this->company;
    }

    /**
     * Actualizar el email de la persona
     * @param string
     */
    public function setEmailAddress($emailAddress){
        $this->emailAddress = $emailAddress;
    }

     /**
     * Retorna el email de la persona
     * @return string
     */
    public function getEmailAddress(){
        return $this->emailAddress;
    }

    /**
     * Actualizar la direcciòn de la persona
     * @param string
     */
    public function setAddress($address){
        $this->address = $address;
    }

     /**
     * Retorna la direcciòn de la persona
     * @return string
     */
    public function getAddress(){
        return $this->address;
    }

    /**
     * Actualizar la ciudad de la persona
     * @param string
     */
    public function setCity($city){
        $this->city = $city;
    }

     /**
     * Retorna la ciudad de la persona
     * @return string
     */
    public function getCity(){
        return $this->city;
    }

    /**
     * Actualizar el departamento de la persona
     * @param string
     */
    public function setProvince($province){
        $this->province = $province;
    }

     /**
     * Retorna la departamneto de la persona
     * @return string
     */
    public function getProvince(){
        return $this->province;
    }
    /**
     * Actualizar el pais de la persona
     * @param string
     */
    public function setCountry($country){
        $this->country = $country;
    }

     /**
     * Retorna la country de la persona
     * @return string
     */
    public function getCountry(){
        return $this->country;
    }

    /**
     * Actualizar el telefono fijo de la persona
     * @param string
     */
    public function setPhone($phone){
        $this->phone = $phone;
    }

     /**
     * Retorna el phone de la persona
     * @return string
     */
    public function getPhone(){
        return $this->phone;
    }

    /**
     * Actualizar el nùmero de celular de la persona
     * @param string
     */
    public function setMobile($mobile){
        $this->mobile = $mobile;
    }

     /**
     * Retorna el nùmero de celular de la persona
     * @return string
     */
    public function getMobile(){
        return $this->mobile;
    }
}