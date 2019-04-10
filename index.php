<?php
	include_once 'header.php';
?>
				<div class="doc-body row">
					<div class="doc-content col-md-9 col-12 order-1">
						<div class="content-inner">
							<section id="primechain-api" class="doc-section">
								<h2 class="section-title">Primechain API</h2>
								<div class="section-block">
									<p>Primechain APIs make it very simple for developers to add blockchain power to their code - smart asset lifecycle management, electronic signatures, encrypted data storage & more. 
									</p>
									<a href="https://www.elegantthemes.com/blog/resources/elegant-icon-font" target="_blank"><img src="https://camo.githubusercontent.com/d62770cf2d0742033a8b0800685358f11e52d308/687474703a2f2f7777772e7072696d65636861696e746563682e636f6d2f696d616765732f70726f6a656374732f6170692d6769746875622e706e67" alt="Primechain-API" data-canonical-src="http://www.primechaintech.com/images/projects/api-github.png" style="max-width:100%;"></a>
								</div>
							</section><!--//doc-section-->
							<section id="introduction" class="doc-section">
								<h2 class="section-title">Introduction</h2>
								<div class="section-block">
									<p>Today, the Internet enables the movement of data (videos, text, photos and more) globally in milliseconds. But try moving value (money, loyalty points etc.) and you will be surprised by the costs, inefficiencies and time delays.</p>

									<p>Blockchain is a revolutionary technology that enables "internets of value" that can move value in seconds - money, loyalty points, equity shares, bonds, coupons, votes, intellectual property and much more.</p>

									<p>Blockchain solutions can be permissioned (e.g. a Government run land registry) or permission-less (e.g. Bitcoin, where anyone can become a miner). Blockchain solutions can be private (e.g. a contract management system implemented in a pharmaceutical company), public (e.g. an asset backed cryptocurrency) or hybrid (e.g. a group of banks running a shared KYC platform).
									</p>
								</div>
								<div id="1-1-blockchain-benefits" class="section-block">
									<h3 class="block-title">1.1 Blockchain benefits</h3>
									<p>
										<ol class="list">
    										<li>Blockchain removes the characteristic of infinite reproducibility from a digital asset. It confirms that each unit of value was transferred only once, solving the long-standing problem of double spending.</li>

    										<li>A single blockchain transaction can perform multiple asset exchanges between two or more parties. The exchange takes place in a single transaction, and comes with a guarantee of atomicity aka delivery-versus-payment, meaning that all of the asset transfers take place simultaneously, or none take place at all. This enabled real-time automated settlement and removes the need for reconciliation.</li>
    										
    										<li>A blockchain can assign title rights because it provides a record that compels offer and acceptance.</li>
    										
    										<li>By storing data across its network, a blockchain eliminates the risks that come with data being held centrally.</li>
    										
    										<li>The use of public key cryptography, symmetric cryptography and cryptographic hash functions makes blockchains cryptographically secure and provably immutable.</li>
    										
    										<li>Blockchains improves client satisfaction through faster, more convenient and secure services.</li>
    										
    										<li>Blockchains maximizes efficiency, security & transparency and minimizes fraud.</li>
    										
    										<li>Blockchains accelerates information and money flows.</li>
    										
    										<li>Blockchains greatly improve auditability and streamlines paperwork.</li>
    									</ol>
									</p>
								</div><!--//section-block-->
								<div id="1-2-blockchain-pain-points" class="section-block">
									<h3 class="block-title">1.2 Blockchain pain points</h3>
									<p>Blockchain is a world-changing technology, but it suffers from some pain points:</p>
									<div class="row">
										<ol class="list">    										
    										<li>Installing, configuring, securing, troubleshooting, updating, and maintaining a blockchain ecosystem is a complex and time consuming task.</li>
    										
    										<li>There are 100+ blockchains and distributed ledger systems to choose from.</li>
    										
    										<li>Building blockchain solutions from the ground up is very expensive and time consuming.</li>
    										
    										<li>There is a severe shortage of skilled blockchain developers.</li>
    									</ol>
									</div><!--//row-->
								</div><!--//section-block-->
								<div id="1-3-primechain-api"  class="section-block">
									<h3 class="block-title">1.3 Primechain API</h3>
									<p>Primechain APIs are RESTful JSON APIs for interacting with blockchains that allow developers to add blockchain power to their solutions in minutes.
									</p>

									<p>
										<b><i>Benefits of using Primechain-API:</i></b>
										<ol class="list">
    										<li>Save months of development time.</li>
    										
    										<li>Reduce the development cycle.</li>
    										
    										<li>Vastly increase the security of your applications.</li>
    										
    										<li>Vastly increase the scalability of your applications.</li>
    									</ol>
									</p>

									<p>
										<b><i>Primechain API categories include:</i></b>
										<ol class="list">
    										<li>Blockchain administration</li>
    										<li>Entity creation & permissions management</li>
    										<li>Digital Signatures</li>
    										<li>Data Streams</li>
    										<li>Smart Asset Lifecycle Management</li>
    										<li>Offer management</li>
    										<li>Encrypted data storage</li>
    										<li>Blockchain based authentication</li>
    									</ol>
									</p>

									<p>A typical Primechain node: </p>
									<p>
										<a href="https://camo.githubusercontent.com/98e079930e8b0ae91b92886a84f4cc554391f13e/687474703a2f2f7777772e7072696d65636861696e746563682e636f6d2f696d672f6170695f646f63756d656e746174696f6e2f6e6f6465322e706e67" target="_blank"><img src="https://camo.githubusercontent.com/98e079930e8b0ae91b92886a84f4cc554391f13e/687474703a2f2f7777772e7072696d65636861696e746563682e636f6d2f696d672f6170695f646f63756d656e746174696f6e2f6e6f6465322e706e67" alt="Primechain-API" data-canonical-src="http://www.primechaintech.com/img/api_documentation/node2.png" style="max-width:100%;"></a>
									</p>

									<p>Typical internal setup </p>
									<p>
										<a href="https://camo.githubusercontent.com/f10b22bd296ac025963682bf5f3c76d29d896d32/687474703a2f2f7777772e7072696d65636861696e746563682e636f6d2f696d672f6170695f646f63756d656e746174696f6e2f62325f696e7465726e616c2e706e67" target="_blank"><img src="https://camo.githubusercontent.com/f10b22bd296ac025963682bf5f3c76d29d896d32/687474703a2f2f7777772e7072696d65636861696e746563682e636f6d2f696d672f6170695f646f63756d656e746174696f6e2f62325f696e7465726e616c2e706e67" alt="Primechain-API" data-canonical-src="http://www.primechaintech.com/img/api_documentation/b2_internal.png" style="max-width:100%;"></a>
									</p>

									<p>

										<a href="https://camo.githubusercontent.com/283a3c5fa2a8421f5a01db3cae2efc831156a86c/687474703a2f2f7777772e7072696d65636861696e746563682e636f6d2f696d672f6170695f646f63756d656e746174696f6e2f62325f6f75746c696e65322e706e67" target="_blank"><img src="https://camo.githubusercontent.com/283a3c5fa2a8421f5a01db3cae2efc831156a86c/687474703a2f2f7777772e7072696d65636861696e746563682e636f6d2f696d672f6170695f646f63756d656e746174696f6e2f62325f6f75746c696e65322e706e67" alt="Primechain-API" data-canonical-src="http://www.primechaintech.com/img/api_documentation/b2_outline2.png" style="max-width:100%;"></a>
									</p>
								</div><!--//section-block-->
							</section><!--//doc-section-->

							<section id="2-primechain-api-use-cases" class="doc-section">
								<h2 class="section-title">2. Primechain-API use cases</h2>
								<div class="section-block">
									<p>A partial list of Primechain-API use cases is at:</p>
									<p>
										<a href="https://github.com/Primechain/primechain-api-docs/blob/master/use-cases.MD" target="_blank">https://github.com/Primechain/primechain-api-docs/blob/master/use-cases.MD</a>
									</p>
								</div>
							</section><!--//doc-section-->

							<section id="3-documentation" class="doc-section">
								<h2 class="section-title">3. Documentation</h2>
								<div class="section-block">
									<p>Primechain API documentation is available at:<br>
										<a href="https://github.com/Primechain/primechain-api-docs/blob/master/Documentation.md" target="_blank">https://github.com/Primechain/primechain-api-docs/blob/master/Documentation.md</a>
									</p>
									<p>
										To try Primechain API, you can use Advance REST Client or a similar tool.
									</p>
									<p>
										<a href="https://camo.githubusercontent.com/e78368922f5b3a28adfa0f43b7fa92e31c352e5c/687474703a2f2f7777772e7072696d65636861696e746563682e636f6d2f696d672f6170695f646f63756d656e746174696f6e2f726573742e706e67" target="_blank"><img src="https://camo.githubusercontent.com/e78368922f5b3a28adfa0f43b7fa92e31c352e5c/687474703a2f2f7777772e7072696d65636861696e746563682e636f6d2f696d672f6170695f646f63756d656e746174696f6e2f726573742e706e67" alt="Primechain-API" data-canonical-src="http://www.primechaintech.com/img/api_documentation/rest.png" style="max-width:100%;"></a>
									</p>
								</div>
							</section><!--//doc-section-->

							<section id="4-sandbox" class="doc-section">
								<h2 class="section-title">4. Sandbox</h2>
								<div class="section-block">
									<p>
										Email us on <a href="mailto:info@primechain.in" target="_blank">info@primechain.in</a> for details on accessing the Primechain-API sandbox.
									</p>
									<p>
										To view a sample nodeJS application built on Primechain-API, email us on <a href="mailto:info@primechain.in" target="_blank">info@primechain.in</a>
									</p>
								</div>
							</section><!--//doc-section-->

							<section id="5-about-primechain-technologies" class="doc-section">
								<h2 class="section-title">5. About Primechain Technologies</h2>
								<div class="section-block">
									<p>
										Primechain API are developed and maintained by <a href="http://www.primechaintech.com" target="_blank">Primechain™ Technologies Pvt. Ltd.</a>, a blockchain startup with the mission of building blockchains for a better world. We operate the Bankchain community of banks and maintain the Blockchain Security Controls. 
									</p>
								</div>
							</section><!--//doc-section-->

							<section id="6-sample-codebase" class="doc-section">
								<h2 class="section-title">6. Sample Codebase</h2>
								<div class="section-block">
									<nav>
									<div class="nav nav-tabs" id="nav-tab" role="tablist">
										<a class="nav-item nav-link active" id="nav-http-tab" data-toggle="tab" href="#nav-http" role="tab" aria-controls="nav-http" aria-selected="true">HTTP</a>
										<a class="nav-item nav-link" id="nav-js-tab" data-toggle="tab" href="#nav-js" role="tab" aria-controls="nav-js" aria-selected="false">Javascript</a>
										<a class="nav-item nav-link" id="nav-python-tab" data-toggle="tab" href="#nav-python" role="tab" aria-controls="nav-python" aria-selected="false">Python</a>
									</div>
									</nav>
									<div class="tab-content" id="nav-tabContent">
										<div class="tab-pane fade show active" id="nav-http" role="tabpanel" aria-labelledby="nav-http-tab">
											<!-- <div class="code-block"> -->
												<pre width="100%"><code class="language-markup">GET /api/v1/get_api_key HTTP/1.1
