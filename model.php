<article class="grid_8"> 
		
	<h1>Data Model</h1>
	
	<p>This is the HEI URI model which we are recommending to the sector as a result of our analysis of existing institutional website structures and also our own opinions on URI structure.</p>
	
	<p>As developers we are used to the concept of objects and key/values and so this has reflected on the model's structure. We've gone for namespaced type/identifier object nodes, such as /event/openday/{identifier}, /about/campuses/{identifier}, and /academic_departments/{identifier}/courses.</p>
	
	<p>
		The only contention we had on the model was whether or not to have courses as a top level object, or have them as a sub-object of student type (undergraduate/postgraduate/foundation). In the end we went with sub-objects as this seems to be a standard that other HEIs have agreed on because postgraduate courses are structured and administered in a different way to undergraduate courses.
	</p>
	
	<p class="cleanuri">yourdomain.ac.uk</p>
	
	<ul>
		<li><span class="cleanuri">/{ucas_code}</span> &middot; Replace {ucas_code} with any of your UCAS course codes. Redirect to appropriate /course/{id}.</li>
		<li><span class="cleanuri">/courses</span></li>
		<li><span class="cleanuri">/course/{id}</span></li>
		<li><span class="cleanuri">/undergraduate</span>
			<ul>
				<li><span class="cleanuri">/courses</span>
					<ul>
						<li><span class="cleanuri">/{id}</span></li>
						<li><span class="cleanuri">/search/{query}</span></li>
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
						<li><span class="cleanuri">/{id}</span></li>
						<li><span class="cleanuri">/search/{query}</span></li>
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
						<li><span class="cleanuri">/{id}</span></li>
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
				<li><span class="cleanuri">/{id}</span>
					<ul>
						<li><span class="cleanuri">/courses</span>
							<ul>
								<li><span class="cleanuri">/undergraduate</span></li>
								<li><span class="cleanuri">/postgraduate</span></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><span class="cleanuri">/staff</span></li>
				<li><span class="cleanuri">/news</span></li>
			</ul>
		</li>
		<li><span class="cleanuri">/support_depts</span>
			<ul>
				<li>/{id}</li>
				<li>/staff</li>
				<li>/news</li>
			</ul>
		</li>
		<li><span class="cleanuri">/about</span>
			<ul>
				<li><span class="cleanuri">/vc</span></li>
				<li><span class="cleanuri">/parents</span></li>
				<li><span class="cleanuri">/{city}</span></li>
				<li><span class="cleanuri">/campuses</span>
					<ul>
						<li><span class="cleanuri">/{id}</span></li>
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
				<li><span class="cleanuri">/{date}</span></li>
				<li><span class="cleanuri">/{id}</span></li>
				<li><span class="cleanuri">/search/{query}</span></li>
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
				<li><span class="cleanuri">/{id}</span></li>
				<li><span class="cleanuri">/search/{query}</span></li>
			</ul>
		</li>
	</ul>
		
	<!--<h2>Discuss This</h2>
	
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
	<a href="http://disqus.com" class="dsq-brlink">Comments powered by <span class="logo-disqus">Disqus</span></a>	-->
	
</article> 

<aside class="grid_4 last"> 

	<div class="box bg_light"> 
	
		<h2>Linked Data?</h2> 
		
		<blockquote cite="http://linkeddata.org/">
			Linked Data is about using the Web to connect related data that wasn't previously linked, or using the Web to lower the barriers to linking data currently linked using other methods.
			<cite><a href="http://linkeddata.org/">linkeddata.org</a></cite>
		</blockquote>
				
		<p>Within the higher education sphere there is a slow movement towards <a href="http://data-ac-uk.ecs.soton.ac.uk/">providing linked data</a> for an institution. A key part of this is understanding both what data is available, and how to present it in such a way that it's easily linked to the rest of the content on the Internet.</p>
		
		<p>Linked data itself doesn't have to be housed separately from an institution's primary web presence, indeed in many cases it would be preferable to reduce duplication by providing a single easily referenced point from which to access a resource.</p>
	
	</div> 

</aside>