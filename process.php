<?php

function process($MERCHANT_TRANSACTION_ID,
$ENDPOINT, $PASSWORD,$TIMESTAMP)
{
 
    $bod = 
    '<soapenv:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
     xmlns:xsd="http://www.w3.org/2001/XMLSchema"
      xmlns:tns="tns:ns" 
      xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"
     xmlns:soapenc="http://schemas.xmlsoap.org/soap/encoding/">
     <soapenv:Header><tns:CheckOutHeader>
     <MERCHANT_ID>898998</MERCHANT_ID>
     <PASSWORD>'.$PASSWORD.'</PASSWORD>
     <TIMESTAMP>'.$TIMESTAMP.'</TIMESTAMP>
     </tns:CheckOutHeader></soapenv:Header>
     <soapenv:Body>
     <tns:transactionConfirmRequest>
     <TRX_ID>?</TRX_ID>
     <MERCHANT_TRANSACTION_ID>'.$MERCHANT_TRANSACTION_ID.
     '</MERCHANT_TRANSACTION_ID>
     </tns:transactionConfirmRequest>
     </soapenv:Body></soapenv:Envelope>';

/// Your SOAP XML needs to be in this variable

}


?>