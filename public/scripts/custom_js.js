function groupSearch() {
    document.getElementById("sortGroup").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, grp, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("sortGroup");
    grp = div.getElementsByClassName("grp");
    for (i = 0; i < grp.length; i++) {
        txtValue = grp[i].textContent || grp[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            grp[i].style.display = "";
        } else {
            grp[i].style.display = "none";
        }
    }
}

function isDoubleByte(str) {
    for (var i = 0, n = str.length; i < n; i++) {
        if (str.charCodeAt(i) > 255) {
            return true;
        }
    }
    return false;
}
document.getElementById('campaign_message').addEventListener('input', function () {
    var text = this.value;
    var unicode = isDoubleByte(text);

    if (unicode) {
        document.querySelector('#charectercount').textContent = text.length;
        document.querySelector('#smscount').textContent = Math.ceil(text.length / 70);
        if(text.length > 70){
            document.querySelector('#smscount').textContent = Math.ceil(text.length / 67);
        }
        document.querySelector('#sms-type').textContent = "Unicode";
    } else {
        document.querySelector('#charectercount').textContent = text.length;
        document.querySelector('#smscount').textContent = Math.ceil(text.length / 160);
        if(text.length > 160){
            document.querySelector('#smscount').textContent = Math.ceil(text.length / 153);
        }
        document.querySelector('#sms-type').textContent = "Text";
    }

});

var now = new Date();
var camp_name = "Campaign {{date('YmdHis')}}";
document.querySelector('#campaign-name').value = camp_name;