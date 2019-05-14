<?php
$siteList = array();

//the array key will be used for the filenames for the iamges

$siteList["stagedhomes"] = array(
  "url" => "https://stagedhomes.com/",
  "title" => "Staged Homes",
  "description" => "The World Leader in Home Staging Training",
  "mywork" => "I help maintain this site, convert old pages to the new style template, and implement new functionality. Coding the backend is done in PHP, and the front end is done with Bootstrap. ",
  "skills" => array("HTML", "CSS", "JS", "Bootstrap", "Responsive", "PHP", "MySQL")
);

$siteList["iahsp"] = array(
  "url" => "https://iahsp.com/",
  "title" => "IAHSP®, The International Association of Home Staging Professionals®",
  "description" => "The largest and longest running Home Staging Industry Trade Association with thousands of members worldwide",
  "mywork" => "I help maintain this site as well as implement new sections.  I code in angular in the front end, and communicate with a Firebase Firestore database.  I also worked on migrating the back-end data from the Firebase Realtime database to the Firebase Firestore database.  I have also implemented several pages with angular forms, and a password reset, that communicate with a Google Cloud Function server running as a REST server.",
  "skills" => array("HTML", "CSS", "JS", "Bootstrap", "Responsive", "Angular", "Firebase Firestore", "Google Cloud Functions")
);

$siteList["iahspconexpo"] = array(
  "url" => "https://iahspconexpo.com/",
  "title" => "IAHSP® Conference and EXPO",
  "description" => "A high level educational event for top Home Staging business owners worldwide!",
  "mywork" => "I help maintain this site as well as implement new sections, coding in angular.",
  "skills" => array("HTML", "CSS", "JS", "Bootstrap", "Responsive", "Angular")
);

$siteList["iahspfoundation"] = array(
  "url" => "https://www.iahspfoundation.com/",
  "title" => "IAHSP Foundation, Inc",
  "description" => "The IAHSP Foundation, Inc. is dedicated to serving those in need in our communities throughout the United States and Canada through the gift and magic of ASP Home Staging",
  "mywork" => "Using angular, I set up the donation forms, that when submitted, communicate with a Google Cloud Function server running as a REST server.",
  "skills" => array("HTML", "CSS", "JS", "Bootstrap", "Responsive", "Angular", "Google Cloud Functions")
);

$siteList["ortabrothers"] = array(
  "url" => "https://www.ortabrothers.com/",
  "title" => "Orta Brothers",
  "description" => "Orta Brothers is a family owned business, serving residents and commercial clients alike since 2002",
  "mywork" => "As a team, we were given separate pages to work on, on this site.  I was specifically given the /software-engineers page, that lists all of our team members.  I created a component that is reused multiple times, for each person listed on the page. I also was given the /contact/quote page, where I created an interactive quote form, again making use of a component that is reused.",
  "skills" => array("HTML", "CSS", "JS", "Bootstrap", "Responsive", "React")
);

//commenting out now, because i can't remember what i contributed to this lol
//$siteList["chateaujudsonville"] = array(
  //"url" => "https://www.chateaujudsonville.com/software-engineers/",
  //"title" => "Chateau Judsonville",
  //"description" => "Family style living for elderly individuals who need help and support in everyday activities while maintaining a sense of independence and privacy",
  //"mywork" => "This will be replaced by some actual text later.",
  //"skills" => array("React", "Responsive")
//);

$siteList["fioprints"] = array(
  "url" => "https://fioprints.com/",
  "title" => "FIO Prints",
  "description" => "Inksoft powered fully interactive e-commerce store",
  "mywork" => "This is a website that is running via inksoft.  I have implemented heavy javascript and css injections into this site to restructure the look and feel of the template that inksoft provides.",
  "skills" => array("HTML", "CSS", "JS", "Responsive", "Inksoft")
);

