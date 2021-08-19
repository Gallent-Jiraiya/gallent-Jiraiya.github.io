$( document ).ready(function() {
    $(".top").trigger('click');  
    
});
function showHidden(clas){
    let disp=document.getElementsByClassName(clas);
    if(disp[0].style.display=='none'){
        for (var i = 0; i < disp.length; i++) {
            disp[i].style.display = 'flex';
        }
    }
    else{
        for (var i = 0; i < disp.length; i++) {
            disp[i].style.display = 'none';
        }
    }
}
function frameChange(name){
    document.getElementById('content_frame').src=name;
}
