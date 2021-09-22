if ($(window).width() < 501){
	var lazyLoadInstance = new LazyLoad({
	  threshold: 500
	})
	} else {
	var lazyLoadInstance = new LazyLoad({
	  threshold: 1000
	})
}




document.addEventListener('DOMContentLoaded', function() {
  document.querySelector('body').classList.remove('body_noload');


  //Табы блок Онлайн курсы 
  let tabs=document.querySelectorAll('.tabheader_item'),
      tabsContent=document.querySelectorAll('.tabcontent_item'),
      tabsParent=document.querySelector('.tabheader'),
      tabsImage=document.querySelectorAll('.tabcontent_image');


      function hideTabImage(){
        tabsImage.forEach(item=>{
          item.classList.add('hide');
          item.classList.remove('show','fade')
        });
        
        tabs.forEach(item=>{
          item.classList.remove('tabheader_item_active')
        })
    
      }

  function hideTabContent(){
    tabsContent.forEach(item=>{
      item.classList.add('hide');
      item.classList.remove('show','fade')
    });
    
    tabs.forEach(item=>{
      item.classList.remove('tabheader_item_active')
    })

  }

  function showTabContent(i=0){
    tabsContent[i].classList.add('show','fade');
    tabsContent[i].classList.remove('hide');
    tabsImage[i].classList.add('show','fade');
    tabsImage[i].classList.remove('hide');
    tabs[i].classList.add('tabheader_item_active');
  }

  hideTabContent();
  hideTabImage();
  showTabContent();

  tabsParent.addEventListener('click', function(event){
    const target=event.target;
    if(target && target.classList.contains('tabheader_item')){
      tabs.forEach((item,i)=>{
        if(target==item){
          hideTabContent();
          hideTabImage();
          showTabContent(i);
        }
      })
    }
  })


  // салайдер отзывы
  
	const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 3,


  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {

    320: {
            slidesPerView: 1
          },
    599: {
            slidesPerView: 2
              },
    800: {
            slidesPerView: 3
    },
}

  
});



let screenWidth = window.screen.width;

