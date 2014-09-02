/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    $('#selecctall').click(function(event) {  //on click 
        if (this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        } else {
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });
        }

    });

});
function read() {

    if (document.getElementById('create').checked) {
        document.getElementById("ListContact_list_id").disabled = true;
        document.getElementById("ListContact_list_name").disabled = false;
        document.getElementById("updateButton").disabled = true;
        document.getElementById("createButton").disabled = false;
        document.getElementById("tagUpdate").disabled = true;

        $("button[name='add']").attr('disabled', 'disabled');
        $("button[name='addall']").attr('disabled', 'disabled');

        $("button[name='remove']").attr('disabled', 'disabled');
        $("button[name='removeall']").attr('disabled', 'disabled');
    }
    if (document.getElementById('update').checked) {
        document.getElementById("ListContact_list_id").disabled = false;
        document.getElementById("ListContact_list_name").disabled = true;
        document.getElementById("updateButton").disabled = false;
        document.getElementById("createButton").disabled = true;
        document.getElementById("tagUpdate").disabled = false;

        $("button[name='add']").removeAttr('disabled');
        $("button[name='addall']").removeAttr('disabled');
        $("button[name='remove']").removeAttr('disabled');
        $("button[name='removeall']").removeAttr('disabled');
    }


}


function  check() {

    var elements = document.getElementsByName("contact_id[]");
    document.getElementById('Delete').disabled = true;
    for (var i = 0; i < elements.length; i++) {
        if (elements[i].checked) {
//            alert("The " + (i + 1) + ". radio button is checked");
            document.getElementById('Delete').disabled = false;
        }
    }

}


function  checkall() {
    if (document.getElementById('selecctall').checked)
        document.getElementById('Delete').disabled = false;
    else
        document.getElementById('Delete').disabled = true;
}


function  add_addall()
{
    var element = document.getElementById("tagCreate");
    if (element.selectedIndex != -1) {


        $(document).ready(function() {
            $("button[name='add']").removeAttr('disabled');

            //$("a[name='addall']").removeAttr('disabled');

            $("button[name='remove']").removeAttr('disabled');

            //$("a[name='removeall']").removeAttr('disabled');
        });



    }
    else {
        $("button[name='add']").attr('disabled', 'disabled');

        //$("a[name='addall']").attr('disabled','disabled');
    }

}
function  Remove_Removeall()
{
    var element = document.getElementById("tagUpdate");

    if (element.selectedIndex != -1) {
        $(document).ready(function() {
            $("button[name='Remove']").removeAttr('disabled');
//         $("button[name='yt2']").removeAttr('disabled');
//        document.getElementById("updateButton").disabled = false;

        });
    }
    else {
        $("button[name='Remove']").attr('disabled', 'disabled');
//        $("button[id='yt2']").attr('disabled','disabled');

//     document.getElementById("updateButton").disabled = true;

    }


}



function AddToBlack() {

    source = contactlist.elements['contact_id[]'];
    destination = contactlist.elements['contact_id_of_list[]'];
    var tabsource = '';
    for (var i = 0; i < source.options.length; i++) {
        if (source.options[i].selected == true) {
            tabsource = tabsource + source.options[i].value + ',';
        }
    }
    var tabdestination = '';
    for (var i = 0; i < destination.options.length; i++) {
        tabdestination = tabdestination + destination.options[i].value + ',';
    }
    
     var url = 'http://presslist.test.bidnet.vc/listContact/addcontact/source/' + tabsource + '/destination/' + tabdestination;

   // var url = 'http://localhost/APL/listContact/addcontact/source/' + tabsource + '/destination/' + tabdestination;

    //var url = 'https://tompanther.arvixe.com/~webside/yetgroup.com/demo-webserver/APL/index.php/listContact/addcontact/source/'+tabsource+'/destination/'+tabdestination;
    ajaxsend(url, 'updatelist');

}


