var controller = new ScrollMagic.Controller();
var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflow: {
    rotate: 20,
    stretch: 0,
    depth: 10,
    modifier: 1,
    slideShadows : true
    },
    loop: true,
    autoplay: {
      delay:3000,
      disableOnInteraction:false,
    },
});

function mobNav() {
    var x = document.getElementById("navbar");
    if (x.className === "topnav") {
        x.style.backgroundColor="rgba(29,30,34,0.99)";
      x.className += "responsive";

    } else {
      x.className = "topnav";
    }
  }
// about slider animation
 $(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        auto:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });
//end of about slider animation  
var navBackColor = new TimelineMax();
navBackColor.to(".topnav",0.01,{transform:"scale3d(2)",backgroundColor:"rgba(29,30,34,0.99)",color:"white",ease:Power1.easeOut});
var sceneNavBackColor = new ScrollMagic.Scene({
    triggerElement: "#hack",
    triggerHook:0.1
})
.setTween(navBackColor)
.addTo(controller);

var tl7 = new TimelineMax();
tl7.from("#logo",1.5,{x:30,opacity:0,ease:Power1.easeOut},0).from(["#1","#2","#3","#4","#5","#6","#7",],1.5,{x:-30,opacity:0},0);
var scene7 = new ScrollMagic.Scene({
    triggerElement: ".topnav",
})
.setTween(tl7)
.addTo(controller);
var tl8 = new TimelineMax();
tl8.from("#make",.5,{x:30,opacity:0,ease:Power1.easeOut}).from("#hack",.5,{x:30,opacity:0,ease:Power1.easeOut}).from("#inter",.5,{x:30,opacity:0,ease:Power1.easeOut}).from("#b-btn",.5,{x:30,opacity:0,ease:Power1.easeOut});
var scene8 = new ScrollMagic.Scene({
    triggerElement: "#banner1"
})
.setTween(tl8)
.addTo(controller);

var tl10 = new TimelineMax();
tl10.from(["#winners"],.5,{opacity:0});
var scene10 = new ScrollMagic.Scene({
    triggerElement: "#winners",
    triggerHook: 0.8
})
.setTween(tl10)
.addTo(controller);
var tl11 = new TimelineMax();
var tl23 = new TimelineMax();
tl23.from(["#rules"],.5,{x:5,opacity:0,ease:Power1.easeOut},0);
var scene23 = new ScrollMagic.Scene({
    triggerElement: "#rules",
    triggerHook: 0.8
})
.setTween(tl23)
.addTo(controller);

