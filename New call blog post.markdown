This is a guest blog post by David F. Flanders (JISC Programme Manager responsible for persistent identifiers) and Joss Winn (Project Manager of the 'Linking You Toolkit'). They ask for your opinions on some potential future work that JISC would like to take forward on behalf of the sector.

# Lend Me Your Ears Dear University Web Managers!

JISC is considering putting out a Call to all University Web Departments who manage the .ac.uk pages of their website, and we'd like to make sure that what we are proposing would be of value to the sector and is interesting enough for several of you to consider bidding. Please make your opinion known using the #lncneu hashtag on Twitter or via the comments below.

In short, the University of Lincoln undertook a four month project for JISC called "Linking You", which surveyed 40 different websites across the .ac.uk domain (ten from each university group) and compared the similarities between the URLs of those websites.  The project found there was a lot of inconsistency in the representation of information for graduates and undergraduates.  However, there were also good conventions that have emerged across the sector and out of all this, the 'Linking You' project proposed a common set of URL syntaxes that could be used in principle across multiple corporate institutional websites:

[http://lncn.eu/toolkit/model](http://lncn.eu/toolkit/model)

Before you get upset and think that we are suggesting you immediately change your current URL structures, you should know that we are NOT suggesting anything of the sort!  Rather we are suggesting that via a transparent mapping exercise (using 303 or 301 redirects) you can mint all the suggested URLs that the 'Linking You' project proposes and then link them to the actual URLs that have grown up as part of your organic system.  For example,

If you use: http://foo.ac.uk/study/undergraduate/courses

You could follow the ‘linking you’ recommendations and mint a new URL that points to the above URL using HTTP code 303 or 301 to:

http://foo.ac.uk/courses/

In short, you’re just mapping what we hope will become a common URI structure to your current link architecture, which means you can continue to change and add more links to your architecture (as the organisation changes) and you would just continue to redirect the 'common' link as recommend by ‘linking you’ to the underlying link. This process need not affect the design or apparent structure of your website.

So why should you mint the suggested set of ‘linking you’ URLs for your institution?  We recognise this work (though minimal) of minting and maintaining the redirects would be another thing to deal with across your complex and growing .ac.uk websites.

Below we list ten reasons that we think will result if we can get multiple institutions to start adopting this syntax and vocabulary:

1. Better SEO: As a sector we can go to Google and say, "Hi we are the University sector and we think you should give priority to these URLs when people are searching for things like courses."

2. robot.txt: If a group of Universities started adopting these URL syntaxes, JISC could start to save you time and money generating robot.txt for you as well as start doing more analytics across the sector to inform you what people are clicking on across all .ac.uk websites.

3. A simple mapping tool: An apache mod_rewrite (or IIS, nginx, etc. equivalent) tool that will do most of this work for you that JISC can support on your behalf… 

4. Improve discovery: Clear human-readable URLs are [now integral to browser search and lookup technology](http://linkingyou.blogs.lincoln.ac.uk/2011/04/18/the-evolution-of-the-address-bar/). 

5. Predictable, consistent, aggregations: It will be easier to build tools on behalf of the sector because people will know where to go for the data. See 6, 7, 8 for an immediate experiment JISC will undertake and just think what else could be leveraged… 

6. A course catalogue: As many of you know JISC is actively encouraging universities to create XCRI feeds for their courses.  If everyone producing an XCRI feed put it at the following URL foo.ac.uk/courses/xcri we'd lay the groundwork for persistent, structured course data that developers could build with.

7. A news feed: If JISC knew where all the coporate news feeds were e.g. http://foo.ac.uk/news/rss we could create a Univeristy News App where the sector could have their news published on demand, let alone text mining goodness and other filters for highlight key news developments across all higher and further education institutions.

8. A sector wide directory: Common information such as institutional policies, contact information, news, about, events, etc. could be aggregated into a searchable directory; useful to both the public and HEI data geeks. 

9. Know your assets: Your .ac.uk addresses can be understood as your 'virtual real estate'. Adopting a well-formed, widely understood and persistent 'portfolio' of core web addresses will help Web Managers manage these increasingly valuable assets. 

10. Cool URLs: [Simple, stable, manageable URLs make sense](http://lncn.eu/toolkit/101). They are [recommended](http://www.w3.org/Provider/Style/URI) by the WC3, make Web Managers' lives easier and keep users happy, too. 

Those are some of the reasons we can think of. We're convinced that if we all worked together as University Web Managers we could achieve more than the sum of our parts by producing this URL structure for each institution.

What kind of project do you think JISC should put out a Call for?  We're thinking of funding a several short projects to review and standardise the toolkit, put it into practice and then write up your case study for the sector on how it worked for you and what value you see in doing this work. Are you interested? What are your thoughts on all of this?