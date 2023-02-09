function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /* Loop through a collection of all HTML elements: */
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /* Make an HTTP request using the attribute value as the file name: */
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /* Remove the attribute, and call this function once more: */
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();
      /* Exit the function: */
      return;
    }
  }
}

const cursor = document.querySelector('.cursor');
document.addEventListener('mousemove', (e) => {
    cursor.setAttribute("style", "top: " + (e.clientY - 10) + "px; left: " + (e.clientX - 10) + "px;")
})
document.addEventListener('click', (e) => {
    cursor.classList.add("expand");
    setTimeout(() => {
        cursor.classList.remove("expand");
    }, 500);
})

setTimeout(function () {
    $('.loader_main').fadeToggle();
}, 2000);

//for universes
let imgBx = document.querySelectorAll('.imgBx');
let contentBx = document.querySelectorAll('.contentBx');

for (let i = 0; i < imgBx.length; i++) {
    imgBx[i].addEventListener('mouseover', function () {
        for (let i = 0; i < contentBx.length; i++) {
            contentBx[i].className = 'contentBx';
        }
        document.getElementById(this.dataset.id).className = 'contentBx active';

        for (let i = 0; i < imgBx.length; i++) {
            imgBx[i].className = 'imgBx';
        }
        this.className = 'imgBx active';
    })
}




// fuction for tabs
function opentab(evt, tabn) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabn).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();