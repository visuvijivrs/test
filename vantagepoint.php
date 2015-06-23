<?php
//title point

$soapUrl = "http://piconnectionpoint.com/get/router.svc";
$xml_post_string = '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
 <soap:Header/>
   <!-- <Action soap:mustUnderstand="1" xmlns="http://schemas.microsoft.com/ws/2005/05/addressing/none">http://www.propertyinsight.biz/nds/lookup/property</Action>
 </soap:Header> -->
 <soap:Body>
<GetLookup xmlns="urn:propertyinsight:ndsutil">
   <Process xmlns="">
   <Credentials sourceApp="titlewatch" sourceScope="testing" >	
     <RequestorIdentity>Basic dGl0bGV3YXRjaHhtbDpBYmNkNDMyMXg=</RequestorIdentity>	
   </Credentials>	
   <Notification Method="None" Strategy="None">	
   </Notification>	
   <Transactional sourceCorrelationUID="titlewatchxml/06059/2015-06-12-" />	
 </Process>
     <LookupInfo xmlns="">
       <InquiryFIPS></InquiryFIPS>
       <InquiryState>CA</InquiryState>
       <InquiryCounty>Orange</InquiryCounty>
       <PropertyID/>
       <LastName></LastName>
       <FirstName></FirstName>
       <CorporateEstateTrustFullName></CorporateEstateTrustFullName>
       <Address>139 Dogwood Ln # 128</Address>
       <City>Aliso Viejo</City>
       <ZIP/>
     </LookupInfo>
   </GetLookup>
 </soap:Body>
</soap:Envelope>';
$headers = array(
'Content-Type: text/xml; charset="utf-8"',
'Content-Length: '.strlen($xml_post_string),
'Accept: text/xml',
'Cache-Control: no-cache',
'Pragma: no-cache',
'SOAPAction: http://www.propertyinsight.biz/nds/lookup/property'
);
$url = $soapUrl;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

echo $response;die;

?>