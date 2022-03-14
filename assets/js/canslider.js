'use strict'

window.addEventListener('DOMContentLoaded', ()=>{
    
    const arrLeft = document.querySelector('#canSlider--arrLeft'),
          arrRight = document.querySelector('#canSlider--arrRight');

    const track = document.querySelector('.canSlider__track');
    const blocks = document.querySelectorAll('.canSlider__block')
    const width = blocks[0].offsetWidth;

    let index = 0;

    blocks[index].classList.add('canSlider__block--select');

    function slide(){
        track.style.transform = `translate(-${index * width}px,0)`;
        blocks[index].classList.add('canSlider__block--select');
    }

    arrLeft.addEventListener('click', ()=>{
        if(index - 1 >= 0){
           blocks[index].classList.remove('canSlider__block--select');
            index--;
            slide(); 
        }
        
    })
    arrRight.addEventListener('click', ()=>{
        if(index + 1 < blocks.length){
            blocks[index].classList.remove('canSlider__block--select');
            index++;
            slide();
        }
    })
})