<?php 
function getLastURLSegment($http_reffer) {
    if (isset($http_reffer) and $http_reffer != ''){
        $urlArray 		= parse_url($http_reffer, PHP_URL_PATH);
        $segments 	 	= explode('/', $urlArray);
        return $segments[count($segments) - 1];
    } else 
        return false;
}


