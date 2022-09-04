function anim() {
    var elem = document.getElementById("anim");
    var pos = 800;
    id = setInterval(frame, 10);
    function frame() {
      if (pos == 0) {
        clearInterval(id);
      } else {
        pos= pos - 10; 
        elem.style.left = pos + 'px';
        elem.style.opacity =   "100%";
        elem.style.transform = "rotate("+ pos/5 +"deg)"; 
      }
    }
}

