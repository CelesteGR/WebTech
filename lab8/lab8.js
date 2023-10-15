
function getDataFromForm() {
  var firstName = document.getElementsByName("fname")[0].value;
  var lastName = document.getElementsByName("lname")[0].value;


  runAjax(firstName, lastName);
}

function runAjax(fname,lname) {

  var xhr = new XMLHttpRequest();

  var url = "./ajax.php";

  var queryParams = "?firstName=" + encodeURIComponent(fname) + "&lastName=" + encodeURIComponent(lname);

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

 