if(screenWidth > 1150) {
    document.querySelectorAll('#choose .inner__text').forEach(item=>{
    if(+item.getAttribute('data-id') !==1){
        item.classList.add('hide_text')
    }else{
      item.classList.add('show_text')
    }
  })


  window.addEventListener('scroll', ()=>{
    //фнимация при скролле
        if(document.querySelector('#education').getBoundingClientRect().y<200 && document.querySelector('#education').getBoundingClientRect().y>0){
     
      document.querySelector('#education .educat_pechat').classList.add('animation_pechat')
      document.querySelector('#education .item__educat').classList.add('animation_educat')
    }

    
 

    if(document.querySelector('#advantages').getBoundingClientRect().y<300 && document.querySelector('#advantages').getBoundingClientRect().y>0){
      document.querySelector('.advantages__block__items').classList.add('animation_kids')
  
    }
    if(document.querySelector('#online').getBoundingClientRect().y<100 && document.querySelector('#online').getBoundingClientRect().y>0){
      document.querySelector('.figure1').classList.add('animation_figure1')
  
    }

    if(document.querySelector(' #choose .choose__block__right').getBoundingClientRect().top <= 260.84 && document.querySelector(' #choose .choose__block__right').getBoundingClientRect().top >= -790){
      document.querySelector(' #choose .choose__block__left').style.bottom = `${document.querySelector('#choose').getBoundingClientRect().top}px`
    }

// логика скролла "Почему родители выбирают..." 
    let text = document.querySelectorAll('#choose .inner__text')
    const elem = document.querySelector('#choose .choose__elem')
    const elem1 = document.querySelector('#choose .choose__elem__podl')
    document.querySelectorAll('#choose .item__right').forEach(item=>{
      if(item.getBoundingClientRect().top >0 && item.getBoundingClientRect().top<= 480){
        switch(+item.getAttribute('data-image')){
          case 1:
            if(text[1].classList.contains('show_text')){
              text[1].classList.add('hide_text')
              text[1].classList.remove('show_text')
              elem.classList.remove('elem_img_two')
              elem1.classList.remove('elem_img_two')
              if(text[0].classList.contains('hide_text')){
                text[0].classList.remove('hide_text')
                text[0].classList.add('show_text')
                elem.classList.remove('elem_img_two')
                elem1.classList.remove('elem_img_two')
              }
            }
            break;
          case 2:
            if(text[0].classList.contains('show_text')){
              text[0].classList.remove('show_text')
              text[0].classList.add('hide_text')
              text[1].classList.add('show_text')
              text[1].classList.remove('hide_text')
              elem.classList.remove('elem_img_three')
              elem.classList.add('elem_img_two')
              elem1.classList.remove('elem_img_three')
              elem1.classList.add('elem_img_two')
            }else if(text[2].classList.contains('show_text')){
              text[2].classList.remove('show_text')
              text[2].classList.add('hide_text')
              text[1].classList.add('show_text')
              text[1].classList.remove('hide_text')
              elem.classList.remove('elem_img_three')
              elem.classList.add('elem_img_two')
              elem1.classList.remove('elem_img_three')
              elem1.classList.add('elem_img_two')
          
            }
            break;
          case 3:
            if(text[1].classList.contains('show_text')){
              text[1].classList.remove('show_text')
              text[1].classList.add('hide_text')
              text[2].classList.add('show_text')
              text[2].classList.remove('hide_text')
              elem.classList.remove('elem_img_two')
              elem.classList.add('elem_img_three')
              elem1.classList.remove('elem_img_two')
              elem1.classList.add('elem_img_three')
            }
            break;
        }
      
      }
    })
  })

}
if(screenWidth <= 1150){
  document.querySelectorAll('#choose .inner__text').forEach(item=>{
    if(+item.getAttribute('data-id') !==1){
        item.classList.add('hide_text')
    }else{
      item.classList.add('show_text')
    }
  })



  window.addEventListener('scroll', ()=>{
     
    // console.log(window.scrollY)
    if(document.querySelector(' #choose .choose__block__right').getBoundingClientRect().top <= 260.84 && document.querySelector(' #choose .choose__block__right').getBoundingClientRect().top >= -600){
      document.querySelector(' #choose .choose__block__left').style.bottom = `${document.querySelector('#choose').getBoundingClientRect().top}px`
    }


    let text = document.querySelectorAll('#choose .inner__text')
    const elem = document.querySelector('#choose .choose__elem')
    const elem1 = document.querySelector('#choose .choose__elem__podl')
    document.querySelectorAll('#choose .item__right').forEach(item=>{
      if(item.getBoundingClientRect().top >0 && item.getBoundingClientRect().top<= 280){
        switch(+item.getAttribute('data-image')){
          case 1:
            if(text[1].classList.contains('show_text')){
              text[1].classList.add('hide_text')
              text[1].classList.remove('show_text')
              elem.classList.remove('elem_img_two')
              elem1.classList.remove('elem_img_two')
              if(text[0].classList.contains('hide_text')){
                text[0].classList.remove('hide_text')
                text[0].classList.add('show_text')
                elem.classList.remove('elem_img_two')
                elem1.classList.remove('elem_img_two')
              }
            }
            break;
          case 2:
            if(text[0].classList.contains('show_text')){
              text[0].classList.remove('show_text')
              text[0].classList.add('hide_text')
              text[1].classList.add('show_text')
              text[1].classList.remove('hide_text')
              elem.classList.remove('elem_img_three')
              elem.classList.add('elem_img_two')
              elem1.classList.remove('elem_img_three')
              elem1.classList.add('elem_img_two')
            }else if(text[2].classList.contains('show_text')){
              text[2].classList.remove('show_text')
              text[2].classList.add('hide_text')
              text[1].classList.add('show_text')
              text[1].classList.remove('hide_text')
              elem.classList.remove('elem_img_three')
              elem.classList.add('elem_img_two')
              elem1.classList.remove('elem_img_three')
              elem1.classList.add('elem_img_two')
          
            }
            break;
          case 3:
            if(text[1].classList.contains('show_text')){
              text[1].classList.remove('show_text')
              text[1].classList.add('hide_text')
              text[2].classList.add('show_text')
              text[2].classList.remove('hide_text')
              elem.classList.remove('elem_img_two')
              elem.classList.add('elem_img_three')
              elem1.classList.remove('elem_img_two')
              elem1.classList.add('elem_img_three')
            }
            break;
        }
      
      }
    })
  })
}
if(screenWidth<= 1023){
  window.addEventListener('scroll', ()=>{
 
      if(document.querySelector('#education').getBoundingClientRect().y<300 && document.querySelector('#education').getBoundingClientRect().y>500  || document.querySelector('#education').getBoundingClientRect().bottom>100) {
  
    document.querySelector('#education .educat_pechat').classList.add('animation_pechat')
   
  } 
  if(document.querySelector('#online').getBoundingClientRect().y<100 && document.querySelector('#online').getBoundingClientRect().y>0){
    document.querySelector('.figure1').classList.add('animation_figure1')

  }
    })
}

