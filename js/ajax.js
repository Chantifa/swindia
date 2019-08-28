/**const email = "mknqkbjm4v91";
const password = "B4harat..";
let token = "";
let uttarkhand = {};
let airportpickup_drop = {};
let contact = {};
let delhi = {};
let feedback = {};
let goa = {};
let himalayas = {};
let kashmir = {};
let madhyapradesh = {};
let mix = {};
let outsideIndia = {};
let punjab = {};
let rajasthan = {};
let uttarpradesh = {};
let uttrakhand = {};
let feedbackId = 0;

let tours = JSON.stringify({
    "email": email,
    "password": password
});

function postAuth(url, callback) {
    let req = new XMLHttpRequest();
    req.open("POST", url, true);
    req.setRequestHeader("Content-Type", "application/json");
    req.addEventListener("load", function () {
        if (req.status < 400)
            callback(req.responseText);
        else {
            callback(null, "Sorry an error occurred, please contact the administrator info@swindiatours.com");
        }
    });
    req.send(tours);
}

function get(url, callback) {
    let req = new XMLHttpRequest();
    req.open("GET", url, true);
    req.setRequestHeader("Authorization", token);
    req.addEventListener("load", function () {
        if (req.status < 400)
            callback(req.responseText);
        else {
            callback(null, "Sorry an error occurred, please contact the administrator info@swindiatours.com");
        }
    });
    req.send(null);
}

// get token

postAuth("ns73.domaincontrol.com", function (response, error) {
    if (response != null) {
        token = JSON.parse(response).token;
        requestAll();
    } else {
        message(error);
    }
}, tours);
/***
function requestAll() {
// Somit werden die Get-Request erst gemacht, wenn der Token von der Authentifizierung zurückgekommen ist (Siehe function postAuth)
// Die Get-Request sind einzelne Funktionen, damit man, falls benötigt, die einzelnen Request nochmals einzeln ansprechen kann (wird hier bei getFeedback no verwendet)

    getAirportpickup_drop();
    getContact();
    getDelhi();
    getFeedback();
    getGoa();
    getHimalayas();
    getKashmir();
    getMadhyapradesh();
    getMix();
    getOutsideIndia();
    getPunjab();
    getRajasthan();
    getUttarpradesh();
    getUttarkhand();
}

function getAirportpickup_drop() {
    get("https://tonyspizzafactory.herokuapp.com/api/pizzas", function (response, error) {
        if (response != null) {
            airportpickup_drop = JSON.parse(response);

            let airportpickupOutput = document.getElementById("airportpickup_drop");
            if (airportpickupOutput != null) {
                airportpickupOutput.forEach(airportpickup_drop => {

                    airportpickup_dropOutput.innerHTML += `
            <li>
              <img src="${airportpickup_drop.imageUrl}" alt="${airportpickup_drop.name}" width="300">
              <div>
                <h2>${airportpickup_drop.name}</h2>
                <p class="price">${airportpickup_drop.prize}</p>
                <a href="#" onclick="order(${airportpickup_drop.id}, 'airportpickup_drop', '${airportpickup_drop.name}')"><img src="img/trolley.svg" alt="Cart" width="50"></a>
              </div>
              <small>${airportpickup_drop.tours.join(", ")}</small>
              
            </li>`;

                });
            }
        } else {
            message(error);
        }
    });
}

function getDelhi() {

    get("https://tonyspizzafactory.herokuapp.com/api/delhi", function (response, error) {
        if (response != null) {
            delhi = JSON.parse(response);

            let delhiOutput = document.getElementById("delhi");
            if (delhiOutput != null) {
                delhi.forEach(delhi => {

                    delhiOutput.innerHTML += `
             <li>
                 <img src="${delhi.imageUrl}" alt="${delhi.name}" width="300">
                    <h2>${delhi.name}</h2>
                    <small>${delhi.tours.join(", ")}</small>
                    <div>
                        <select name="">
                            <option value="Italian dressing">Italian dressing</option>
                        </select>
                        <a href="#" onclick="order(${delhi.id}, 'delhi', '${delhi.name}')"><img src="img/trolley.svg" alt="Cart" width="50" ></a>
                    </div>
              </li>`;

                });
            }
        } else {
            message(error);
        }
    });
}

function getGoa() {

    get("https://tonyspizzafactory.herokuapp.com/api/softdrinks", function (response, error) {
        if (response != null) {
            goa = JSON.parse(response);

            let softdrinkOutput = document.getElementById("goa");
            if (softdrinkOutput != null) {
                goa.forEach(goa => {

                    goaOutput.innerHTML += `
            <li>

                <img src="${goa.imageUrl}" alt="${goa.name}" width="300">
                    <h2>${goa.name}</h2>
                    <div>
                        <select name=${goa.value}>
                            <option value=${goa.value}>${goa.value}</option>
                        </select>
                        <a href="#" onclick="order(${goa.id}, 'goa', '${goa.name}')"><img src="img/trolley.svg" alt="Cart" width="50" /></a>
                    </div>
              </li>`;
                });
            }
        } else {
            message(error);
        }
    });
}
**/
function getFeedback(callback) {
    get("ns73.domaincontrol.com", function (response, error) {
        if (response != null) {
            feedback = JSON.parse(response);
            feedback.forEach(feedback => {
                if (feedback.id > feedbackId) {
                    feedbackId = feedback.id;
                }
            });

            if (callback) {
                callback();
            }
        } else {
            message(error);
        }
    });
}

