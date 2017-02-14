console.log('scroll.js loaded');

var nav = document.querySelector('.brand-logo');
var navTopBar = document.querySelector('.nav-top-section');
var navTopBarSocial = document.querySelector('.location-social');

window.addEventListener('scroll', function(e){
  var position = window.pageYOffset; // get our current scroll position
  if(position > 30 ){
    nav.style.width = '200px';
    navTopBar.style.height = '10px';
    navTopBarSocial.style.display = 'none';
  }
  if(position < 30 ){
    nav.style.width = '250px';
    navTopBar.style.height = '48px';
    navTopBarSocial.style.display = 'block';
  }
});