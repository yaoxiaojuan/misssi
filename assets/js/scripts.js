window.addEventListener("load", function(event) {
  var burger = document.getElementById('burger');
  burger.addEventListener('click', function(event){
    var header = document.getElementById('header');
    var className = header.className;
    if(className.indexOf('expanded') !== -1){
      header.className = className.replace('expanded', '');
    } else {
      header.className = className + ' expanded';
    }
  })
});