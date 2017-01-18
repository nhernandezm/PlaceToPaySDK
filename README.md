# PlaceToPaySDK

Crear y ver estados de transacciones para PlaceToPay.

## Instalación

Agrega "placetopay/placetopaysdk": "dev-master" a tu archivo composer.json.

    {
        "require": {
            "placetopay/placetopaysdk": "dev-master"
        }
    }
    
    O 
    
    composer require placetopay/placetopaysdk=dev-master
    
## Uso
   
Crear una instancia
 
    $placetopay = new PlaceToPay(Login,Transactional Key);
 
 Otener una lista de bancos
    
     $listBanks = array();
     $placetopay = new PlaceToPay("35345435636634634634","657657567");
     $listBanks  = $placetopay->getBank()->getBankList();
     
 Crear una Transacciòn 
 
        $placetopay = new PlaceToPay("35345435636634634634","657657567");
	$payer = $placetopay->newPerson();
	$buyer = $placetopay->newPerson();

	$PSETR = $placetopay->newPSETR();	
	$documentPayer = $payerData["document"];
	$payer->setDocument($payerData["document"]);
	$payer->setDocumentType($payerData["documentType"]);
	$payer->setFirstName($payerData["firstName"]);
	$payer->setLastName($payerData["lastName"]);
	$payer->setCompany($payerData["company"]);
	$payer->setEmailAddress($payerData["emailAddress"]);
	$payer->setAddress($payerData["address"]);
	$payer->setCity($payerData["city"]);
	$payer->setProvince($payerData["province"]);
	$payer->setCountry($payerData["country"]);
	$payer->setPhone($payerData["phone"]);
	$payer->setMobile($payerData["mobile"]);

	if($payerData["document"] == $buyerData["document"] ){ 
		$PSETR->setPayer($payer);
		$documentPayer = $payerData["document"];
		$documentBuyer = $payerData["document"];
	}else{
		$documentBuyer = $buyerData["document"];
		$buyer->setDocument($buyerData["document"]);
		$buyer->setDocumentType($buyerData["documentType"]);
		$buyer->setFirstName($buyerData["firstName"]);
		$buyer->setLastName($buyerData["lastName"]);
		$buyer->setCompany($buyerData["company"]);
		$buyer->setEmailAddress($buyerData["emailAddress"]);
		$buyer->setAddress($buyerData["address"]);
		$buyer->setCity($buyerData["city"]);
		$buyer->setProvince($buyerData["province"]);
		$buyer->setCountry($buyerData["country"]);
		$buyer->setPhone($buyerData["phone"]);
		$buyer->setMobile($buyerData["mobile"]);
		$PSETR->setPayer($buyer);
	}
	$PSETR->setBankCode($bankCode);
	$PSETR->setBankInterface($typePerson);
	$PSETR->setReturnURL("url a la cul redirecciona el banco");
	$PSETR->setReference("1104010448");
	$PSETR->setDescription("Pago test");
	$PSETR->setTotalAmount(3000);
	$PSETR->setTaxAmount(100);
	$PSETR->setDevolutionBase(16);
	$PSETR->setTipAmount(30);
	$PSETR->setIpAddress($ipAddressClient);
	$PSETR->setUserAgent($userAgent);
	
	$transaction  = $placetopay->getTransaction()->createTransaction($PSETR);
