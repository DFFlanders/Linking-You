<article class="grid_8"> 
		
	<h1>Data Model</h1>
	
	<p>This is the HEI URI model we are recommending to the sector as a result of our analysis of existing institutional website structures and also our own informed opinions on URI structure.</p>
	
	<p>As developers we are used to the concept of objects and key/values and this is reflected in the model's structure. We've gone for namespaced type/identifier object nodes, such as <span class="uri">/event/openday/{identifier}</span>, <span class="uri">/about/campuses/{identifier}</span>, and <span class="uri">/academic_departments/{identifier}/courses</span>.</p>
	
	<p>The only contention we had on the model was whether or not to have courses as a top level object, or have them as a sub-object of student type (undergraduate/postgraduate/foundation). In the end we went with sub-objects as this seems to be a standard that other HEIs have agreed on because postgraduate courses are structured and administered in a different way to undergraduate courses. Despite this, individual courses should still always be forwarded to the <span class="uri">/course/{id}</span> resource, as a course in itself has no undergraduate or postgraduate status outside of the institution's own administrative structure.
	</p>
	
	<p class="cleanuri">institution.ac.uk</p>
	
	<ul>
		<li><span class="cleanuri">/<span class="uri_replace">{ucas_code}</span></span> &rarr; <span class="redirect_highlight">Redirect</span> to appropriate <span class="cleanuri">/course/<span class="uri_replace">{id}</span></span>.</li>
		<li><span class="cleanuri">/courses</span></li>
		<li><span class="cleanuri">/course/<span class="uri_replace">{id}</span></span></li>
		<li><span class="cleanuri">/undergraduate</span>
			<ul>
				<li><span class="cleanuri">/courses</span>
					<ul>
						<li><span class="cleanuri">/<span class="uri_replace">{id}</span></span> &rarr; <span class="redirect_highlight">Redirect</span> to appropriate <span class="cleanuri">/course/<span class="uri_replace">{id}</span></span>.</li>
						<li><span class="cleanuri">/search/<span class="uri_replace">{query}</span></span></li>
						<li><span class="cleanuri">/entry_requirements</span></li>
					</ul>
				</li>
				<li><span class="cleanuri">/prospectus</span></li>
			</ul>
		</li>
		<li><span class="cleanuri">/postgraduate</span>
			<ul>
				<li><span class="cleanuri">/courses</span>
					<ul>
						<li><span class="cleanuri">/<span class="uri_replace">{id}</span></span> &rarr; <span class="redirect_highlight">Redirect</span> to appropriate <span class="cleanuri">/course/<span class="uri_replace">{id}</span></span>.</li>
						<li><span class="cleanuri">/search/<span class="uri_replace">{query}</span></span></li>
						<li><span class="cleanuri">/entry_requirements</span></li>
					</ul>
				</li>
				<li><span class="cleanuri">/prospectus</span></li>
			</ul>
		</li>
		<li><span class="cleanuri">/foundation</span>
			<ul>
				<li><span class="cleanuri">/courses</span>
					<ul>
						<li><span class="cleanuri">/<span class="uri_replace">{id}</span></span> &rarr; <span class="redirect_highlight">Redirect</span> to appropriate <span class="cleanuri">/course/<span class="uri_replace">{id}</span></span>.</li>
						<li><span class="cleanuri">/entry_requirements</span></li>
					</ul>
				</li>
				<li><span class="cleanuri">/prospectus</span></li>
			</ul>
		</li>
		<li><span class="cleanuri">/events</span>
			<ul>
				<li><span class="cleanuri">/opendays</span></li>
				<li><span class="cleanuri">/conferences</span></li>
				<li><span class="cleanuri">/public_lectures</span></li>
				<li><span class="cleanuri">/graduation</span></li>
			</ul>
		</li>
		<li><span class="cleanuri">/business</span>
			<ul>
				<li><span class="cleanuri">/incubation</span></li>
				<li><span class="cleanuri">/ktp</span></li>
			</ul>
		</li>
		<li><span class="cleanuri">/research</span></li>
		<li><span class="cleanuri">/academic_depts</span>
			<ul>
				<li><span class="cleanuri">/<span class="uri_replace">{id}</span></span>
					<ul>
						<li><span class="cleanuri">/courses</span>
							<ul>
								<li><span class="cleanuri">/undergraduate</span> &rarr; <span class="redirect_highlight">Redirect</span> to <span class="cleanuri">/undergraduate/courses/search/<span class="uri_replace">{query}</span></span>.</li>
								<li><span class="cleanuri">/postgraduate</span> &rarr; <span class="redirect_highlight">Redirect</span> to <span class="cleanuri">/postgraduate/courses/search/<span class="uri_replace">{query}</span></span>.</li>
							</ul>
						</li>
					</ul>
				</li>
				<li><span class="cleanuri">/staff</span> &rarr; <span class="redirect_highlight">Redirect</span> to <span class="cleanuri">/contact/search/<span class="uri_replace">{query}</span></span>.</li>
				<li><span class="cleanuri">/news</span> &rarr; <span class="redirect_highlight">Redirect</span> to <span class="cleanuri">/news/search/<span class="uri_replace">{query}</span></span>.</li>
			</ul>
		</li>
		<li><span class="cleanuri">/support_depts</span>
			<ul>
				<li>/<span class="uri_replace">{id}</span></li>
				<li>/staff &rarr; <span class="redirect_highlight">Redirect</span> to <span class="cleanuri">/contact/search/<span class="uri_replace">{query}</span></span>.</li>
				<li>/news &rarr; <span class="redirect_highlight">Redirect</span> to <span class="cleanuri">/news/search/<span class="uri_replace">{query}</span></span>.</li>
			</ul>
		</li>
		<li><span class="cleanuri">/about</span>
			<ul>
				<li><span class="cleanuri">/vc</span></li>
				<li><span class="cleanuri">/parents</span></li>
				<li><span class="cleanuri">/<span class="uri_replace">{city}</span></span></li>
				<li><span class="cleanuri">/campuses</span>
					<ul>
						<li><span class="cleanuri">/<span class="uri_replace">{id}</span></span></li>
					</ul>
				</li>
			</ul>
		</li>
		<li><span class="cleanuri">/search</span></li>
		<li><span class="cleanuri">/press</span>
			<ul>
				<li><span class="cleanuri">/facts</span></li>
			</ul>
		</li>
		<li><span class="cleanuri">/news</span>
			<ul>
				<li><span class="cleanuri">/<span class="uri_replace">{date}</span></span></li>
				<li><span class="cleanuri">/<span class="uri_replace">{id}</span></span></li>
				<li><span class="cleanuri">/search/<span class="uri_replace">{query}</span></span></li>
			</ul>
		</li>
		<li><span class="cleanuri">/jobs</span></li>
		<li><span class="cleanuri">/legal</span>
			<ul>
				<li><span class="cleanuri">/policies</span></li>
				<li><span class="cleanuri">/data_protection</span></li>
				<li><span class="cleanuri">/environment</span></li>
				<li><span class="cleanuri">/equality</span></li>
				<li><span class="cleanuri">/foi</span></li>
				<li><span class="cleanuri">/ict</span></li>
				<li><span class="cleanuri">/website</span></li>
				<li><span class="cleanuri">/regulations</span></li>
			</ul>
		</li>
		<li><span class="cleanuri">/contact</span>
			<ul>
				<li><span class="cleanuri">/staff</span></li>
				<li><span class="cleanuri">/<span class="uri_replace">{id}</span></span></li>
				<li><span class="cleanuri">/search/<span class="uri_replace">{query}</span></span></li>
			</ul>
		</li>
	</ul>
	
	<h2>Easy conformance</h2>
	
	<p>There are a couple of easy steps that institutions can take to conform to the model above today.</p>
	
	<ol>
		<li>Add Apache/ISS/Nginx redirects to existing pages and advertise these redirects instead:<br>
		e.g. Set up a redirect from <span class="uri">/undergraduate/courses</span> to <span class="uri">/study/undergraduate/courses</span>
		</li>
		<li>
			<p>Add a CNAME record for www. to the DNS for the domain to add support for prefix less addresses:<br>
			e.g. CNAME <span class="cleanuri">www.example.ac.uk.</span> &rarr; <span class="cleanuri">example.ac.uk.</span></p>
			
			<p>
			Then update Apache/IIS/Nginx to add an alias for the domain:<br>
			e.g. (Apache):<br>
			<pre>
