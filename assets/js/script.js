'use strict'


window.addEventListener('DOMContentLoaded', ()=>{
    // Working on popups

    const popupsExit = document.querySelectorAll('.popup__exit');


    popupsExit.forEach(item=>{
        item.addEventListener('click', ()=>{
            item.parentElement.parentElement.style.display = 'none';
        })
    })


    const formPop = document.querySelector('#formPop'),
          formPopBtn = document.querySelectorAll('#formPopBtn'),
          typeCource = document.querySelector('#typeCource');


    formPopBtn.forEach(item=>{
        item.addEventListener('click', ()=>{
            formPop.style.display = 'flex';
            typeCource.value = item.dataset.type;
        })
    })
})