if(window.innerWidth>768){
    var tl9 = new TimelineMax();
    tl9.from("#slide",.5,{x:30,opacity:0,ease:Power1.easeOut},0).from("#why",.5,{x:-30,opacity:0},0);
    var scene9 = new ScrollMagic.Scene({
        triggerElement: "#sect2",
        triggerHook: 0.8
    })
    .setTween(tl9)
    .addTo(controller);
    tl11.from(["#step1","#step3","#step5"],.5,{y:50,opacity:0,ease:Power1.easeOut},0).from(["#step2","#step4","#step6"],.5,{y:-50,opacity:0,ease:Power1.easeOut},0);
    var scene11 = new ScrollMagic.Scene({
        triggerElement: "#steps",
        triggerHook: 0.8
    })
    .setTween(tl11)
    .addTo(controller);
    var tl12 = new TimelineMax();
    var tl13 = new TimelineMax();
    var tl14 = new TimelineMax();
    tl12.from(["#thing1"],.5,{x:-25,opacity:0,ease:Power1.easeOut},0).from(["#thing4"],.5,{x:25,opacity:0,ease:Power1.easeOut},0);
    var scene12 = new ScrollMagic.Scene({
        triggerElement: "#thing1",
        triggerHook: 0.8
    })
    .setTween(tl12)
    .addTo(controller);
    tl13.from(["#thing2"],.5,{x:-25,opacity:0,ease:Power1.easeOut},0).from(["#thing5"],.5,{x:25,opacity:0,ease:Power1.easeOut},0);
    var scene13 = new ScrollMagic.Scene({
        triggerElement: "#thing2",
        triggerHook: 0.8
    })
    .setTween(tl13)
    .addTo(controller);
    tl14.from(["#thing3"],.5,{x:-25,opacity:0,ease:Power1.easeOut},0).from(["#thing6"],.5,{x:25,opacity:0,ease:Power1.easeOut},0);
    var scene14 = new ScrollMagic.Scene({
        triggerElement: "#thing3",
        triggerHook: 0.8
    })
    .setTween(tl14)
    .addTo(controller);

}
else if(window.innerWidth>576){
    var tl9 = new TimelineMax();
    tl9.from("#slide",.5,{x:30,opacity:0,ease:Power1.easeOut},0).from("#why",.5,{x:-30,opacity:0},0);
    var scene9 = new ScrollMagic.Scene({
        triggerElement: "#sect2",
        triggerHook: 0.8
    })
    .setTween(tl9)
    .addTo(controller);
    var tl12 = new TimelineMax();
    tl11.from(["#step1","#step3"],.5,{y:50,opacity:0,ease:Power1.easeOut},0).from(["#step2"],.5,{y:-50,opacity:0,ease:Power1.easeOut},0)
    tl12.from(["#step4","#step6"],.5,{y:-50,opacity:0,ease:Power1.easeOut},0).from(["#step5"],.5,{y:50,opacity:0,ease:Power1.easeOut},0);
    var scene11 = new ScrollMagic.Scene({
        triggerElement: "#step1",
        triggerHook: 0.8
    })
    .setTween(tl11)
    .addTo(controller);
    var scene12 = new ScrollMagic.Scene({
        triggerElement: "#step4",
        triggerHook: 0.8
    })
    .setTween(tl12)
    .addTo(controller);
    var tl13 = new TimelineMax();
    var tl14 = new TimelineMax();
    var tl15 = new TimelineMax();
    tl13.from(["#thing1"],.5,{x:-15,opacity:0,ease:Power1.easeOut},0).from(["#thing4"],.5,{x:15,opacity:0,ease:Power1.easeOut},0);
    var scene13 = new ScrollMagic.Scene({
        triggerElement: "#thing1",
        triggerHook: 0.8
    })
    .setTween(tl13)
    .addTo(controller);
    tl14.from(["#thing2"],.5,{x:-15,opacity:0,ease:Power1.easeOut},0).from(["#thing5"],.5,{x:15,opacity:0,ease:Power1.easeOut},0);
    var scene14 = new ScrollMagic.Scene({
        triggerElement: "#thing2",
        triggerHook: 0.8
    })
    .setTween(tl14)
    .addTo(controller);
    tl15.from(["#thing3"],.5,{x:-15,opacity:0,ease:Power1.easeOut},0).from(["#thing6"],.5,{x:15,opacity:0,ease:Power1.easeOut},0);
    var scene15 = new ScrollMagic.Scene({
        triggerElement: "#thing3",
        triggerHook: 0.8
    })
    .setTween(tl15)
    .addTo(controller);
}
else{
    var tl9 = new TimelineMax();
    tl9.from("#slide",.5,{x:15,opacity:0,ease:Power1.easeOut},0).from("#why",.5,{x:-15,opacity:0},0);
    var scene9 = new ScrollMagic.Scene({
        triggerElement: "#sect2",
        triggerHook: 0.8
    })
    .setTween(tl9)
    .addTo(controller);

    var tl12 = new TimelineMax();
    var tl13 = new TimelineMax();
    var tl14 = new TimelineMax();
    var tl15 = new TimelineMax();
    var tl16 = new TimelineMax();
    tl11.from(["#step1"],.5,{y:50,opacity:0,ease:Power1.easeOut},0);
    tl12.from(["#step2"],.5,{y:-50,opacity:0,ease:Power1.easeOut},0);
    tl13.from(["#step3"],.5,{y:50,opacity:0,ease:Power1.easeOut},0);
    tl14.from(["#step4"],.5,{y:-50,opacity:0,ease:Power1.easeOut},0);
    tl15.from(["#step5"],.5,{y:50,opacity:0,ease:Power1.easeOut},0);
    tl16.from(["#step6"],.5,{y:-50,opacity:0,ease:Power1.easeOut},0);
    var scene11 = new ScrollMagic.Scene({
        triggerElement: "#step1",
        triggerHook: 0.8
    })
    .setTween(tl11)
    .addTo(controller);
    var scene12 = new ScrollMagic.Scene({
        triggerElement: "#step2",
        triggerHook: 0.8
    })
    .setTween(tl12)
    .addTo(controller);
    var scene13 = new ScrollMagic.Scene({
        triggerElement: "#step3",
        triggerHook: 0.8
    })
    .setTween(tl13)
    .addTo(controller);
    var scene14 = new ScrollMagic.Scene({
        triggerElement: "#step4",
        triggerHook: 0.8
    })
    .setTween(tl14)
    .addTo(controller);
    var scene15 = new ScrollMagic.Scene({
        triggerElement: "#step5",
        triggerHook: 0.8
    })
    .setTween(tl15)
    .addTo(controller);
    var scene16 = new ScrollMagic.Scene({
        triggerElement: "#step6",
        triggerHook: 0.8
    })
    .setTween(tl16)
    .addTo(controller);

    var tl17 = new TimelineMax();
    var tl18 = new TimelineMax();
    var tl19 = new TimelineMax();
    var tl20 = new TimelineMax();
    var tl21 = new TimelineMax();
    var tl22 = new TimelineMax();
    tl17.from(["#thing1"],.5,{x:15,opacity:0,ease:Power1.easeOut},0);
    tl18.from(["#thing2"],.5,{x:-15,opacity:0,ease:Power1.easeOut},0);
    tl19.from(["#thing3"],.5,{x:15,opacity:0,ease:Power1.easeOut},0);
    tl20.from(["#thing4"],.5,{x:-15,opacity:0,ease:Power1.easeOut},0);
    tl21.from(["#thing5"],.5,{x:15,opacity:0,ease:Power1.easeOut},0);
    tl22.from(["#thing6"],.5,{x:-15,opacity:0,ease:Power1.easeOut},0);
    var scene17 = new ScrollMagic.Scene({
        triggerElement: "#thing1",
        triggerHook: 0.8
    })
    .setTween(tl17)
    .addTo(controller);
    var scene18 = new ScrollMagic.Scene({
        triggerElement: "#thing2",
        triggerHook: 0.8
    })
    .setTween(tl18)
    .addTo(controller);
    var scene19 = new ScrollMagic.Scene({
        triggerElement: "#thing3",
        triggerHook: 0.8
    })
    .setTween(tl19)
    .addTo(controller);
    var scene20 = new ScrollMagic.Scene({
        triggerElement: "#thing4",
        triggerHook: 0.8
    })
    .setTween(tl20)
    .addTo(controller);
    var scene21 = new ScrollMagic.Scene({
        triggerElement: "#thing5",
        triggerHook: 0.8
    })
    .setTween(tl21)
    .addTo(controller);
    var scene22 = new ScrollMagic.Scene({
        triggerElement: "#thing6",
        triggerHook: 0.8
    })
    .setTween(tl22)
    .addTo(controller);
}
/***********TimeLine Animations***********/
  let progress =document.getElementById('scrollbar');
  let scrol=document.getElementById('scroll');
  let icn1=document.getElementById('icn1');
  let icn2=document.getElementById('icn2');
  let icn3=document.getElementById('icn3');
  let icn4=document.getElementById('icn4');
  let icn5=document.getElementById('icn5');
  let icn6=document.getElementById('icn6');
  let icn7=document.getElementById('icn7');
  //var  =  document.getElementById('timeline').getBoundingClientRect().top+window.pageYOffset;
  
  let devWidth;
  window.onscroll=function(){
    let DistanceToTop=icn1.getBoundingClientRect().top+window.pageYOffset;
    let LastIconToTop=icn7.getBoundingClientRect().top+window.pageYOffset;
    let DevHeight=window.innerHeight;
    var maxHeight=(LastIconToTop-DistanceToTop);
        scrol.style.maxHeight=(maxHeight)+"px";
        progress.style.height=(1)+"px";
      let progressHeight=(window.pageYOffset-DistanceToTop)+DevHeight*4/5;
      if(maxHeight>=progressHeight){
      progress.style.height=(progressHeight)+"px";
      }
      else{
        progress.style.height=(maxHeight)+"px";
      }
  }


