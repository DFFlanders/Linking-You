<article class="grid_12"> 
		
	<h1>Institutional URIs</h1>
	
		<h2>Assessing the situation</h2>
						
		<iframe style="width:100%;height:400px" frameborder='0' src='https://spreadsheets1.google.com/pub?hl=en_GB&hl=en_GB&key=0AuO04KEqnewAdC1mSzhYYXpMZWZfM2I5ZXpvb0JYWkE&single=true&gid=1&output=html&widget=true'></iframe>
			
		<p class="notice margin_top">This data was collected during the final days of May 2011 &mdash; institutions may have modified their URI structures since this point.</p>
		
		<p>The data represents key areas of a total of 40 higher education institutional websites, as well as highlighting the differences that institutions have in URI structure. We studied 10 institutions from four of the UK university collaboration groups &mdash; the 1994 Group, the Russell Group, the Alliance Group and the Million+ group.</p>
				
		<p>The red highlights represent where a website (at the time of the survey) goes against Linking You recommended practices, and where such a behaviour is heavily discouraged for technical or usability reasons. In the case of the "WWW Required" column it means that the site is not accessible without the www. prefix (see <a href="http://lncn.eu/toolkit/domains">Domains</a> for more on this), and in the case of the "404 Redirect" column it means that the behaviour effectively breaks the Internets expected behaviour model.</p>
		
		<p>Where a column has green highlights they indicate that the URI for that area follows the recommended Linking You "Cool URI". However, where a column is not highlighted it does not indicate a problem with the URI. In many cases different URIs exist for historical or local reasons and - while not what we'd recommend for maximum cross-institution compatibility - are entirely valid.</p>
		
		<h2>Everyone Is Different</h2>
		
		<p>As this is the first study of its kind into HEI website URI structures, and there are no pre-existing recommendations, we were expecting little correlation between the websites however for in some cases this isn’t the case.</p>
		
		<p>We discovered there is very little consistency about the URI structure for undergraduate and postgraduate information and course pages, and especially for postgraduate course information there is no agreement whatsoever, with only one institution - Kingston - with a URI that follows the structure we’re recommending (<span class="uri">/postgraduate/courses</span>).</p>
		
		<p>However, for some of the more “static” pages such as research and business services, most institutions seem to have followed best practise (and again, what we are recommending in our model) by using <span class="uri">/business</span> and <span class="uri">/research</span> as the namespaces. Among those institutions using alternative URIs for these pages there appears to be a mixture of content management systems influencing the URIs (e.g. Reading: <span class="uri">/working-with-business</span>) and alternative terms such as <span class="uri">/enterprise</span> and <span class="uri">/partnerships</span>.</p>
		
		<p>One interesting trend can be found in the about pages. Most institutions go with the URI /about, however a lot of universities have their abbreviated name in the URI, e.g. Nottingham Trent: <span class="uri">/about_ntu</span>, and De Montford: <span class="uri">/about_dmu</span>. Again, this could be down to the content management system rendering URIs based on page titles, but in any case this is an example of having unnecessary information in the URI which goes against best practice.</p>
		
		<p>Also a number of institutions place their contact page inside the <span class="uri">/about</span> namespace which seems illogical because contacting the university is a call to action and therefore deserves its own top level URI at <span class="uri">/contact</span>.</p>
		
		<p>We also examined some other important aspects of websites such as presence of a sitemap and error redirection and the requirement of a www. prefix to the domain.</p>
		
		<p>Sitemaps allow both humans and search engines to discover content across your site and they should always be in the root. A number of websites we examined do have sitemaps however they call them “a to z” or indexes which are accurate but really should follow the correct web terminology which is “sitemap”.</p>
		
		<p>Error redirections are a very important issue. If I went to <span class="uri">/foobarfooey</span>, which is unlikely to be a real web page, then I expect the web server to issue a 404 webpage with a 404 header. Likewise if there is a server error (error 500) or I visit a web page I’m not authorised to access (error 401), the server should keep me at the address I visited (in this case <span class="uri">/foobarfooey</span>) and not redirect me to a dedicated error page. Websites that redirect on error break the web because they use a 301 (moved permanently) or 307 (temporarily moved) header which means that the content existed at some point (which is untrue) and the content can now be found at the dedicated error page which in-turn issues a 404 content not found header. This is really bad practice.</p>
		
		<p>In the toolkit we have discussed that <span class="cleanuri">www.</span> prefixes are unnecessary in this day and age. In our study we found most sites we looked at worked well without the www. prefix to the domain name however a quarter of those sites fail completely if the <span class="cleanuri">www.</span> prefix is missed off. The remaining sites force the use of <span class="cleanuri">www.</span> (or another subdomin such as <span class="cleanuri">www1.</span>, <span class="cleanuri">www2.</span>, or <span class="cleanuri">home.</span>) which at least is forgiving. We recommend that all institutions update their domain DNS settings to support no prefix. This is as simple as creating a CNAME to point at the root domain:
		e.g. CNAME <span class="cleanuri">www.example.ac.uk</span> &rarr; <span class="cleanuri">example.ac.uk</span></p>
	
	<h2>Discuss This</h2>
	
	<div id="disqus_thread"></div>
	<script type="text/javascript">
	    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	    var disqus_shortname = 'lncneukit'; // required: replace example with your forum shortname
	
	    // The following are highly recommended additional parameters. Remove the slashes in front to use.
	    var disqus_identifier = 'institution';
	    var disqus_url = 'http://lncn.eu/toolkit/institution';
	
	    /* * * DON'T EDIT BELOW THIS LINE * * */
	    (function() {
	        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
	        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	    })();
	</script>
	<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	<a href="http://disqus.com" class="dsq-brlink">Comments powered by <span class="logo-disqus">Disqus</span></a>
	
</article>