Host: 10.1.1.19:2512
Authorization: OTYqn*lf4NvowRFLrzGPCn4wHL8eBIE4wC9oIv4rCZHbBEd!0cte0$&q-sQxykif
Cache-Control: no-cache
Postman-Token: 080e25b7-7914-a785-95d5-45cf8050d636</code></pre>
											<!-- </div> --><!--//code-block-->
										</div>
										<div class="tab-pane fade" id="nav-js" role="tabpanel" aria-labelledby="nav-js-tab">
											<div class="code-block">
												<pre><code class="language-markup">var http = require("http");

var options = {
  "method": "GET",
  "hostname": "10.1.1.19",
  "port": "2512",
  "path": "/api/v1/get_api_key",
  "headers": {
    "authorization": "OTYqn*lf4NvowRFLrzGPCn4wHL8eBIE4wC9oIv4rCZHbBEd!0cte0$&q-sQxykif",
    "cache-control": "no-cache",
    "postman-token": "5efe4941-84c5-af80-0e6c-4c9948a8325b"
  }
};

var req = http.request(options, function (res) {
  var chunks = [];

  res.on("data", function (chunk) {
    chunks.push(chunk);
  });

  res.on("end", function () {
    var body = Buffer.concat(chunks);
    console.log(body.toString());
  });
});

req.end();</code></pre>
											</div><!--//code-block-->
										</div>
										<div class="tab-pane fade" id="nav-python" role="tabpanel" aria-labelledby="nav-python-tab">
											<div class="code-block">
												<pre><code class="language-markup">
import http.client

conn = http.client.HTTPConnection("10.1.1.19:2512")

headers = {
    'authorization': "OTYqn*lf4NvowRFLrzGPCn4wHL8eBIE4wC9oIv4rCZHbBEd!0cte0$&q-sQxykif",
    'cache-control': "no-cache",
    'postman-token': "be55af9b-b72c-e30d-65f0-68cf66e65655"
    }

conn.request("GET", "/api/v1/get_api_key", headers=headers)

res = conn.getresponse()
data = res.read()

print(data.decode("utf-8"))
													</code></pre>
											</div><!--//code-block-->
										</div>
									</div>
								</div>
							</section><!--//doc-section-->
							
						</div><!--//content-inner-->
					</div><!--//doc-content-->

					<?php
						include_once 'nav.php';
					?>
					
				</div><!--//doc-body-->

<?php
	include_once 'footer.php';
?>