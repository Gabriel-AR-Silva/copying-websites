const fateModal = document.querySelector('.fate-language');
const modal = document.querySelector('.modal');
const btnModal = document.querySelector('.language');
const ccfx = document.querySelector('#ccfx');

const toggleClass = () =>{
    [fateModal, modal].forEach((el)=>{el.classList.toggle('hide')})

    if(modal.classList.contains('hide'))
    {
        ccfx.style.cssText = 'transform: rotateZ(90deg);'
    }
    else
    {
        ccfx.style.cssText = 'transform: rotateZ(-90deg);'
    }    
}

[fateModal, btnModal].forEach((el) =>{
    el.addEventListener('click', () => toggleClass())
});

