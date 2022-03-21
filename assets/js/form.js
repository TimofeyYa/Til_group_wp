'use strict'

window.addEventListener('DOMContentLoaded', ()=>{
    const forms = document.querySelectorAll('form');
    const testInp = document.querySelectorAll('#testInp');

    setTimeout(()=>{
        forms.forEach(item=>{
            item.addEventListener('click', ()=>{
                testInp.forEach(item =>{
                    item.value = 'traid';
                })
            })
        })

        setTimeout(()=>{
            testInp.forEach(item =>{
                item.value = 'traid';
            })
        }, 5000)

    }, 1500)


    forms.forEach(item =>{
        item.addEventListener('submit', (e)=>{
            e.preventDefault();
            let action = e.currentTarget.getAttribute('action');
            const formData = new FormData(item);

            let request = new XMLHttpRequest();

            request.open('POST', action,true);
            request.send(formData);

            request.onreadystatechange = ()=> {
                if(request.status != 200){
                    alert('Произошла ошибка');
                }
            }
        })
    })
})