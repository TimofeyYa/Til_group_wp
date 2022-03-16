'use strict'

window.addEventListener('DOMContentLoaded', ()=>{
    if (window.screen.width < 875){
        const btns = document.querySelectorAll('.program__sideType');

        btns.forEach(item =>{
            let flag = 1;
            const block = item.parentElement.querySelector('.program__sideDesc');
            item.addEventListener('click', ()=>{
                if (flag == 1){
                    block.style.display = 'block'
                    flag = 0;
                }else {
                    block.style.display = 'none'
                    flag = 1;
                }

            })
        })
    }
})