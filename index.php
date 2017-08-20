<?php
//error_reporting(0);
header('X-Frame-Options: GOFORIT');
//API TMDb
// API Key (v3 auth): 6dcd7369f481c153eb36b8d8b3b36d2c
// API Read Access Token (v4 auth): eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2ZGNkNzM2OWY0ODFjMTUzZWIzNmI4ZDhiM2IzNmQyYyIsInN1YiI6IjU5MDM2ZWU2YzNhMzY4M2I4NTAwMGVjYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Gjh3XeuF5vYbGuO2pGUSrBKBrj40dd-kILrpVtb-BU8

require_once('tmdb_v3-PHP-API--master/tmdb-api.php');
require_once("php-gracenote-master/php-gracenote/Gracenote.class.php");

// if you have no $conf it uses the default config
$tmdb = new TMDB();

//Insert your API Key of TMDB
//Necessary if you use default conf
$tmdb->setAPIKey('6dcd7369f481c153eb36b8d8b3b36d2c');

//API Gracenote
//UserID: 49074523971384348-098F3E759728E0FB43D21A4D269E12C5
//ClientID: 212930051
//ClientTag: 3E34D5DF274F7301E4B2E684C66EEB2A
$graceApi = new Gracenote\WebAPI\GracenoteWebAPI('212930051', '3E34D5DF274F7301E4B2E684C66EEB2A', '49074523971384348-098F3E759728E0FB43D21A4D269E12C5');

?>

