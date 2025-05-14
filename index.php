<?php
/*This Source Code Form is subject to the terms of the Mozilla Public
  License, v. 2.0. If a copy of the MPL was not distributed with this
  file, You can obtain one at http://mozilla.org/MPL/2.0/.
  This Source Code Form is "Incompatible With Secondary Licenses", as
  defined by the Mozilla Public License, v. 2.0.*/
$pathname = parse_url((isset($_SERVER["HTTPS"]) ? "https" : "http") . "://{$_SERVER["HTTP_HOST"]}{$_SERVER["REQUEST_URI"]}", PHP_URL_PATH);
if ((empty($pathname) != true ? strlen($pathname) < 2 : true) == true)
    $pathname = "/index";
else if (str_ends_with($pathname, "/") == true)
    $pathname .= "index";
$routes = (__DIR__ . DIRECTORY_SEPARATOR . "routes" . DIRECTORY_SEPARATOR);
$file = urldecode($routes . substr(str_replace("/", DIRECTORY_SEPARATOR, $pathname), 1));
$script = "$file.php";
if (file_exists($script) == true) {
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $base = ($routes . "index.php");
        $pages = [(function (string $value): string {
            return substr($value, 0, strrpos($value, ".php"));
        })(substr($script, strlen($routes)))];
        if ($base == $script) $pages = [
            "realiste",
            "viva-pinata",
            "a-propos-de-nous",
            "nous-contacter"
        ];
        $titre = ucfirst($pages[0]);
        $pages = array_map(fn(string $page) => ($routes . $page . ".php"), $pages);
        $pages = array_filter($pages, fn(string $page) => file_exists($page));
        if (count($pages) < 1) {
            http_response_code(404);
            exit;
        } else include_once($base);
    } else include_once($script);
} else if (file_exists($file)) {
    header("Content-Type: " . mime_content_type($file));
    header("Content-Length: " . filesize($file));
    readfile($file);
} else {
    http_response_code(404);
    exit;
}