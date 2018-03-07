const apiUrl = "https://dbh99ppw9f.execute-api.us-east-1.amazonaws.com/prod/api";
function getParameterByName(name, url) {
  if (!url) url = window.location.href;
  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
  results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, " "));
}
const checkoutID = getParameterByName('checkoutid');
setTimeout(function() {
  if (checkoutID != "" && checkoutID != null && checkoutID != "null") {
    sendPostback(checkoutID);
  }
}, 5000);

function sendPostback(checkoutID) {
  console.log(`begin postback with ${checkoutID}`);
  var formdata = {};
  formdata.checkoutID = checkoutID;
  $.ajax({
      type: 'POST',
      data: JSON.stringify(formdata),
      contentType: 'application/json',
      crossDomain: true,
      url: `${apiUrl}/postback`,
      success: function(data, status){
        console.log(status);
        return;
      },
      error: function (data, status) {
        console.log(status);
        return;
      }
  });
}

// handle back button click event
function back() {
  // pathEl.innerHTML = window.location.pathname;
  window.location = `https://citybeauty.com/orderconfirmation.php?checkoutid=${checkoutID}`;
}

function push() {
  const url = window.location.href + '&#' + Date.now();
  history.pushState({}, null, url);
}
push();

window.addEventListener('popstate',handleBackButton, false);
function handleBackButton() {
  window.location = `https://citybeauty.com/orderconfirmation.php?checkoutid=${checkoutID}`;
}