ServerName institution.ac.uk
ServerAlias www.institution.ac.uk</pre>
			</p>
		</li>
	</ol>
		
	<h2>Discuss This</h2>
	
	<div id="disqus_thread"></div>
	<script type="text/javascript">
	    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	    var disqus_shortname = 'lncneukit'; // required: replace example with your forum shortname
	
	    // The following are highly recommended additional parameters. Remove the slashes in front to use.
	    var disqus_identifier = 'model';
	    var disqus_url = 'http://lncn.eu/toolkit/model';
	
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

<aside class="grid_4 last"> 

	<div class="box bg_light"> 
	
		<h2>Linked Data?</h2> 
		
		<blockquote cite="http://linkeddata.org/">
			Linked Data is about using the Web to connect related data that wasn't previously linked, or using the Web to lower the barriers to linking data currently linked using other methods.
			<cite><a href="http://linkeddata.org/">linkeddata.org</a></cite>
		</blockquote>
				
		<p>Within the higher education sector there is a gradual movement towards <a href="http://data-ac-uk.ecs.soton.ac.uk/">providing linked data</a> for an institution. A key part of this is understanding both what data is available, and how to present it in such a way that it's easily linked to the rest of the content on the Internet.</p>
		
		<p>Linked data itself doesn't have to be housed separately from an institution's primary web presence, indeed in many cases it would be preferable to reduce duplication by providing a single, easily referenced point from which to access a resource. For this reason we've designed our recommended data model to represent a University's resources in a manner similar to linked data resources across the web.</p>
		
		<h3>Unlock Data's Potential</h3>
		
		<p>To help unlock the potential of all your institution's data we <em>strongly recommend</em> that wherever possible you include machine readable alternatives. These should be located at the same resource name as the 'normal' resource, but suffixed with a machine readable format name. For example, <span class="uri">/courses</span> could (and indeed should) be expressed as <a href="http://www.w3.org/XML/">XML</a> at <span class="uri">/courses.xml</span>, <a href="http://www.json.org/">JSON</a> at <span class="uri">/courses.json</span> and <a href="http://www.xcri.org/">XCRI</a> at <span class="uri">/courses.xcri</span>.</p>
	
	</div>
	
	<div class="box bg_light">
	
		<h2>Get The Poster</h2>
		
		<p><a href="https://github.com/lncd/Linking-You/raw/master/poster/poster.png"><img src="https://github.com/lncd/Linking-You/raw/master/poster/poster_300px.png" style="width:100%" title="Linking You Poster"></a></p>
		
		<p>As part of the project we've produced a poster with our recommended URI structure and some handy notes; great for decorating any large, conveniently empty wall.</p>
		
		<p>Want a print-ready PDF file? <a href="https://github.com/lncd/Linking-You/raw/master/poster/poster.pdf">Grab it from our source repository</a>.</p>
	
	</div>

</aside>
