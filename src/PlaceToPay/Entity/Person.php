<?PHP

namespace PlaceToPay\Entity;


class Person
{

    /**
     * Número de identificación de la persona
     * @var string
     */
    private $document;

    /**
     *  Tipo de documento de identificación de la persona [CC, CE, TI, PPN].
     *  CC = Cédula de ciudanía colombiana
     *  CE = Cédula de extranjería
     *  TI = Tarjeta de identidad
     *  PPN = Pasaporte
     *  NIT = Número de identificación tributaria
     *  SSN = Social Security Number
     * @var string
     */
    private $documentType;

    /**
     * Nombres
     * @var string
     */
    private $firstName;

    /**
     * Apellidos
     * @var string
     */
    private $lastName;

    /**
     * Nombre de la compañía en la cual labora o representa
     * @var string
     */
    private $company;

    /**
     * Correo electrónico
     * @var string
     */
    private $emailAddress;

    /**
     * Dirección postal completa
     * @var string
     */
    private $address;

    /**
     * Nombre de la ciudad coincidente con la dirección
     * @var string
     */
    private $city;

    /**
     * Nombre de la provincia o departamento coincidente con la dirección
     * @var string
     */
    private $province;

    /**
     * Código internacional del país que aplica a la
     * dirección física acorde a ISO 3166-1,mayúscula sostenida.
     * @var string
     */
    private $country;

    /**
     * Número de telefonía fija
     * @var string
     */
    private $phone;

    /**
     * Número de telefonía móvil o celular
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