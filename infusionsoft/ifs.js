//Add me to a thank you page using an html snippet
//You must change the landing_page_url  variable to your landing page URL for this script to work.
var Response = '~Contact._SurveyResponse~'
var content = document.getElementsByTagName('div')
if (parseInt(Response) >= 9) {
  content[0].innerHTML = "Your response is 9 or 10"
}
else if (parseInt(Response) >= 7 && parseInt(Response) < 9){
  content.innerHTML = "Your response is 7 or 8"
}
else if (parseInt(Response) > 0 && parseInt(Response) < 7){
  content.innerHTML = "Your response is among 0 to 6"
}
var landing_page_url = 'http://www.google.com'
var seconds_to_wait = 4
//Don't change this
setTimeout("window.location.href = landing_page_url", seconds_to_wait * 1000);