// messages
function message(messageText) {
    let messageOutput = document.getElementById("message");
    messageOutput.innerHTML = messageText;

    setTimeout(function () {
        messageOutput.innerHTML = "";
    }, 5000);
}

// post orders
function post(url, callback, body) {
    let req = new XMLHttpRequest();
    req.open("POST", url, true);
    req.setRequestHeader("Content-Type", "application/json");
    req.setRequestHeader("Authorization", token);
    req.addEventListener("load", function () {
        if (req.status < 400)
            callback(req.responseText);
        else {
            callback(null, "Sorry it occurred an error. Please contact the administrator");
        }
    });
    req.send(body);
}

function order(id, value, type, name) {
    let orderObject = JSON.stringify({
        "id": id,
        "value": value,
        "type": type,
        "name": name
    });

    post("ns73.domaincontrol.com", function (response, error) {
        if (response != null) {
            message(`Thank you for your order <strong>${name}</strong>.`);
        } else {
            message(error);
        }
    }, orderObject)
}

function postFeedback() {
    let id = feedbackId++;

    let toursRating = "";
    if (document.querySelector("#choiceawesome").checked) {
        toursRating = "awesome";
    } else if (document.querySelector("#choicegood").checked) {
        toursRating = "good";
    } else if (document.querySelector("#choiceokay1").checked) {
        toursRating = "okay";
    } else if (document.querySelector("#choicepoor").checked) {
        toursRating = "poor";
    }

    let prizeRating = "";
    if (document.querySelector("#choicefair").checked) {
        prizeRating = "fair";
    } else if (document.querySelector("#choiceokay2").checked) {
        prizeRating = "okay";
    } else if (document.querySelector("#choiceexpensive").checked) {
        prizeRating = "expensive";
    }

    let serviceRating = "";
    if (document.querySelector("#choiceawesome1").checked) {
        serviceRating = "awesome";
    } else if (document.querySelector("#choicegood1").checked) {
        serviceRating = "good";
    } else if (document.querySelector("#choiceokey3").checked) {
        serviceRating = "okey";
    }
      else if (document.querySelector("#choicepoor1").checked) {
        serviceRating = "poor";
    }
    let name = document.querySelector("#name").value;
    let email = document.querySelector("#email").value;
    let feedback = document.querySelector("#feedback").value;

    let feedbackObject = JSON.stringify({
        "id": id,
        "toursRating": toursRating,
        "prizeRating": prizeRating,
        "serviceRating": serviceRating,
        "name": name,
        "email": email,
        "feedback": feedback
    });

    post("ns37.domaincontrol.com", function (response, error) {
        if (response != null) {
            message("Thank you very much for your feedback.");
            getFeedback(printStatistic);
        } else {
            message(error);
        }
    }, feedbackObject);
}

const submitButton = document.querySelector("#submit");
if (submitButton != null) {
    submitButton.addEventListener("click", function (event) {

        event.preventDefault();
        postFeedback();
    })
}

// separate Ausgabe der Statistik. Somit können wir die Feedbacks zwar schon früher abholen, aber wir wollen sie erst ausgeben, wenn der User sein Feedback eingegeben hat

function printStatistic() {
    let statisticOuput = document.getElementById("statistic");
    if (statisticOuput != null) {

        // Ausserhalb des Loops Counter einrichten
        let likeAwesome = 0;
        let likeGood = 0;
        let likeOkay = 0;
        let likePoor = 0;
        let prizeFair = 0;
        let prizeOkay = 0;
        let prizeExpensive = 0;

        feedback.forEach(feedback => {
            // Mit Switch-Case durch jedes Feedback gehen und die Optionen abfragen und zählen

            switch (feedback.toursRating) {
                case "awesome":
                    likeAwesome++;
                    break;
                case "good":
                    likeGood++;
                    break;
                case "okay":
                    likeOkay++;
                    break;
                case "poor":
                    likePoor++;
                    break;
                default:
                    console.log("Fehler in Feedback " + feedback.id + ". Like-Feedback: " + feedback.toursRating);
                    break;
            }
            switch (feedback.serviceRating) {

            }


            switch (feedback.prizeRating) {
                case "fair":
                    prizeFair++;
                    break;
                case "okay":
                    prizeOkay++;
                    break;
                case "expensive":
                    prizeExpensive++;
                    break;
                default:
                    console.log("Fehler in Feedback" + feedback.id + ". Preis-Feedback: " + feedback.prizeRating);
                    break;
            }
        });

        // Ausgabe als 2 Tabellen

        statisticOuput.innerHTML = `
    <table id="statistic-like">
    <tr>
      <th>Statistic of Likes</th>
      <th>Number of Feedbacks</th>
    </tr>
    <tr>
      <td>Awesome</td>
      <td>${likeAwesome}</td>
    </tr>
    <tr>
      <td>Good</td>
      <td>${likeGood}</td>
    </tr>
    <tr>
      <td>Okay</td>
      <td>${likeOkay}</td>
    </tr>
    <tr>
      <td>Poor</td>
      <td>${likePoor}</td>
    </tr>
  </table>

  <table id="statistic-prize">
    <tr>
      <th>Statistic of Prize</th>
      <th>Number of Feedbacks</th>
    </tr>
    <tr>
      <td>Fair</td>
      <td>${prizeFair}</td>
    </tr>
    <tr>
      <td>Okay</td>
      <td>${prizeOkay}</td>
    </tr>
    <tr>
      <td>Expensive</td>
      <td>${prizeExpensive}</td>
    </tr>
  </table>
    `;
    }
}
