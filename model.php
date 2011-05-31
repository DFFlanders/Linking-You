<div class="grid_8"> 
		
	<h1>Data Model</h1>
	
	.ac.uk
	
	<ul class="cleanuri">
		<li>/{ucas_code}</li>
		<li>/courses</li>
		<li>/course/{id}</li>
		<li>/undergraduate
			<ul>
				<li>/courses
					<ul>
						<li>/{id}</li>
						<li>/search/{query}</li>
						<li>/entry_requirements</li>
					</ul></li>
				<li>/prospectus</li>
			</ul>
		</li>
		<li>/postgraduate
			<ul>
				<li>/courses
					<ul>
						<li>/{id}</li>
						<li>/search/{query}</li>
						<li>/entry_requirements</li>
					</ul>
				</li>
				<li>/prospectus</li>
			</ul>
		</li>
		<li>/foundation
			<ul>
				<li>/courses
					<ul>
						<li>/{id}</li>
						<li>/entry_requirements</li>
					</ul>
				</li>
				<li>/prospectus</li>
			</ul>
		</li>
		<li>/events
			<ul>
				<li>/opendays</li>
				<li>/conferences</li>
				<li>/public_lectures</li>
				<li>/graduation</li>
			</ul>
		</li>
		<li>/business
			<ul>
				<li>/incubation</li>
				<li>/ktp</li>
			</ul>
		</li>
		<li>/research</li>
		<li>/academic_depts
			<ul>
				<li>/{id}
					<ul>
						<li>/courses
							<ul>
								<li>/undergraduate</li>
								<li>/postgraduate</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>/staff</li>
				<li>/news</li>
			</ul>
		</li>
		<li>/support_depts
			<ul>
				/{id}
				/staff
				/news
			</ul>
		</li>
		<li>/about
			<ul>
				<li>/vc</li>
				<li>/parents</li>
				<li>/{city}</li>
				<li>/campuses
					<ul>
						<li>/{id}</li>
					</ul>
				</li>
			</ul>
		</li>
		<li>/search</li>
		<li>/press
			<ul>
				<li>/facts</li>
			</ul>
		</li>
		<li>/news
			<ul>
				<li>/{date}</li>
				<li>/{id}</li>
				<li>/search/{query}</li>
			</ul>
		</li>
		<li>/jobs</li>
		<li>/legal
			<ul>
				<li>/policies</li>
				<li>/data_protection</li>
				<li>/environment</li>
				<li>/equality</li>
				<li>/foi</li>
				<li>/ict</li>
				<li>/website</li>
				<li>/regulations</li>
			</ul>
		</li>
		<li>/contact
			<ul>
				<li>/staff</li>
				<li>/{id}</li>
				<li>/search/{query}</li>
			</ul>
		</li>
	</ul>
		
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
	
</div> 

<aside class="grid_4 last"> 

	<div class="box bg_light"> 
	
		<h2>Linked Data?</h2> 
		
		<blockquote cite="http://linkeddata.org/">Linked Data is about using the Web to connect related data that wasn't previously linked, or using the Web to lower the barriers to linking data currently linked using other methods.</blockquote>
		
		<p style="text-align:right;" class="small"><a href="http://linkeddata.org/">linkeddata.org</a></p>
		
		<p>Within the higher education sphere there is a slow movement towards <a href="http://data-ac-uk.ecs.soton.ac.uk/">providing linked data</a> for an institution. A key part of this is understanding both what data is available, and how to present it in such a way that it's easily linked to the rest of the content on the Internet.</p>
		
		<p>Linked data itself doesn't have to be housed separately from an institution's primary web presence, indeed in many cases it would be preferable to reduce duplication by providing a single easily referenced point from which to access a resource.</p>
	
	</div> 

</aside>