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
  
 Para obtener una lista de bancos:
    
     $listBanks = array();
     $placetopay = new PlaceToPay("6dd490faf9cb87a9862245da41170ff2","024h1IlD");
     $listBanks  = $placetopay->getBank()->getBankList();
    
