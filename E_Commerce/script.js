
const menuBtn = document.getElementById('menu-btn');
const nav = document.getElementById('navbar');

const images = document.querySelectorAll('.img')
const proImage = document.getElementById('pro-image')
const productBoxes = document.getElementsByClassName('product-box')


menuBtn.addEventListener('click', () => {
    if (menuBtn.classList.contains('ri-menu-3-line')) {
        menuBtn.classList.replace('ri-menu-3-line', 'ri-close-fill');
        nav.style.right="0"
        document.body.style.overflow="hidden"        

    } else {
        menuBtn.classList.replace('ri-close-fill', 'ri-menu-3-line');
        nav.style.right="-100%"
        document.body.style.overflow="scroll" 
    }
   
});


images.forEach((img)=>{
    img.addEventListener('click',()=>{  
        proImage.src = img.src;
    })
})

Array.from(productBoxes).forEach((box)=>{
    box.addEventListener('click',()=>{
        window.location.href="sproduct.html"
    })
})