<?

class Admin  {
    private $table_name = 'admin';
    private $DB;
    private $secretKey = "1234@1234"; 

    public function  __construct($DB)
    {
        $this->DB = $DB;
    }


    // Lấy ra thông tin admin theo email
    public function getInfoByEmail($email) {
        $sql = "SELECT * FROM $this->table_name WHERE adm_email = '$email'";
        return $this->DB->query($sql)->getOne();
    }

    // Login 
    public function login($email, $password) {
        $row = $this->getInfoByEmail($email);
        if(!$row) {
            return false;
        }
        $pwd_encoded    =   $this->generatePassword($password, $row['adm_random']);
        if($pwd_encoded == $row['adm_password']) {
              // Tạo payload của JWT
              $payload = array(
                "iss" => "user",   // Người phát hành (Issuer)
                "aud" => "user",   // Người nhận (Audience)
                "iat" => time(),                   // Thời gian phát hành (Issued at)
                "nbf" => time(),                   // Không được chấp nhận trước thời gian này (Not before)
                "exp" => time() + (60*60),         // Thời gian hết hạn (Expiration)
                "sub" => $row['adm_id'],              // ID người dùng (Subject)
                "user" => array(
                    "adm_id" => $row['adm_id'],      // ID người dùng
                    "adm_email" => $row['adm_email'],  // Email người dùng
                    "adm_boss" => $row['adm_boss']  // Kiểu
                )    
            );

            // Tạo header của JWT
            $header = array(
                'alg' => 'HS256',   // Thuật toán mã hóa (Algorithm)
                'typ' => 'JWT'      // Loại token
            );

            // Tạo JWT
            $jwt = $this->createJWT($header, $payload, $this->secretKey);
           return array("jwt" => $jwt, "info" => $row);
        } else {
            return false;
        }
    }

    function generatePassword($password, $adm_random)
    {
        return md5($password . '|' . SECRET_TOKEN . $adm_random);
    }

    function base64UrlEncode($data) {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }
    
    function createJWT($header, $payload, $secret) {
        // Mã hóa header và payload thành Base64URL
        $headerEncoded = $this->base64UrlEncode(json_encode($header));
        $payloadEncoded = $this->base64UrlEncode(json_encode($payload));
    
        // Tạo chữ ký sử dụng HS256
        $signature = hash_hmac('SHA256', "$headerEncoded.$payloadEncoded", $secret, true);
        $signatureEncoded = $this->base64UrlEncode($signature);
    
        // Kết hợp header, payload và signature thành JWT
        return "$headerEncoded.$payloadEncoded.$signatureEncoded";
    }

}