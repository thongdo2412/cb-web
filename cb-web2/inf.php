<script type="text/javascript">

    var myCrm = "https://wn373.infusionsoft.com";

    var code = getQueryVariable("w") + "/";
    var affiliate = getQueryVariable("p") + "/";
    var ad = getQueryVariable("a");

    if (ad == "not found") {
        ad = "";
    } else {
        ad = ad + "/";
    }

    window.location = myCrm + "/go/" + code + affiliate + ad;


    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        var returnVal;
        var found = "false";

        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                returnVal = pair[1];
                found = "true";
                break;
            }
        }
        if (found == "false") {
            returnVal = "not found";
        }

        return returnVal;
    }

</script>