<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filmx - watch what you hear 🎶 </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous"><link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <script src="https://use.fontawesome.com/a451c9aba8.js"></script>

  </head>
  <body>
    <div class="se-pre-con"></div>
    <div class="hamburger-menu-open">
      <div class="close-x">
        <img src="images/close-x.png" />
      </div>
      <div class="social-icons-menu">
        <ul>
          <li class="menu-title">Share</li>
          <li><div id="facebook">
            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fevanpizzolato.com%2Fportfolio%2Ffilmx%2F&amp;src=sdkpreparse">
              <svg width="27px" height="27px" viewBox="0 0 27 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs></defs>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Desktop" transform="translate(-1127.000000, -40.000000)" fill-rule="nonzero" fill="#9B9B9B">
                          <g id="Header-Social" transform="translate(1126.562500, 39.648438)">
                              <g id="facebook-with-circle">
                                  <path d="M13.671875,0.546875 C6.42304688,0.546875 0.546875,6.42304688 0.546875,13.671875 C0.546875,20.9207031 6.42304688,26.796875 13.671875,26.796875 C20.9207031,26.796875 26.796875,20.9207031 26.796875,13.671875 C26.796875,6.42304688 20.9207031,0.546875 13.671875,0.546875 Z M16.7808594,9.61679687 L14.8080078,9.61679687 C14.5742188,9.61679687 14.3144531,9.92441406 14.3144531,10.3332031 L14.3144531,11.7578125 L16.7822266,11.7578125 L16.4089844,13.7894531 L14.3144531,13.7894531 L14.3144531,19.8884766 L11.9861328,19.8884766 L11.9861328,13.7894531 L9.87382813,13.7894531 L9.87382813,11.7578125 L11.9861328,11.7578125 L11.9861328,10.5628906 C11.9861328,8.8484375 13.1755859,7.45527344 14.8080078,7.45527344 L16.7808594,7.45527344 L16.7808594,9.61679687 Z" id="Shape"></path>
                              </g>
                          </g>
                      </g>
                  </g>
              </svg>
            </a>
          </div></li>
          <li><div id="google+">
            <a href="https://plus.google.com/share?url=http://evanpizzolato.com/portfolio/filmx/">
              <svg width="28px" height="27px" viewBox="0 0 28 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs></defs>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Desktop" transform="translate(-1181.000000, -40.000000)" fill-rule="nonzero" fill="#9B9B9B">
                          <g id="Header-Social" transform="translate(1126.562500, 39.648438)">
                              <g id="google+-with-circle" transform="translate(54.687500, 0.000000)">
                                  <path d="M13.671875,0.546875 C6.42304688,0.546875 0.546875,6.42304688 0.546875,13.671875 C0.546875,20.9207031 6.42304688,26.796875 13.671875,26.796875 C20.9207031,26.796875 26.796875,20.9207031 26.796875,13.671875 C26.796875,6.42304688 20.9207031,0.546875 13.671875,0.546875 Z M12.9158203,19.3060547 C12.0914062,19.7066406 11.2041016,19.7490234 10.8609375,19.7490234 C10.7953125,19.7490234 10.7583984,19.7490234 10.7583984,19.7490234 C10.7583984,19.7490234 10.7269531,19.7490234 10.6845703,19.7490234 C10.1486328,19.7490234 7.48125,19.6259766 7.48125,17.1964844 C7.48125,14.809375 10.3865234,14.6220703 11.2765625,14.6220703 L11.2998047,14.6220703 C10.7857422,13.9357422 10.8923828,13.2439453 10.8923828,13.2439453 C10.8472656,13.2466797 10.7816406,13.2494141 10.7009766,13.2494141 C10.3660156,13.2494141 9.71933594,13.1960938 9.16425781,12.8378906 C8.48339844,12.4003906 8.13886719,11.6552734 8.13886719,10.6244141 C8.13886719,7.7109375 11.3203125,7.59335938 11.3517578,7.590625 L14.5291016,7.590625 L14.5291016,7.66035156 C14.5291016,8.01582031 13.890625,8.08554688 13.4558594,8.14433594 C13.3082031,8.16621094 13.0115234,8.19492188 12.928125,8.23730469 C13.7333984,8.66796875 13.8632812,9.34335938 13.8632812,10.3496094 C13.8632812,11.4953125 13.4148437,12.1009766 12.9390625,12.5261719 C12.64375,12.7900391 12.4126953,12.9964844 12.4126953,13.2740234 C12.4126953,13.5460938 12.7298828,13.8236328 13.0990234,14.1476562 C13.7019531,14.6794922 14.5291016,15.4027344 14.5291016,16.6236328 C14.5291016,17.8855469 13.9863281,18.7878906 12.9158203,19.3060547 Z M19.8242188,13.671875 L17.7734375,13.671875 L17.7734375,15.7226562 L16.40625,15.7226562 L16.40625,13.671875 L14.3554688,13.671875 L14.3554688,12.3046875 L16.40625,12.3046875 L16.40625,10.2539062 L17.7734375,10.2539062 L17.7734375,12.3046875 L19.8242188,12.3046875 L19.8242188,13.671875 Z M11.2423828,15.2441406 C11.1712891,15.2441406 11.1001953,15.246875 11.0277344,15.2523438 C10.4207031,15.2974609 9.86015625,15.5244141 9.45546875,15.8935547 C9.05351563,16.2572266 8.8484375,16.7166016 8.87714844,17.1800781 C8.93867187,18.1521484 9.98183594,18.7208984 11.2492187,18.6306641 C12.4960938,18.5404297 13.3273437,17.8212891 13.2671875,16.8492188 C13.2097656,15.9359375 12.4154297,15.2441406 11.2423828,15.2441406 Z M12.4373047,9.95996094 C12.1064453,8.79785156 11.5732422,8.45332031 10.7447266,8.45332031 C10.6558594,8.45332031 10.565625,8.46699219 10.4794922,8.49023437 C10.1199219,8.59277344 9.83417969,8.8921875 9.67558594,9.33789062 C9.51289063,9.7890625 9.50332031,10.259375 9.64277344,10.7953125 C9.89570312,11.7537109 10.5765625,12.4482422 11.2628906,12.4482422 C11.353125,12.4482422 11.4433594,12.4373047 11.528125,12.4113281 C12.2787109,12.2007812 12.7490234,11.0550781 12.4373047,9.95996094 Z" id="Shape"></path>
                              </g>
                          </g>
                      </g>
                  </g>
              </svg>
            </a>
          </div></li>
          <li><div id="twitter">
            <a href="https://twitter.com/share" class="twitter-share-button" data-text="watch what you hear - filmx" data-url="http://evanpizzolato.com/portfolio/filmx/" data-show-count="false">
              <svg width="27px" height="27px" viewBox="0 0 27 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs></defs>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Desktop" transform="translate(-1236.000000, -40.000000)" fill-rule="nonzero" fill="#9B9B9B">
                          <g id="Header-Social" transform="translate(1126.562500, 39.648438)">
                              <g id="twitter-with-circle" transform="translate(109.375000, 0.000000)">
                                  <path d="M13.671875,0.546875 C6.42304688,0.546875 0.546875,6.42304688 0.546875,13.671875 C0.546875,20.9207031 6.42304688,26.796875 13.671875,26.796875 C20.9207031,26.796875 26.796875,20.9207031 26.796875,13.671875 C26.796875,6.42304688 20.9207031,0.546875 13.671875,0.546875 Z M19.0107422,11.2984375 C19.0162109,11.4105469 19.0175781,11.5226562 19.0175781,11.6320312 C19.0175781,15.05 16.4185547,18.9888672 11.6634766,18.9888672 C10.2033203,18.9888672 8.84433594,18.5623047 7.70136719,17.8267578 C7.90234375,17.8513672 8.10878906,17.8609375 8.31796875,17.8609375 C9.52929688,17.8609375 10.6435547,17.4494141 11.528125,16.7548828 C10.3974609,16.7330078 9.44316406,15.9865234 9.11367188,14.9611328 C9.27089844,14.9898438 9.43222656,15.00625 9.59902344,15.00625 C9.83417969,15.00625 10.0638672,14.9748047 10.2798828,14.9160156 C9.09726563,14.678125 8.20585938,13.6335937 8.20585938,12.38125 L8.20585938,12.3498047 C8.55449219,12.5425781 8.95371094,12.6601562 9.37753906,12.6738281 C8.68300781,12.2089844 8.22773438,11.41875 8.22773438,10.5205078 C8.22773438,10.0474609 8.35488281,9.60175781 8.57773438,9.2203125 C9.85332031,10.784375 11.7564453,11.8125 13.9056641,11.9232422 C13.8605469,11.7332031 13.8386719,11.5363281 13.8386719,11.3326172 C13.8386719,9.90664062 14.9953125,8.74726562 16.4240234,8.74726562 C17.1664063,8.74726562 17.8390625,9.06171875 18.3107422,9.56484375 C18.9,9.44726562 19.4523438,9.23398437 19.9513672,8.93730469 C19.7585938,9.54023437 19.3498047,10.0474609 18.8152344,10.36875 C19.3388672,10.3044922 19.8365234,10.1664062 20.3,9.95996094 C19.9541016,10.478125 19.5152344,10.9347656 19.0107422,11.2984375 Z" id="Shape"></path>
                              </g>
                          </g>
                      </g>
                  </g>
              </svg>
            </a>
          </div></li>
        </ul>
      </div>
    </div>
    <header>
      <div class="hamburger-menu-icon">
        <img src="images/hambuger-menu.png" />
      </div>
      <div class="social-icons">
        <ul>
          <li><div id="facebook">
            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fevanpizzolato.com%2Fportfolio%2Ffilmx%2F&amp;src=sdkpreparse">
              <svg width="27px" height="27px" viewBox="0 0 27 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs></defs>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Desktop" transform="translate(-1127.000000, -40.000000)" fill-rule="nonzero" fill="#9B9B9B">
                          <g id="Header-Social" transform="translate(1126.562500, 39.648438)">
                              <g id="facebook-with-circle">
                                  <path d="M13.671875,0.546875 C6.42304688,0.546875 0.546875,6.42304688 0.546875,13.671875 C0.546875,20.9207031 6.42304688,26.796875 13.671875,26.796875 C20.9207031,26.796875 26.796875,20.9207031 26.796875,13.671875 C26.796875,6.42304688 20.9207031,0.546875 13.671875,0.546875 Z M16.7808594,9.61679687 L14.8080078,9.61679687 C14.5742188,9.61679687 14.3144531,9.92441406 14.3144531,10.3332031 L14.3144531,11.7578125 L16.7822266,11.7578125 L16.4089844,13.7894531 L14.3144531,13.7894531 L14.3144531,19.8884766 L11.9861328,19.8884766 L11.9861328,13.7894531 L9.87382813,13.7894531 L9.87382813,11.7578125 L11.9861328,11.7578125 L11.9861328,10.5628906 C11.9861328,8.8484375 13.1755859,7.45527344 14.8080078,7.45527344 L16.7808594,7.45527344 L16.7808594,9.61679687 Z" id="Shape"></path>
                              </g>
                          </g>
                      </g>
                  </g>
              </svg>
            </a>
          </div></li>
          <li><div id="google+">
            <a href="https://plus.google.com/share?url=http://evanpizzolato.com/portfolio/filmx/">
              <svg width="28px" height="27px" viewBox="0 0 28 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs></defs>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Desktop" transform="translate(-1181.000000, -40.000000)" fill-rule="nonzero" fill="#9B9B9B">
                          <g id="Header-Social" transform="translate(1126.562500, 39.648438)">
                              <g id="google+-with-circle" transform="translate(54.687500, 0.000000)">
                                  <path d="M13.671875,0.546875 C6.42304688,0.546875 0.546875,6.42304688 0.546875,13.671875 C0.546875,20.9207031 6.42304688,26.796875 13.671875,26.796875 C20.9207031,26.796875 26.796875,20.9207031 26.796875,13.671875 C26.796875,6.42304688 20.9207031,0.546875 13.671875,0.546875 Z M12.9158203,19.3060547 C12.0914062,19.7066406 11.2041016,19.7490234 10.8609375,19.7490234 C10.7953125,19.7490234 10.7583984,19.7490234 10.7583984,19.7490234 C10.7583984,19.7490234 10.7269531,19.7490234 10.6845703,19.7490234 C10.1486328,19.7490234 7.48125,19.6259766 7.48125,17.1964844 C7.48125,14.809375 10.3865234,14.6220703 11.2765625,14.6220703 L11.2998047,14.6220703 C10.7857422,13.9357422 10.8923828,13.2439453 10.8923828,13.2439453 C10.8472656,13.2466797 10.7816406,13.2494141 10.7009766,13.2494141 C10.3660156,13.2494141 9.71933594,13.1960938 9.16425781,12.8378906 C8.48339844,12.4003906 8.13886719,11.6552734 8.13886719,10.6244141 C8.13886719,7.7109375 11.3203125,7.59335938 11.3517578,7.590625 L14.5291016,7.590625 L14.5291016,7.66035156 C14.5291016,8.01582031 13.890625,8.08554688 13.4558594,8.14433594 C13.3082031,8.16621094 13.0115234,8.19492188 12.928125,8.23730469 C13.7333984,8.66796875 13.8632812,9.34335938 13.8632812,10.3496094 C13.8632812,11.4953125 13.4148437,12.1009766 12.9390625,12.5261719 C12.64375,12.7900391 12.4126953,12.9964844 12.4126953,13.2740234 C12.4126953,13.5460938 12.7298828,13.8236328 13.0990234,14.1476562 C13.7019531,14.6794922 14.5291016,15.4027344 14.5291016,16.6236328 C14.5291016,17.8855469 13.9863281,18.7878906 12.9158203,19.3060547 Z M19.8242188,13.671875 L17.7734375,13.671875 L17.7734375,15.7226562 L16.40625,15.7226562 L16.40625,13.671875 L14.3554688,13.671875 L14.3554688,12.3046875 L16.40625,12.3046875 L16.40625,10.2539062 L17.7734375,10.2539062 L17.7734375,12.3046875 L19.8242188,12.3046875 L19.8242188,13.671875 Z M11.2423828,15.2441406 C11.1712891,15.2441406 11.1001953,15.246875 11.0277344,15.2523438 C10.4207031,15.2974609 9.86015625,15.5244141 9.45546875,15.8935547 C9.05351563,16.2572266 8.8484375,16.7166016 8.87714844,17.1800781 C8.93867187,18.1521484 9.98183594,18.7208984 11.2492187,18.6306641 C12.4960938,18.5404297 13.3273437,17.8212891 13.2671875,16.8492188 C13.2097656,15.9359375 12.4154297,15.2441406 11.2423828,15.2441406 Z M12.4373047,9.95996094 C12.1064453,8.79785156 11.5732422,8.45332031 10.7447266,8.45332031 C10.6558594,8.45332031 10.565625,8.46699219 10.4794922,8.49023437 C10.1199219,8.59277344 9.83417969,8.8921875 9.67558594,9.33789062 C9.51289063,9.7890625 9.50332031,10.259375 9.64277344,10.7953125 C9.89570312,11.7537109 10.5765625,12.4482422 11.2628906,12.4482422 C11.353125,12.4482422 11.4433594,12.4373047 11.528125,12.4113281 C12.2787109,12.2007812 12.7490234,11.0550781 12.4373047,9.95996094 Z" id="Shape"></path>
                              </g>
                          </g>
                      </g>
                  </g>
              </svg>
            </a>
          </div></li>
          <li><div id="twitter">
            <a href="https://twitter.com/share" class="twitter-share-button" data-text="watch what you hear - filmx" data-url="http://evanpizzolato.com/portfolio/filmx/" data-show-count="false">
              <svg width="27px" height="27px" viewBox="0 0 27 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs></defs>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Desktop" transform="translate(-1236.000000, -40.000000)" fill-rule="nonzero" fill="#9B9B9B">
                          <g id="Header-Social" transform="translate(1126.562500, 39.648438)">
                              <g id="twitter-with-circle" transform="translate(109.375000, 0.000000)">
                                  <path d="M13.671875,0.546875 C6.42304688,0.546875 0.546875,6.42304688 0.546875,13.671875 C0.546875,20.9207031 6.42304688,26.796875 13.671875,26.796875 C20.9207031,26.796875 26.796875,20.9207031 26.796875,13.671875 C26.796875,6.42304688 20.9207031,0.546875 13.671875,0.546875 Z M19.0107422,11.2984375 C19.0162109,11.4105469 19.0175781,11.5226562 19.0175781,11.6320312 C19.0175781,15.05 16.4185547,18.9888672 11.6634766,18.9888672 C10.2033203,18.9888672 8.84433594,18.5623047 7.70136719,17.8267578 C7.90234375,17.8513672 8.10878906,17.8609375 8.31796875,17.8609375 C9.52929688,17.8609375 10.6435547,17.4494141 11.528125,16.7548828 C10.3974609,16.7330078 9.44316406,15.9865234 9.11367188,14.9611328 C9.27089844,14.9898438 9.43222656,15.00625 9.59902344,15.00625 C9.83417969,15.00625 10.0638672,14.9748047 10.2798828,14.9160156 C9.09726563,14.678125 8.20585938,13.6335937 8.20585938,12.38125 L8.20585938,12.3498047 C8.55449219,12.5425781 8.95371094,12.6601562 9.37753906,12.6738281 C8.68300781,12.2089844 8.22773438,11.41875 8.22773438,10.5205078 C8.22773438,10.0474609 8.35488281,9.60175781 8.57773438,9.2203125 C9.85332031,10.784375 11.7564453,11.8125 13.9056641,11.9232422 C13.8605469,11.7332031 13.8386719,11.5363281 13.8386719,11.3326172 C13.8386719,9.90664062 14.9953125,8.74726562 16.4240234,8.74726562 C17.1664063,8.74726562 17.8390625,9.06171875 18.3107422,9.56484375 C18.9,9.44726562 19.4523438,9.23398437 19.9513672,8.93730469 C19.7585938,9.54023437 19.3498047,10.0474609 18.8152344,10.36875 C19.3388672,10.3044922 19.8365234,10.1664062 20.3,9.95996094 C19.9541016,10.478125 19.5152344,10.9347656 19.0107422,11.2984375 Z" id="Shape"></path>
                              </g>
                          </g>
                      </g>
                  </g>
              </svg>
            </a>
          </div></li>
        </ul>
      </div>
      <h1>filmx</h1>
      <div class="pure-g">
        <div class="pure-u-1-1 pure-u-sm-1">
          <p>
            Enter your favourite (or not) musical artist in the search bar below. Based on their genre, filmx will recommend something to watch. The more obcure the artist, the better the results.
          </p>
        </div>

      </div>