function AddAllToBlack() {

    source = contactlist.elements['contact_id[]'];
    destination = contactlist.elements['contact_id_of_list[]'];
    destinationid = document.getElementById("tagUpdate");
    //var tabsource = '';
    //for(var i = 0; i < source.options.length; i++){
    //      tabsource =tabsource + source.options[i].value+',';
    //}

    $('#tagUpdate')
            .find('option')
            .remove()
            .end();
    for (var i = 0; i < source.options.length; i++) {
        var option = document.createElement("option");
        option.text = source.options[i].text;
        option.value = source.options[i].value;
        destination.add(option);
        destination.options[i].selected = true;
    }


  
     var url = 'http://presslist.test.bidnet.vc/listContact/addallcontact/';

    //var url = 'http://localhost/APL/listContact/addallcontact/';
    
  
//            alert(url);
//            //var url = 'https://tompanther.arvixe.com/~webside/yetgroup.com/demo-webserver/APL/index.php/listContact/addallcontact/source/'+tabsource;  
//             ajaxpsot(tabsource, url,'updatelist');         

}



function RemoveAllFromBlack() {


     var url = 'http://presslist.test.bidnet.vc/listContact/removeallcontact';
   // var url = 'http://localhost/APL/listContact/removeallcontact';
    
    //var url = 'https://tompanther.arvixe.com/~webside/yetgroup.com/demo-webserver/APL/index.php/listContact/removeallcontact';
    ajaxsend(url, 'updatelist');

}


function RemoveFromBlack() {

    destination = contactlist.elements['contact_id_of_list[]'];
    var tabdestination = '';
    for (var i = 0; i < destination.options.length; i++) {
        if (destination.options[i].selected != true) {
            tabdestination = tabdestination + destination.options[i].value + ',';
        }
    }
    var url = 'http://presslist.test.bidnet.vc/listContact/removecontact/destination/' + tabdestination;
    // var url = 'http://localhost/APL/listContact/removecontact/destination/' + tabdestination;
    //var url = 'https://tompanther.arvixe.com/~webside/yetgroup.com/demo-webserver/APL/index.php/listContact/removecontact/destination/'+tabdestination;
    ajaxsend(url, 'updatelist');

}

function selectlist(value, urlaction, divview) {

//    var element = document.getElementById("updatelist");
//    if(element.selectedIndex == -1)
//     document.getElementById("updateButton").disabled = true;
//     else
//         {
//          document.getElementById("updateButton").disabled = false;
    document.getElementById("Removeall").disabled = false;
    var url = urlaction + value;
    ajaxsend(url, divview);
}


function ajaxsend(urlaction, divview) {
    var xhr;
    if (window.XMLHttpRequest)
        xhr = new XMLHttpRequest(); // all browsers 
    else
        xhr = new ActiveXObject("Microsoft.XMLHTTP");     // for IE


    xhr.open('GET', urlaction, false);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var div = document.getElementById(divview);
            div.innerHTML = xhr.responseText;
        }
    }
    xhr.send();
}


function ajaxpsot(value, urlaction, divview) {
    var xhr;
    if (window.XMLHttpRequest)
        xhr = new XMLHttpRequest(); // all browsers 
    else
        xhr = new ActiveXObject("Microsoft.XMLHTTP");     // for IE


    xhr.open('GET', urlaction, false);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var div = document.getElementById(divview);
            div.innerHTML = xhr.responseText;
        }
    }
    xhr.send(value);
}

function updatelist() {
    if (document.getElementById("update").checked == true) {

        var element = document.getElementById("tagUpdate");
        if (element.selectedIndex == -1) {
            alert('Please select one or more journalits');
            return false;
        }
    }
    
    if (document.getElementById("create").checked == true) {

        var element = document.getElementById("tagCreate");
        if (element.selectedIndex == -1) {
            alert('Please select one or more journalits');
            return false;
        }
    }
    

}
// 
//
//