var tl = new TimelineMax();
var tl2 = new TimelineMax();
var tl3 = new TimelineMax();
var tl4 = new TimelineMax();
var tl5 = new TimelineMax();
var tl6 = new TimelineMax();
var tln7 = new TimelineMax();

tl.from("#box1",0.5,{right:15,opacity:0},0).from("#D1",0.5,{x:20,opacity:0},0);
tl2.from("#box2",0.5,{left:15,opacity:0},0).from("#D2",0.5,{x:-20,opacity:0},0);
tl3.from("#box3",0.5,{right:15,opacity:0},0).from("#D3",0.5,{x:20,opacity:0},0);
tl4.from("#box4",0.5,{left:15,opacity:0},0).from("#D4",0.5,{x:-20,opacity:0},0);
tl5.from("#box5",0.5,{right:15,opacity:0},0).from("#D5",0.5,{x:20,opacity:0},0);
tl6.from("#box6",0.5,{left:15,opacity:0},0).from("#D6",0.5,{x:-20,opacity:0},0);
tln7.from("#box7",0.5,{right:15,opacity:0},0).from("#D7",0.5,{x:20,opacity:0},0);
       
var scene1 = new ScrollMagic.Scene({
                     triggerElement: "#icn1",
                     triggerHook: 0.8,
                 })
                 .setClassToggle("#icn1", "active")
                 .setTween(tl)
                 .addTo(controller);
