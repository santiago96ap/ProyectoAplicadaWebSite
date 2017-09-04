<?php
    class ProductModel {
        protected $rsa, $publicKey, $privateKey, $client;

        public function __construct() {
            include('public/rsa/Crypt/RSA_XML.php');
            require_once 'public/rsa/nusoap/lib/nusoap.php';
            $this->publicKey = "<RSAKeyValue><Modulus>2MMwdZzt9uJi7rwEzTk5YiDT/ihLRUxpHjBB0zSOlfXJUHUKWHB/DfANbVXWd8ryC0nI+aWii8J4Qgweglu79Q/7uTJ0al8YXs8XH93JskY5cZuObuY9E768cKD/yxCP7M/AS3gHRVV6TQNab2Dbs64Glt9lY9uqjxL3UDqALfSRDgnV1qE1WCwslnsvgrJ6ZLqYRrg3eeflBNV1hHXRNNoyMRgsRn8cqf8365ugsDXZRzispCNrQccdC0bFjU8nfivAaElvrIenWJMfb7iAy0Bw2DwZg/wxDhNXrYTUK/wrkqkIDqQhIiR1RkBTA+emwqASJPdsgFDA+o0jlLcrjQ==</Modulus><Exponent>AQAB</Exponent></RSAKeyValue>";
            $this->privateKey = "<xml><RSAKeyValue><Modulus>2MMwdZzt9uJi7rwEzTk5YiDT/ihLRUxpHjBB0zSOlfXJUHUKWHB/DfANbVXWd8ryC0nI+aWii8J4Qgweglu79Q/7uTJ0al8YXs8XH93JskY5cZuObuY9E768cKD/yxCP7M/AS3gHRVV6TQNab2Dbs64Glt9lY9uqjxL3UDqALfSRDgnV1qE1WCwslnsvgrJ6ZLqYRrg3eeflBNV1hHXRNNoyMRgsRn8cqf8365ugsDXZRzispCNrQccdC0bFjU8nfivAaElvrIenWJMfb7iAy0Bw2DwZg/wxDhNXrYTUK/wrkqkIDqQhIiR1RkBTA+emwqASJPdsgFDA+o0jlLcrjQ==</Modulus><Exponent>AQAB</Exponent><P>2t44Cs96qiQnTPmrIWtknBQBtvEqapuTKGAlZYUL9TtUsahHFoIasT0Sh7s473NJLhlYBiY/DqJCMfBXirWi/jYF1SkaTLrHafViUT7nWdKshkKWk+F5QUWafYqKpuS0yvWAwboK8h9HDBdzBvKJToPCRfhxmR634ILReoHoi7M=</P><Q>/YmFhL3zcMZAphJn4Pk19vznhx6Efi+m1kk94wvMpMGE33FMxhrS+AOrXcTuSSlQRMpDJyK4eoZA7k4ywcy2qvVBo8kP3v9aA+tV7CSy7dax2Uy/uU/g+B5i8es7YidumD3Y3+uax96XLKk/JqDR4GYTsEoDiDrBpQvhOUDQy78=</Q><DP>Z1ggPDKFqArUJ8uH24rbAbuMp7YuIhJ9pMXpQotU/yFZt11O27jpI6FDu6VSl/Xmqwa6goTSp3VELlJe85cadFBL5r+2tF5JRKXiG5zJHqeUYPzWHtOLLp/P99FP8Mfy+hZ8Cn1vJ65PHM2BudkRrmoWdHWAJh3UEwWSJfdrN3M=</DP><DQ>4/Y4tQfN0UKQckHuYNvyZ6cxzc3kt0jFK7sjB/heAm11uSo4K4+GzTUPafpdfi7FW3S5OIEBejkoPJzXCmW0gLaQVGG+AXV7TDbXRMIil7MIqidV45ss3isEMByfgjuONxi03XEL9FXxe1iZzXOgAbIGVeXWkzCxWGL8GOxsUCU=</DQ><InverseQ>J7w9o8/ukZMRuB/KQ3LP3W73E+LFVvXtH48sFzhqwemrvqE6xLHxEsyxVuvtelxjvqENbjTEZA9JDRD0pMvQbjCYUtPLLRPNm5GucY/rRczoBHCmh0cv/8zZDqlmMZcO8ef+eH7W4j/juOkulvdz4n3iX8oio8Hg4yTkj4AWqfE=</InverseQ><D>eHOuwAyeZ6zRkRxGBsyfyJm5c+hsO2wEldP3ICh6e3aDkgQX5aFN2S7mJzWl4heSfRdZaPDT7Jn6PamCYqobPkjNdtJEwr9pSXYGwZx7cmd3kFwCwDmNAyXgjS3KNstTTyL7FnTyhWLEfXs5i97k92njG3+0VdNBahP9/kUj6WSRm0eTXyXYr9p0pybQu4JI99jEKwUvBf54naRKum1IvAQNgIXzxqSe34R/Cls7YnpsozpoBP/Tunp/Rj4NfTuCIQnddBRXq6GGmcW2C0nYMa3wMPQRoHGEsK1Px3psYZwTbHMw03NbWVr2Urj0sSA9kOhuqmYA4OqFiJ9vt983OQ==</D></RSAKeyValue></xml>";
            $this->rsa = new Crypt_RSA_XML();
            $this->client = new nusoap_client("http://10.234.222.227:8095/WebServiceLoginSoap.asmx?WSDL", true);
        }//construct
        
        public function getProducts($category){
            $this->rsa->loadKey($this->privateKey);
            $categoryEncrypted = base64_encode($this->rsa->encrypt($category));
            $param = array('category' => $category);
            $result = $this->client->call('getProducts', $param);
            $array = json_decode($result['getProductsResult'], true);
            $i = 0;
            
            for($i = 0; $i < count($array); $i++){
                $array[$i]['name'] = $this->rsa->decrypt(base64_decode($array[$i]['name']));
                $array[$i]['category'] = $this->rsa->decrypt(base64_decode($array[$i]['category']));
                $array[$i]['priceS'] = $this->rsa->decrypt(base64_decode($array[$i]['priceS']));
                $array[$i]['quantityS'] = $this->rsa->decrypt(base64_decode($array[$i]['quantityS']));
                $array[$i]['status'] = $this->rsa->decrypt(base64_decode($array[$i]['status']));
                $array[$i]['path'] = $this->rsa->decrypt(base64_decode($array[$i]['path']));
            }//for
            
            return $array;
        }//getProducts.
    }//ProductModel
?>