$siteList["shirtmeuptees"] = array(
  "url" => "https://www.shirtmeuptees.com/",
  "title" => "SHIRTMEUPTEES",
  "description" => "Drupal E-commerce Web Store",
  "mywork" => "I built this drupal 7 site to make use of drupal commerce.  I’ve customized a lot of things on this site, including a custom module that outputs data via XML to shipstation.  It contains CSV upload functionality in order to fill in all the variants of each commerce item.  It also contains an image generator that can generate images on demand (via PHP), as well as a new free-form text tool that lets you put any text you want on your product.  The front-end template makes use of Bootstrap, JS, Jquery, and CSS Grid on the product page.  I have this site running behind Cloudflare, to protect my server, provide good SSL (https), and provide DDOS protection.",
  "skills" => array("HTML", "CSS", "CSS Grid", "JS", "JQuery", "Bootstrap", "Responsive", "MySQL", "PHP", "Drupal", "Drupal Commerce", "ShipStation", "CloudFlare")
);

$siteList["stayfrostees"] = array(
  "url" => "https://www.stayfrostees.com/",
  "title" => "STAYFROSTEES",
  "description" => "Drupal E-commerce Web Store",
  "mywork" => "I built this drupal 7 site to make use of drupal commerce.  I’ve customized a lot of things on this site, including a custom module that outputs data via XML to shipstation.  It contains CSV upload functionality in order to fill in all the variants of each commerce item. The front-end template makes use of bootstrap, JS, and Jquery.  I have this site running behind Cloudflare, to protect my server, provide good SSL (https), and provide DDOS protection.",
  "skills" => array("HTML", "CSS", "JS", "JQuery", "Bootstrap", "Responsive", "MySQL", "PHP", "Drupal", "Drupal Commerce", "ShipStation", "CloudFlare")
);

$siteList["wedothelean"] = array(
  "url" => "https://www.wedothelean.com/",
  "title" => "WEDOTHELEAN",
  "description" => "Bay Area Inspired Gear - T-Shirts, Hoodies &amp; More",
  "mywork" => "I built this drupal 7 site to make use of drupal commerce.  I’ve customized a lot of things on this site, including a custom module that outputs data via XML to shipstation.  It contains CSV upload functionality in order to fill in all the variants of each commerce item. The front-end template makes use of bootstrap, JS, and Jquery.  I have this site running behind Cloudflare, to protect my server, provide good SSL (https), and provide DDOS protection.",
  "skills" => array("HTML", "CSS", "JS", "JQuery", "Bootstrap", "Responsive", "MySQL", "PHP", "Drupal", "Drupal Commerce", "ShipStation", "CloudFlare")
);

$siteList["perazzaprints"] = array(
  "url" => "https://www.perazzaprints.com/",
  "title" => "Perazza Prints",
  "description" => "Perazza Prints specializes in the embellishment of products for universal needs",
  "mywork" => "This is a simple drupal 7 website, that is mostly just an informative site. The front-end template makes use of bootstrap, JS, and Jquery.  I have this site running behind Cloudflare, to protect my server, provide good SSL (https), and provide DDOS protection.",
  "skills" => array("HTML", "CSS", "JS", "JQuery", "Bootstrap", "Responsive", "MySQL", "PHP", "Drupal", "CloudFlare")
);

$siteList["procf"] = array(
  "url" => "http://pro-cf.com/",
  "title" => "Centrifugal Force Productions",
  "description" => "This is a simple website built utilizing bootstrap, making it responsive.  It is making use of HTML5 audio tags for embeded mp3 playback.  It is making use of an iframe that is using a service called embed social to embed particular facebook photo albums on this site, and remains responsive.  It also has an embedded spreadshirt ecommerce store, that too remains responsive.",
  "mywork" => "This will be replaced by some actual text later.",
  "skills" => array("HTML", "CSS", "JS", "JQuery", "Bootstrap", "Responsive", "HTML5 Audio", "embedsocial", "spreadshirt")
);