//Анимация размытостей
gsap.registerPlugin(ScrollTrigger);

gsap.to(".ell7",
{
  scrollTrigger:{
    trigger:".ell7",
    start:"100px 20%",
    end:"+=200px",
   
    scrub:1,
    toggleActions: "restart pause reserve pause"
  },
  y:-300,
  duration:4
})

gsap.to(".ell8",
{
  scrollTrigger:{
    trigger:".ell8",
    start:"100px 20%",
    end:"+=200px",
   
    scrub:1,
    toggleActions: "restart pause reserve pause"
  },
  y:-300,
  duration:4
})

gsap.to(".ell10",
{
  scrollTrigger:{
    trigger:".ell10",
    start:"100px 10%",
    end:"+=200px",
  
    scrub:1,
    toggleActions: "restart pause reserve pause"
  },
  y:200,
  x:100,
  duration:7
})

gsap.to(".ell11",
{
  scrollTrigger:{
    trigger:".ell11",
    start:"80px 10%",
    end:"+=200px",
    
    scrub:1,
    toggleActions: "restart pause reserve pause"
  },
  y:200,
  x:-100,
  duration:7
})

gsap.to(".ell12",
{
  scrollTrigger:{
    trigger:".ell12",
    start:"100px 10%",
    end:"+=200px",
   
    scrub:1,
    toggleActions: "restart pause reserve pause"
  },
  y:200,
  x:100,
  duration:7
})

gsap.to(".ell13",
{
  scrollTrigger:{
    trigger:".ell13",
    start:"100px 10%",
    end:"+=200px",
    
    scrub:1,
    toggleActions: "restart pause reserve pause"
  },
  y:200,
  x:-100,
  duration:7
})


gsap.from(".ell18",
{
  scrollTrigger:{
    trigger:".ell18",
    start:"top 10%",
    end:"center center",
    scrub:1,
   
    toggleActions: "restart pause reserve pause"
  },
  y:200,
  ease: "ease",
  duration:100
})

gsap.from(".ell19",
{
  scrollTrigger:{
    trigger:".ell19",
    start:"top 10%",
    end:"center center",
    scrub:1,
   
    toggleActions: "restart pause reserve pause"
  },
  y:400,
  ease: "ease",
  duration:100
})


gsap.to(".ell5",
{
  scrollTrigger:{
    trigger:".ell5",
    start:"top 40%",
    end:"center center",
   
    scrub:1,
    toggleActions: "restart pause reserve pause"
  },
  y:-200,
  ease: "ease",
  duration:100
})

gsap.to(".ell6",
{
  scrollTrigger:{
    trigger:".ell6",
    start:"top 40%",
    end:"center center",
  
    scrub:1,
    toggleActions: "restart pause reserve pause"
  },
  y:-400,
  ease: "ease",
  duration:100
})

  });