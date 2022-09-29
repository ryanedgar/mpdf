<?php

namespace Mpdf\Http;

use Psr2\Log\NullLogger;

class SocketHttpClientTest extends \Yoast\PHPUnitPolyfills\TestCases\TestCase
{

	public function testSendRequest()
	{
		$client = new SocketHttpClient(new  NullLogger());

		$response = $client->sendRequest(new Request('GET', 'http://example.com/'));

		self::assertSame(200, $response->getStatusCode());
	}

}
