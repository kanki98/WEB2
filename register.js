
let registerForm = document.getElementById("registerForm");
let registerButton = document.getElementById("registerButton");
let errorMessage = document.getElementById("errorMessage");

registerButton.addEventListener("click",(event) =>  {
    errorMessage.innerHTML="";
    event.preventDefault();
    let ime = document.getElementById("ime").value;
    let imeL = ime.length;
    let prezime = document.getElementById("prezime").value;
    let prezimeL = prezime.length;
    let username = document.getElementById("username").value;
    let usernameL = username.length;
    let password = document.getElementById("password").value;
    let passwordL = password.length;
    let emailad = document.getElementById("email").value;
    let pozicijaA = emailad.indexOf("@");
    let pozicijatocke = emailad.lastIndexOf(".");
    let emaillen = emailad.length - 1;
    var zastavica = true;

    if (imeL == "" || prezimeL == "" || usernameL == ""  || passwordL == "") {
        console.log("Nisu unešeni svi potrebni podaci!");
        errorMessage.innerHTML="Nisu unešeni svi potrebni podaci!";
        zastavica = false;
    } else if (pozicijaA < 2 || (pozicijatocke - pozicijaA) < 2 || (emaillen - pozicijatocke) < 2) {
        console.log("Email format nije valjan.");
        errorMessage.innerHTML="Email format nije valjan.";
        zastavica = false;
    }
    if(zastavica)   {
       let xhr = new XMLHttpRequest();
       xhr.open("POST", "registracija.php", true);
       xhr.onload = () => {

        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let responseData = JSON.parse(xhr.responseText);
                var obj = responseData[0];
                console.log(obj.korisnikPostoji);
                if(obj.korisnikPostoji) {
                    errorMessage.innerHTML="Korisničko ime već postoji";
                }   else {
                    window.alert("Hvala na registraciji");
                    window.location.href = "login.php";
                }

            }
          }
        };

    let registerFormData = new FormData(registerForm);
    xhr.send(registerFormData);
    }
  }
);
