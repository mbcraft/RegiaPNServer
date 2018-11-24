<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 17/05/16
 * Time: 11.51
 */

namespace App\Http\Controllers\Api\v1_0;

use App\Models\Auth\User;
use Mbcraft\Cryptography\Sca0\Php\SCA0Impl;
use Mbcraft\Piol\StringBuffer;
use Mbcraft\Piol\Utils\JavaXmlPropertiesUtils;

use Illuminate\Http\Request;
use Response;

class AccessController extends ApiController
{
    private function encodeFtpUsernameAndPassword() {
        $sca0impl = new SCA0Impl();

        $entries = config("ftp");

        $data = JavaXmlPropertiesUtils::saveToString($entries);

        $sb_in = new StringBuffer($data);
        $sb_out = new StringBuffer();

        $sca0impl->encrypt($sb_in,$sb_out);

        $sb_out->reset();

        return "".base64_encode($sb_out);
    }

    public function postGetFtpLoginTokens(Request $req) {

        $email = $req->get(self::API_EMAIL_KEY);
        $api_password = $req->get(self::API_API_PASSWORD_KEY);

        try {

            $uu = User::where('email', $email)->where('api_password',$api_password)->firstOrFail();

            $has_permissions = $uu->isSysAdmin() || $uu->isPlaylistEditor();

            if ($has_permissions) {

                \Log::debug("Access granted for user : " . $uu->email);

                $preparedResponse = $this->encodeFtpUsernameAndPassword();

                return Response::make($preparedResponse, '200')->header('Content-Type', 'text/plain');

            } else {
                \Log::debug("Access denied for user : " . $email);

                return Response::make("FORBIDDEN", '404')->header('Content-Type', 'text/plain');
            }

        }
        catch (\Exception $ex) {
            \Log::debug($ex->getMessage());
            \Log::debug("Access denied for user : " . $email);

            return Response::make("FORBIDDEN", '404')->header('Content-Type', 'text/plain');
        }
    }
}