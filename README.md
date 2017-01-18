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
   
Crear una instancia;
 
    $placetopay = new PlaceToPay(Login,Transactional Key);
 
 Para obtener una lista de bancos:
    
     $listBanks = array();
     $placetopay = new PlaceToPay("35345435636634634634","657657567");
     $listBanks  = $placetopay->getBank()->getBankList();
    
