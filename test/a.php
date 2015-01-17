<?php
require('../ACurl/ACurlException.php');
require('../ACurl/ACurl.php');

// $url = 'http://uri.li/cJjN';
$url = 'http://dev.local/acurl/test/b.php';

// $prm = array('a'=>array(1,2), 'b'=>3);

$acurl = new ACurl\ACurl($url);
// $acurl->setMethod(ACurl\ACurl::METHOD_PUT);

// $acurl->storeResponseHeaders(false);
// $acurl->storeResponseBody(false);

// $acurl->setRequestHeader('X-Foo-1: foo1');
// $acurl->setRequestHeader(array('X-Foo-2: foo2'));
// $acurl->setRequestHeader(array('X-Foo-3' => 'foo3'));

// $acurl->setUrlParams($prm);
// $acurl->setRequestBody($prm);

// $acurl->setCookie('a=1;');
// $acurl->setOption('cookie', 'a=1;');

// $acurl->setOption('header', 0);
// $acurl->setOption('nobody', 0);
// $acurl->setOption('returntransfer', 0);

// $acurl->setTimeoutMs(1000);
      // ->setMaxRecvSpeedLarge(111);
// $acurl->set_timeoutMs(1000);

// $acurl->setFollowlocation(1);

// $acurl->setUrlParam(array(
//     'foo' => 1,
//     'bar' => 'The bar!'
// ));

// $acurl->setMethod(ACurl\ACurl::METHOD_POST);
// $acurl->setRequestBody(array(
//     'fileName' => 'myfile-2.txt',
//     'fileData' => file_get_contents('./myfile-1.txt'),
// ));

$acurl->run();

pre($acurl->getStatusCode());
pre($acurl->getStatusText());

// pre($acurl->getMaxRecvSpeedLarge());

pre($acurl->getUrl());
pre($acurl->getRequestHeaders());
pre($acurl->getResponseHeaders());

// pre("---Response Body---");
pre($acurl->getResponseBody());

function pre($s, $e = 0) {
    printf('<pre>%s</pre>', print_r($s, 1));
    if ($e) exit;
}