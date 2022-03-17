'use strict'

window.addEventListener('DOMContentLoaded', ()=>{
    const blog__elem = document.querySelectorAll('.blog__elem');
    const addBtn = document.querySelector('.blogpage__add');
    let step = 12;

    if (window.screen.width < 1000){
        step = 10;
    }
    if (window.screen.width < 700){
        step = 8;
    }
    if (window.screen.width < 500){
        step = 5;
    }

    const search = document.querySelector('.blogpage__searchWrap input');
    const titles = document.querySelectorAll('.blog__elemItemTitle h3');
    let searchFlag = 0;

    const stage = {
        end: 0,
        start:0
    }

    search.addEventListener('input', ()=>{
        

        if (search.value.length > 3){
            addBtn.style.display = 'none';
            searchFlag = 1;
            hiddenAll();
            searchPost(search.value.toLowerCase());
            
        } else if (searchFlag == 1){
            searchFlag =0;
            stage.start = 0;
            stage.end = step;
            hiddenAll();
            adder(stage.start, stage.end);
            if (blog__elem.length > step){
                addBtn.style.display = 'flex';
            }
        }
    })


   

    if (blog__elem.length > step){
        hiddenAll();
        stage.end+=step;
        adder(stage.start, stage.end);

        addBtn.style.display = 'flex';

        addBtn.querySelector('p').addEventListener('click', ()=>{
            adder(stage.start, stage.end);
        })
    }



    function hiddenAll(){
        blog__elem.forEach(item=>{
            item.style.display = 'none';
        })
    }

    function adder(start, end){
        for(let i = start; i < end; i++){
            if(blog__elem[i]){
                blog__elem[i].style.display = 'block';
            }
        }
        stage.start+=step;
        stage.end+=step;

        if (stage.start > blog__elem.length){
            addBtn.style.display = 'none';
        }
    }

    function searchPost(txt){
       
        titles.forEach((item,index)=>{
            if(item.innerHTML.toLowerCase().includes(txt)){
                
                blog__elem[index].style.display = 'block';
            }
        })
    }
})