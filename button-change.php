https://stackoverflow.com/questions/2906582/how-to-create-an-html-button-that-acts-like-a-link


.............................css..................
.fb_iframe_widget iframe {
    opacity: 0;
}

.fb_iframe_widget {
  background-image: url(http://localhost/eventbookings-website/wp-content/uploads/2019/10/fb.png);
  background-repeat: no-repeat;
  background-size:150px 30px;
  
}



 <!-- facebook sigup button  -->
<div class="fb-login-button" data-width="150" data-height="120" data-size="small" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="true"></div>
