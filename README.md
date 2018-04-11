# csc174-midyear
Midyear take home exam for CSC 174. This website is built using PHP and Bootstrap (for no other reason than I wanted to learn how to use bootstrap better).


## IA:
  ### Describe the domain and it’s limits (the ontology):
  		This webpage is an introductuion to one of the world's most important crops– the potato. It provides a breif introduction to the history of, the cultural impact of, and some fun facts regarding potatoes. It pulls together these indivdual facts (denoted visually as cards) into one over arching understanding of potatoes.
  ### Describe the choreography - the order you intend to reveal content to the user:
  		The user is first introduced to some to a large image of potatoes so the users can familiarize themselves with what a potatoe is. The home page uses a Z-pattern to draw the site visitor's eye from the introductory content (the name potato/the image) and then down through some introductory information. The first piece of information is just a very breif intro to the naming of the potato, then some more information on the potato itself with the opportunity to "learn more", and finally the user will land on the first opportunity to sign up for the news letter.
		The site visitor can access the more detailed content page from the either the navigation bar (which reflects how the visitor should experience the page Home -> Learn More) or from the learn more button.
		The experience of the content page implements an F-pattern and groups related information in the form of cards. There is a flashy title and thumbnail at the top of each card to allow for efficent scanning of the page, and content of the cards is ordered in terms of importance (history, then impact, then fun facts). Less text based/filler content is located towards the right of the page to create visual balance. 

## DESIGN:
   ### Layout:
   		As stated above, the home page implements a Z-Pattern (as it is less text intensive and prompts the users to move deeper into the site) and the content/Learn More page implements an F-Pattern (as it is more text/content oriented). 
	Implementations of layouts were inspired by:
		https://webdesign.tutsplus.com/articles/understanding-the-f-layout-in-web-design--webdesign-687
		https://webdesign.tutsplus.com/articles/understanding-the-z-layout-in-web-design--webdesign-28
   ### C.R.A.P. Principles:
    Contrast: Contrast was mainly achieved on this webpage throught the color palettes used. The combination of light and dark colors in addition to complimentary colors helps create content that 'pops'. Additionally, all the cards are "framed" with two contrasting colors so they stand out from the background. 
    The palettes were selected because they are not only warm Earthy tones that create a welcoming environment, while still staying fun because after all this is a website about potatoes. 
	The Palettes Used
		http://www.color-hex.com/color-palette/18955
		http://www.color-hex.com/color-palette/15900
    Repetition: Repetition can be seen with the consistancy of cards styles and fonts, in addition to the cary through of nav and style elements. This can especially be seen on the content page with the consistent layout of the cards: ie. image, title, content. 
    Alignment: Alignment is also seen through the card and header structure- especially on the content page. This webpage has a document structure, with clear heading and page organization.
    Proximity: Once again, promixity is done by grouping like content into cards, which are clearly visually separated on the page. 
   ### Fonts (readability and legibility):
   	"Love Ya Like A Sister" was selected as the title font because it is handwritten and looks almost like someone was creating an advertisement for a farmers market. It is both earthy and fun, so its the perfect font for a website about potatoes. "Delius" also has a handwritten flair and pairs well with "Love Ya Like A Sister", though it is far simpler
	Though both fonts are very readable, "Delius" is more legible. Therefore "Delius" was used for smaller text and block text while "Love Ya Like A Sister" was used for larger headings.
   ### CSS Architecture:
   	CSS Architecture for this project was made fair easier by using Bootstrap. Other than that, custom classes were used to group like attributes (see comments in styles.css for more information)
   
 ## Tech
  ### Database Credentials:
  	IP: "66.147.242.186";
	Username: urcscon3_cernst4
	Password: coffee1N/!
	Database Name: urcscon3_cernst3
  ### Other Fun Things: 
