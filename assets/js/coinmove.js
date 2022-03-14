'use strict'

window.addEventListener('DOMContentLoaded', ()=>{
    const coin = document.querySelectorAll('.salles__coin');

    const screenSize = screen.width / 2;

    coin.forEach(item=>{
        switch (item.id){
            case 'salles__coinFar': setMovingFar(item); break;
            case 'salles__coinMiddle': setMovingMiddle(item); break;
            case 'salles__coinNearly': setMovingNearly(item); break;
        }
    })


    function setMovingFar(elem){
        window.addEventListener('mousemove', (e)=>{
            elem.style.transform = `translate(${(e.screenX  - screenSize) / 95}px, ${(e.screenY  - screenSize) / 90}px) `;
        })
    }

    function setMovingMiddle(elem){
        window.addEventListener('mousemove', (e)=>{
            elem.style.transform = `translate(${(e.screenX  - screenSize) / 65}px,  ${(e.screenY  - screenSize) / 60}px)`;
        })
    }

    function setMovingNearly(elem){
        window.addEventListener('mousemove', (e)=>{
            elem.style.transform = `translate(${(e.screenX  - screenSize) / 42}px,  ${(e.screenY  - screenSize) / 37}px) `;
        })
    }
})