/**
 * Created by Pascal on 10.01.2017.
 */



function activateTab(tab, contentPath){
    $(tab).tab('show');

    $('#mainContent').load(contentPath).hide().fadeIn(500);
}

$(function() {
  activateTab('home', "view/Home.php");
});