</header>

      <!-- SEARCH BAR -->
<section>
         <div class="search">
           <form class="search-bar" action="" method="POST">
             <input type="text" name="artist" class="searchTerm" placeholder="Enter artist">
             <button type="submit" name="submit" class="searchButton">
               <i class="fa fa-search"></i>
            </button>
           </form>

         </div>

      <!-- END SEARCH BAR -->


<!-- RESULTS-->
<?php

    //////////////////////////////////////// START OF OUTPUT ////////////////////////////////

// if (isset($_POST['artist']) && empty($_POST['artist'])) {
//     echo "<div class='not_set text-center'>ENTER AN ARTIST. FIELD CANNOT BE BLANK</div>";
// } else

if (isset($_POST['artist']) && empty($_POST['artist'])) {
    echo "<div class='field_not_set'>ENTER AN ARTIST. FIELD CANNOT BE BLANK</div>";
} else

if (isset($_POST['submit'])) {


    $results = $graceApi->searchArtist($_POST['artist']);
    $genreArray = array();
    foreach ($results as $genres) :
        $genreArray[] = $genres['genre']; //from the searched artist, grabbing the information in the genres array.
    endforeach;

    $genreArraySmall = array();
    foreach ($genreArray[0] as $genres) ://grabs the first grenre of the artists searched, in the array.
        $genreArraySmall[] = $genres['text'];
    endforeach;

    //var_dump($genreArraySmall);

    $rand = mt_rand(0,19);



    //finds specific word in the array
    $hipHopIn = in_array("Hip-Hop", $genreArraySmall);//full word in array
    $hipHopPreg = preg_grep("/Hip-Hop/", $genreArraySmall);//a match somewhere in the array

    $popIn = in_array("Pop", $genreArraySmall);
    $popPreg = preg_grep("/Pop/", $genreArraySmall);

    $latinIn = in_array("Latin", $genreArraySmall);
    $latinPreg = preg_grep("/Latin/", $genreArraySmall);

    $bluesIn = in_array("Blues", $genreArraySmall);
    $bluesPreg = preg_grep("/Blues/", $genreArraySmall);

    $classicalIn = in_array("Classical", $genreArraySmall);
    $classicalPreg = preg_grep("/Classical/", $genreArraySmall);

    $worldIn = in_array("World", $genreArraySmall);
    $worldPreg = preg_grep("/World/", $genreArraySmall);

    $electronicaIn = in_array("Electronica", $genreArraySmall);
    $electronicaPreg = preg_grep("/Electronica/", $genreArraySmall);

    $countryIn = in_array("Country", $genreArraySmall);
    $countryPreg = preg_grep("/Country/", $genreArraySmall);

    $comedyIn = in_array("Comedy", $genreArraySmall);
    $comedyPreg = preg_grep("/Comedy/", $genreArraySmall);

    $folkIn = in_array("Folk", $genreArraySmall);
    $folkPreg = preg_grep("/Folk/", $genreArraySmall);

    $punkIn = in_array("Punk", $genreArraySmall);
    $punkPreg = preg_grep("/Punk/", $genreArraySmall);

    $newAgeIn = in_array("New Age", $genreArraySmall);
    $newAgePreg = preg_grep("/New Age/", $genreArraySmall);

    $rockIn = in_array("Rock", $genreArraySmall);
    $rockPreg = preg_grep("/Rock/", $genreArraySmall);

    $rnbIn = in_array("R&B", $genreArraySmall);
    $rnbPreg = preg_grep("/R&B/", $genreArraySmall);

    $soulIn = in_array("Soul", $genreArraySmall);
    $soulPreg = preg_grep("/Soul/", $genreArraySmall);

    $soundtrackIn = in_array("Soundtrack", $genreArraySmall);
    $soundtrackPreg = preg_grep("/Soundtrack/", $genreArraySmall);

    $reggaeIn = in_array("Reggae", $genreArraySmall);
    $reggaePreg = preg_grep("/Reggae/", $genreArraySmall);

    $gospelIn = in_array("Gospel", $genreArraySmall);
    $gospelPreg = preg_grep("/Gospel/", $genreArraySmall);

    $metalIn = in_array("Metal", $genreArraySmall);
    $metalPreg = preg_grep("/Metal/", $genreArraySmall);

    $hardcoreIn = in_array("Hardcore", $genreArraySmall);
    $hardcorePreg = preg_grep("/Hardcore/", $genreArraySmall);

    $danceIn = in_array("Dance", $genreArraySmall);
    $dancePreg = preg_grep("/Dance/", $genreArraySmall);

    $houseIn = in_array("House", $genreArraySmall);
    $housePreg = preg_grep("/House/", $genreArraySmall);

    $oldiesIn = in_array("Oldies", $genreArraySmall);
    $oldiesPreg = preg_grep("/Oldies/", $genreArraySmall);

    $jazzIn = in_array("Jazz", $genreArraySmall);
    $jazzPreg = preg_grep("/Jazz/", $genreArraySmall);

    $indieIn = in_array("Indie", $genreArraySmall);
    $indiePreg = preg_grep("/Indie/", $genreArraySmall);

    $intelligentIn = in_array("Intelligent", $genreArraySmall);
    $intelligentPreg = preg_grep("/Intelligent/", $genreArraySmall);

    if ($hipHopPreg || $hipHopIn) {
        $movieGenres = $tmdb->getMoviesByGenre(28);
        $hipHopArray = array();
        foreach($movieGenres as $movie) :
            $hipHopArray[] = $movie->getID();
        endforeach;


        $movieID = $hipHopArray[$rand]; //captures the ID from the first search result
        $movies = $tmdb->getMovie($movieID);
        $trailer = 'https://www.youtube.com/watch?v='.$movies->getTrailer();
        $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

          echo '<h2>What to watch</h2>
            <div class="results-title-underline"></div>
            <div class="film-results">
              <div class="flex-container">
                <div class="flex-item-1">
                  <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                </div>
                <div class="flex-item-2">
                  <p>
                    <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                  </p>
                  <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                    <span>View on IMDb</span></div></a>
                </div>
              </div>
            </div>';

        } if (($hipHopPreg || $hipHopIn) && ($electronicaIn || $electronicaPreg)) {
            $movieGenres = $tmdb->getMoviesByGenre(53);
            $hipHopArray = array();
            foreach($movieGenres as $movie) :
                $hipHopArray[] = $movie->getID();
            endforeach;


            $movieID = $hipHopArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

        } if ($popIn || $popPreg) {
            $movieGenres = $tmdb->getMoviesByGenre(16);
            $popArray = array();
            foreach($movieGenres as $movie) :
                $popArray[] =  $movie->getID();
            endforeach;

            $movieID = $popArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

        } if ($punkIn || $punkPreg) {
            $movieGenres = $tmdb->getMoviesByGenre(99);
            $punkArray = array();
            foreach($movieGenres as $movie) :
                $punkArray[] =  $movie->getID();
            endforeach;

            $movieID = $punkArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

            //var_dump($movieJSON);

        } if ($electronicaIn || $electronicaPreg) {
            $movieGenres = $tmdb->getMoviesByGenre(878);
            $electronicaArray = array();
            foreach($movieGenres as $movie) :
                $electronicaArray[] =  $movie->getID();
            endforeach;

            $movieID = $electronicaArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

        } if ($metalIn || $metalPreg || $hardcoreIn || $hardcorePreg) {
            $movieGenres = $tmdb->getMoviesByGenre(27);
            $metalArray = array();
            foreach($movieGenres as $movie) :
                $metalArray[] =  $movie->getID();
            endforeach;

            $movieID = $metalArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

        } if ($bluesIn || $bluesPreg ) {
            $movieGenres = $tmdb->getMoviesByGenre(37);
            $bluesArray = array();
            foreach ($movieGenres as $movie) :
                $bluesArray[] = $movie->getID();
            endforeach;

            $movieID = $bluesArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

        } if ($classicalIn || $classicalPreg || $oldiesIn || $oldiesPreg || $jazzIn || $jazzPreg ) {
            $movieGenres = $tmdb->getMoviesByGenre(36);
            $classicalArray = array();
            foreach ($movieGenres as $movie) :
                $classicalArray[] = $movie->getID();
            endforeach;

            $movieID = $classicalArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

        } if ($latinIn || $latinPreg ) {
            $movieGenres = $tmdb->getMoviesByGenre(35);
            $latinArray = array();
            foreach ($movieGenres as $movie) :
                $latinArray[] = $movie->getID();
            endforeach;

            $movieID = $latinArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

        } if ($countryIn || $countryPreg ) {
            $movieGenres = $tmdb->getMoviesByGenre(10752);
            $countryArray = array();
            foreach ($movieGenres as $movie) :
                $countryArray[] = $movie->getID();
            endforeach;

            $movieID = $countryArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

        } if ($indieIn || $indiePreg ) {
            $movieGenres = $tmdb->getMoviesByGenre(10402);
            $indieArray = array();
            foreach ($movieGenres as $movie) :
                $indieArray[] = $movie->getID();
            endforeach;

            $movieID = $indieArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

        } if ($danceIn || $dancePreg || $houseIn || $housePreg ) {
            $movieGenres = $tmdb->getMoviesByGenre(16);
            $danceArray = array();
            foreach ($movieGenres as $movie) :
                $danceArray[] = $movie->getID();
            endforeach;

            $movieID = $danceArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

        } if ($rnbIn || $rnbPreg || $soulIn || $soulPreg ) {
            $movieGenres = $tmdb->getMoviesByGenre(10749);
            $rnbArray = array();
            foreach ($movieGenres as $movie) :
                $rnbArray[] = $movie->getID();
            endforeach;

            $movieID = $rnbArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';


        } if ($newAgeIn || $newAgePreg || $worldIn || $worldPreg ) {
            $movieGenres = $tmdb->getMoviesByGenre(18);
            $newAgerray = array();
            foreach ($movieGenres as $movie) :
                $newAgeArray[] = $movie->getID();
            endforeach;

            $movieID = $newAgeArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

        } if ($reggaeIn || $reggaePreg ) {
            $movieGenres = $tmdb->getMoviesByGenre(35);
            $reggaeArray = array();
            foreach ($movieGenres as $movie) :
                $reggaeArray[] = $movie->getID();
            endforeach;

            $movieID = $reggaeArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

        } if ($soundtrackIn || $soundtrackPreg ) {
            $movieGenres = $tmdb->getMoviesByGenre(10402);
            $soundtrackArray = array();
            foreach ($movieGenres as $movie) :
                $soundtrackArray[] = $movie->getID();
            endforeach;

            $movieID = $soundtrackArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

        } if ($comedyIn || $comedyPreg ) {
            $movieGenres = $tmdb->getMoviesByGenre(80);
            $comedyArray = array();
            foreach ($movieGenres as $movie) :
                $comedyArray[] = $movie->getID();
            endforeach;

            $movieID = $comedyArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

        } if ($intelligentIn || $intelligentPreg ) {
            $movieGenres = $tmdb->getMoviesByGenre(99);
            $intelligentArray = array();
            foreach ($movieGenres as $movie) :
                $intelligentArray[] = $movie->getID();
            endforeach;

            $movieID = $intelligentArray[$rand]; //captures the ID from the first search result
            $movies = $tmdb->getMovie($movieID);
            $movieJSON = json_decode($movies->getJSON(), True); //gets back all movie data related to ID. decodes for use.

            echo '<h2>What to watch</h2>
              <div class="results-title-underline"></div>
              <div class="film-results">
                <div class="flex-container">
                  <div class="flex-item-1">
                    <img src="https://image.tmdb.org/t/p/w640'.$movieJSON['poster_path'] . '" />
                  </div>
                  <div class="flex-item-2">
                    <p>
                      <i id="film-title">'.$movieJSON['title'] . ' - </i>'.$movieJSON['overview'].'
                    </p>
                    <a href="http://www.imdb.com/title/'.$movieJSON['imdb_id'].'"><div class="imdb-link-btn">
                      <span>View on IMDb</span></div></a>
                  </div>
                </div>
              </div>';

        }

    }
    /////////////////////////////// END OF OUTPUT //////////////////////////

    ?>
</section>
<!-- END OF RESULTS-->

    <footer>
      <p>
        &copy 2017 Evan Pizzolato. All Rights Reserved.
      </p>
    </footer>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="script.js"></script>
</html>
