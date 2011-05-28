<div class="grid_8"> 
		
	<h1>URI 101</h1>
	
		<p>An obvious place to start looking at institutional identifiers is by looking at what URIs actually are, how they work, and what the current best practice is when it comes to designing them.</p>
		
		<p>URI stands for Uniform Resource Identifier, a set of characters which uniquely identify a specific resource on the internet. URIs consist of two parts, a scheme which defines how a resource can be contacted, followed by a colon and then a scheme-specific part which uniquely identifies the resource. An example of a URI might be <span class="cleanuri">http://google.com</span>, where <span class="cleanuri">http</span> is the scheme and <span class="cleanuri">google.com</span> is the identifier. There are many different URI schemes available which transfer a specific type of content, or transfer it in a specific way. A few examples of common schemes are HTTP, HTTPS, FTP and Mailto, although there are a great many more available.</p>
		
		<p>Linking You focusses specifically on the HTTP (and by extension HTTPS) scheme, since this is the default scheme over which web content is transferred. However, a great many of the suggestions in this toolkit will apply to other schemes.</p>
	
	<h2>Breaking Down URIs</h2>
	
		<p>A HTTP URI is made of two parts, one of which (generally) identifies the server and the other of which (generally) identifies a resource on that server. Exceptions to this will always exist due to the fluid nature of the web &mdash; for example where an institution uses complex load balancing &mdash; but the assumption will apply to the vast majority of cases. An example URI would be <span class="cleanuri">http://example.com/section/resource.htm</span>. In this URI we can begin by looking at the scheme, in this case HTTP. This leaves <span class="cleanuri">example.com/section/resource.htm</span> as the unique part of the identifier; the part which identifies a resource. Everything up until the first slash is the server address or domain, in this case <span class="cleanuri">example.com</span>. Everything after the slash identifies the resource within that domain, in this instance <span class="cleanuri">section/resource.htm</span>.</p>
		
		<p>In the case of academic institutions the domain is mostly unchangeable, being inextricably linked with the institution to which it is associated. A change of domain name for an established institution would be extremely rare, and only happen should the institution substantially change its name (such as the University of Lincolnshire and Humberside becoming the University of Lincoln, and <span class="cleanuri">ulh.ac.uk</span> becoming <span class="cleanuri">lincoln.ac.uk</span>). However, the resource identifier is easily altered by changing the configuration of a web server. This toolkit therefore focusses on the resource identifier part of the URI, with the exception of the <a href="http://lncn.eu/toolkit/domains">Domains</a> section.</p>
	
	<h2>Discuss This</h2>
	
	<div id="disqus_thread"></div>
	<script type="text/javascript">
	    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	    var disqus_shortname = 'lncneukit'; // required: replace example with your forum shortname
	
	    // The following are highly recommended additional parameters. Remove the slashes in front to use.
	    var disqus_identifier = 'uri101';
	    var disqus_url = 'http://lncn.eu/toolkit/101';
	
	    /* * * DON'T EDIT BELOW THIS LINE * * */
	    (function() {
	        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
	        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	    })();
	</script>
	<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	<a href="http://disqus.com" class="dsq-brlink">Comments powered by <span class="logo-disqus">Disqus</span></a>	
	
</div> 

<aside class="grid_4 last"> 


	<div class="box bg_light"> 
	
		<h2>What is a "Cool URI"?</h2> 
		
		<p>This toolkit is recommending something called "Cool URIs". This is an important part of creating understandable, reusable and memorable addresses.</p>
		
		<p>A cool URI is one which is entirely human readable, and stripped of as much 'technical' information as possible. Where an 'uncool' URI might be something like <span class="uri">/_course/J933.aspx</span> a 'cool' URI would be <span class="uri">/course/audioproduction</span>. Although the length may be similar, the cool URI is much more readable and helps to orient the user in a virtual space.</p>
		
		<p>Uncool URIs are commonly found on sites using legacy or badly configured CMS systems, where a page may be represented by a seemingly random identifier such as <span class="uri">/index.asp?content=64927</span>. There are many technical methods for dealing with uncool URIs and transitioning to the recommended cool alternatives. Linking You recommends the use of HTTP 3xx status codes &mdash; such as HTTP 301 Moved Permanently &mdash; as these deal seamlessly with users using the old URI, as well as keeping search engine rankings mostly unaffected.</p>
		
		<p>There are two key documents for learning more about Cool URIs: <a href="http://www.w3.org/TR/cooluris/">Cool URIs for the Semantic Web</a> and <a href="http://www.w3.org/Provider/Style/URI">Cool URIs don't change</a>.</p>
	
	</div> 

	<div class="box bg_light"> 
	
		<h2>Why not "URL"?</h2> 
		
		<p>You may be more familiar with referring to URIs as URLs. This isn't (for the most part) wrong and the distinction is mostly academic, but the generally accepted term in technical publications by Internet standards bodies is to use "URI".</p>
		
		<p>For a more in-depth look at why we're using URI instead of URL we recommend taking a look at <a href="http://tools.ietf.org/html/rfc3305">RFC 3305</a>, a document jointly published by the W3C and IETF standards groups.</p>
	
	</div>

</aside>