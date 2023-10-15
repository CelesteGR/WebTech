
function getDataFromForm() {
  var fname = document.getElementsByName("fname")[0].value;
  var lname = document.getElementsByName("lname")[0].value;


  runAjax(fname, lname);
}

function runAjax(fname,lname) {

  var xhr = new XMLHttpRequest();

  var url = "./ajax.php";

  var queryParams = "?fname=" + encodeURIComponent(fname) + "&lname=" + encodeURIComponent(lname);

  xhr.open("GET", url + queryParams, true);


  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {

        if (typeof xhr.responseText === 'string') {
            
            var responseStringElement = document.getElementById("responseString");

            responseStringElement.textContent = xhr.responseText;
            
            alert("it worked!");
        }
    }
};

xhr.send();
      }

 