var scene2 = new ScrollMagic.Scene({
                     triggerElement: "#icn2",
                     triggerHook: 0.8
                 })
                 .setClassToggle("#icn2", "active")
                 .setTween(tl2)
                 .addTo(controller);
var scene3 = new ScrollMagic.Scene({
                     triggerElement: "#icn3",
                     triggerHook: 0.8
                 })
                 .setClassToggle("#icn3", "active")
                 .setTween(tl3)
                 .addTo(controller);
var scene4 = new ScrollMagic.Scene({
                     triggerElement: "#icn4",
                     triggerHook: 0.8
                 })
                 .setClassToggle("#icn4", "active")
                 .setTween(tl4)
                 .addTo(controller);
var scene5 = new ScrollMagic.Scene({
                    triggerElement: "#icn5",
                    triggerHook: 0.8
                })
                .setClassToggle("#icn5", "active")
                .setTween(tl5)
                .addTo(controller);
var scene6 = new ScrollMagic.Scene({
                    triggerElement: "#icn6",
                    triggerHook: 0.8
                })
                .setClassToggle("#icn6", "active")
                .setTween(tl6)
                .addTo(controller);
var scenetl7 = new ScrollMagic.Scene({
                    triggerElement: "#icn7",
                    triggerHook: 0.8
                })
                .setClassToggle("#icn7", "active")
                .setTween(tln7)
                .addTo(controller);
/******end of timeline animations************/
          
