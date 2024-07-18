<?php

namespace Review\Affiliate;

final class Awin
{
    public int|null $affiliateId = null; // 1679149 - b3d
    public int|null $advertiserId = null; // 17652 - nike
    public string|null $source = null;
    private string $url = "https://www.awin1.com/cread.php?awinmid={{advertiserId}}&awinaffid={{affiliateId}}&campaign={{param_source}}&clickref={{param_a}}&clickref2={{param_b}}&clickref3={{param_c}}&clickref4={{param_d}}&clickref5={{param_e}}&clickref6={{param_f}}&ued={{url_destination}}";

    public function __construct($advertiserId = null, $affiliateId = null, $source = null)
    {
        if ($advertiserId) :
            $this->advertiserId = $advertiserId;
        endif;

        if ($affiliateId) :
            $this->affiliateId = $affiliateId;
        endif;
    }

    public function getUrl()
    {
        return strtr($this->url, [
            "{{advertiserId}}" => $this->advertiserId,
            "{{affiliateId}}" => $this->affiliateId,
            "{{param_source}}" => $this->source,
            /*"{{param_a}}" => "",
            "{{param_b}}" => "",
            "{{param_c}}" => "",
            "{{param_d}}" => "",
            "{{param_e}}" => "",
            "{{param_f}}" => "",
            "{{url_destination}}" => "",*/
        ]);
    }

}
