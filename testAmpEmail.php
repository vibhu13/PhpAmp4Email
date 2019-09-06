<?php
require './src/phpmail4amp.php';

  $ampmail = new PHPmail4AMP;
  
  $ampmail->sendFrom('shivamfn@gmail.com', 'Shivam Fn');
  $ampmail->sendTo('smartyvibhuse@gmail.com', 'Vibhu Yadav');


  //$ampmail->sendCC('emailaddress@example.com');
  //$ampmail->sendBCC('emailaddress@example.com');
  //$ampmail->replyTo('emailaddress@example.com');
  
  $ampmail->subject   = 'Email with AMP version';
  $ampmail->mailText  = 'Hello world in Text!';
/*  $ampmail->mailAMP   = '<!doctype html>
      <html amp4email>
      <head>
        <meta charset="utf-8">
        <style amp4email-boilerplate>body{visibility:hidden}</style>
        <script async src="https://cdn.ampproject.org/v0.js"></script>
      </head>
      <body>
        Hello world in AMP!
      </body>
      </html>';
 */
  $ampmail->mailAMP = '<!doctype html>
<html amp4email>
<head>
  <meta charset="utf-8">
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
  <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
  <style amp4email-boilerplate>body{visibility:hidden}</style>
  <style amp-custom>
    .products {
      display: block;
      height: 100px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
      background: #fff;
      border-radius: 2px;
      margin-bottom: 15px;
      position: relative;
    }

    .products amp-img {
      float: left;
      margin-right: 16px;
    }
  </style>
</head>
<body>
  You should see <b>6</b> fruits with pictures, names, stars, and prices.
  <amp-list id="amp-list-placeholder" noloading width="auto"
            height="1000"
            layout="fixed-height" src="https://amp.gmail.dev/playground/public/ssr_amp_list">
    <div placeholder>
      <ul class="results">
         <li></li><li></li><li></li><li></li><li></li>
      </ul>
    </div>
    <template type="amp-mustache">
        <div class="products">
            <amp-img width="150"
                   height="100"
                   alt="{{name}}"
                   src="{{img}}"></amp-img>
            <p class="name">{{name}}</p>
            <p class="star">{{{stars}}}</p>
            <p class="price">{{price}}</p>
        </div>
    </template>
  </amp-list>

  You should now only see <b>2</b> fruits with pictures, names, stars, and prices because I specify "max-items" = 2.

  <amp-list id="amp-list-placeholder" noloading width="auto"
            height="600"
            max-items=2
            layout="fixed-height" src="https://amp.gmail.dev/playground/public/ssr_amp_list">
    <div placeholder>
      <ul class="results">
         <li></li><li></li><li></li><li></li><li></li>
      </ul>
    </div>
    <template type="amp-mustache">
        <div class="products">
            <amp-img width="150"
                   height="100"
                   alt="{{name}}"
                   src="{{img}}"></amp-img>
            <p class="name">{{name}}</p>
            <p class="star">{{{stars}}}</p>
            <p class="price">{{price}}</p>
        </div>
    </template>
  </amp-list>

  You should now only see <b>pear and banana</b> with pictures, names, stars, and prices because I specify a different path by setting "items".

  <amp-list id="amp-list-placeholder" noloading width="auto"
            height="600"
            items="part_of_them.pear_and_banana"
            layout="fixed-height" src="https://amp.gmail.dev/playground/public/ssr_amp_list">
    <div placeholder>
      <ul class="results">
         <li></li><li></li><li></li><li></li><li></li>
      </ul>
    </div>
    <template type="amp-mustache">
        <div class="products">
            <amp-img width="150"
                   height="100"
                   alt="{{name}}"
                   src="{{img}}"></amp-img>
            <p class="name">{{name}}</p>
            <p class="star">{{{stars}}}</p>
            <p class="price">{{price}}</p>
        </div>
    </template>
  </amp-list>
</body>
</html>';
  $ampmail->mailHTML  = 'Helo world in <strong>HTML</strong>!';
  if($ampmail->send()) {
	  echo "Yesss";
    // success
  } else {
	  echo "Failed" ;
    // failed
  }