/****Partners Animations*********/
    var tl23 = new TimelineMax();
    var tl24 = new TimelineMax();
    var tl25 = new TimelineMax();
    var tl26 = new TimelineMax();
    var tl27 = new TimelineMax();
    var tl28 = new TimelineMax();
    tl23.from(["#partn1"],.5,{rotationY:150,opacity:0,ease:Power1.easeOut},0);
    tl24.from(["#partn2"],.5,{rotationY:150,opacity:0,ease:Power1.easeOut},0);
    tl25.from(["#partn3"],.5,{rotationY:150,opacity:0,ease:Power1.easeOut},0);
    tl26.from(["#partn4"],.5,{rotationY:150,opacity:0,ease:Power1.easeOut},0);
    tl27.from(["#partn5"],.5,{rotationY:150,opacity:0,ease:Power1.easeOut},0);
    tl28.from(["#partn6"],.5,{rotationY:150,opacity:0,ease:Power1.easeOut},0);
    var scene23 = new ScrollMagic.Scene({
        triggerElement: "#partn1",
        triggerHook: 0.8
    })
    .setTween(tl23)
    .addTo(controller);
    var scene24 = new ScrollMagic.Scene({
        triggerElement: "#partn2",
        triggerHook: 0.8
    })
    .setTween(tl24)
    .addTo(controller);
    var scene25 = new ScrollMagic.Scene({
        triggerElement: "#partn3",
        triggerHook: 0.8
    })
    .setTween(tl25)
    .addTo(controller);
    var scene26 = new ScrollMagic.Scene({
        triggerElement: "#partn4",
        triggerHook: 0.8
    })
    .setTween(tl26)
    .addTo(controller);
    var scene27 = new ScrollMagic.Scene({
        triggerElement: "#partn5",
        triggerHook: 0.8
    })
    .setTween(tl27)
    .addTo(controller);
    var scene28 = new ScrollMagic.Scene({
        triggerElement: "#partn6",
        triggerHook: 0.8
    })
    .setTween(tl28)
    .addTo(controller);
    

/****End of Partners Animations*********/
/****Awards Animations*********/
var tl29 = new TimelineMax();
var tl30 = new TimelineMax();
var tl31 = new TimelineMax();
tl29.from(["#award-1"],.5,{rotationY:150,opacity:0,ease:Power1.easeOut},0);
tl30.from(["#award-2"],.5,{rotationY:150,opacity:0,ease:Power1.easeOut},0);
tl31.from(["#award-3"],.5,{rotationY:150,opacity:0,ease:Power1.easeOut},0);
var scene29 = new ScrollMagic.Scene({
    triggerElement: "#award-1",
    triggerHook: 0.8
})
.setTween(tl29)
.addTo(controller);
var scene30 = new ScrollMagic.Scene({
    triggerElement: "#award-2",
    triggerHook: 0.8
})
.setTween(tl30)
.addTo(controller);
var scene31 = new ScrollMagic.Scene({
    triggerElement: "#award-3",
    triggerHook: 0.8
})
.setTween(tl31)
.addTo(controller);

/****End of Awards Animations*********/
/**** Social icons Animations*****/    
        var tl32 = new TimelineMax();
        tl32.to(["#social"],.5,{opacity:0, display:"none",ease:Power1.easeOut},0);
        var scene32 = new ScrollMagic.Scene({
            triggerElement: "#sect2",
            triggerHook: 0.9
        })
        .setTween(tl32)
        .addTo(controller);
    

    

/**** End of Social icons Animations*****/
/** Things to remember***/
const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = [
"Things to remember", 
];

const typingDelay = 90;
const erasingDelay = 0;
const newTextDelay = 400; // Delay between current and next text

let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
  	setTimeout(erase, newTextDelay);
  }
}

function erase() {
	if (charIndex > 0) {
    if ( !cursorSpan.classList.contains("typing") ) 
      cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-200);
    charIndex--;
    setTimeout(erase, erasingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if(textArrayIndex>=textArray.length) textArrayIndex=0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
  if(textArray.length) setTimeout(type, newTextDelay + 250);
});
/** End of Things to remember***/
let imgs=document.getElementsByClassName('award-img');
for (var i = 0; i < imgs.length; i++) {
    imgs[i].style.height = imgs[i].clientWidth +'px';
    
}
let uokimgs=document.getElementsByClassName('uok-img');
for (var i = 0; i < uokimgs.length; i++) {
    uokimgs[i].style.height = uokimgs[i].clientWidth +'px';
    
}
    
